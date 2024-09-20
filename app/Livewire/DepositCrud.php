<?php

namespace App\Livewire;

use App\Models\Deposit;
use App\Services\FileHandlerService;
use App\Services\MailSender;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class DepositCrud extends Component
{
    use FileHandlerService;
    use WithFileUploads;
    use MailSender;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $users;
    public $user_id;
    public $amount;
    public $payment_date;
    public $remark;
    public $depositId;
    public $statement;

    protected $rules = [
        'user_id'   => 'required|exists:users,id',
        'amount'    => 'required|numeric',
        'payment_date' => 'required|date',
        'remark'       => 'nullable|string',
        //'statement'    => 'nullable|file|mimes:jpg,png,pdf,txt,xlsx',
    ];

    public function mount($users) {
        $this->users = $users;
    }

    public function resetInputFields()
    {
        $this->user_id = '';
        $this->amount = '';
        $this->payment_date = '';
        $this->remark = '';
        $this->depositId = null;
    }

    public function store()
    {
        try {
            $this->validate();
            $file = $this->uploadViaDisk($this->statement, 'backend/images/statements/', '', 'personal_disk'); //'personal_disk' is a custom disk name

            Deposit::create([
                'user_id'   => $this->user_id,
                'amount'    => $this->amount,
                'payment_at'=> $this->payment_date,
                'remark'    => $this->remark,
                'statement_file' => $file ?? null,
            ]);

            // Emit event to close the modal
            $this->dispatch('closeAddModal');
            $this->resetInputFields();

            session()->flash('success', 'Deposit created successfully.');

        } catch (ValidationException $e) {
            // Emit event to close the modal
            $this->dispatch('closeAddModal');
            $this->validate();
        }
    }

    public function edit($id)
    {
        $deposit = Deposit::findOrFail($id);

        $this->depositId    = $deposit->id;
        $this->user_id      = $deposit->user_id;
        $this->amount       = $deposit->amount;
        $this->payment_date = $deposit->payment_at->format('Y-m-d');
        $this->statement    = $deposit->statement_file;
        $this->remark       = $deposit->remark;

        // Emit event to open the modal
        $this->dispatch('openEditModal');
    }

    public function update()
    {
        $this->validate();
        $deposit = Deposit::find($this->depositId);

        $file = $this->uploadViaDisk($this->statement, 'backend/images/statements/', $deposit->statement_file, 'personal_disk'); //'personal_disk' is a custom disk name

        $deposit->update([
            'user_id'   => $this->user_id,
            'amount'    => $this->amount,
            'payment_at'=> $this->payment_date,
            'remark'    => $this->remark,
            'statement_file' => $file ?? $deposit->statement_file,
        ]);

        // Emit event to close the modal
        $this->dispatch('closeEditModal');
        $this->resetInputFields();

        session()->flash('success', 'Deposit updated successfully.');
    }

    public function confirmDelete($id)
    {
        // Emit an event to trigger SweetAlert
        $this->dispatch('showDeleteConfirmation', $id);
    }

    public function delete($id)
    {
        $deposit = Deposit::findOrFail($id);
        $this->removeFile($deposit->statement_file);

        $deposit->delete();
        $this->dispatch('deletedSuccessfully');
    }

    public function approve($id)
    {
        $deposit = Deposit::findOrFail($id);
        $deposit->update([
            'payment_status' => 'confirm'
        ]);

        $data = [
            'subject'   => 'Your deposit has been approved',
            'template'  => 'emails.deposit_approved',
            'name'      => $deposit->user->name,
            'amount'    => $deposit->amount,
            'payment_date'    => $deposit->payment_at->format('d M Y'),
            'approve_date'    => now()->format('d M Y'),
            'approve_by'      => auth()->user()->name,
            'mail_to'         => $deposit->user->email,
        ];
        $this->emailSend($data);
        $this->dispatch('deposit_approved');
    }

    public function render()
    {
        $deposits = Deposit::query()->with('user', 'user.role')
            ->orderBy('payment_at', 'desc')
            ->paginate(20);

        return view('livewire.deposit-crud', [
            'deposits' => $deposits,
            'users' => $this->users,
        ]);
    }
}
