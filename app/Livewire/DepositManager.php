<?php

namespace App\Livewire;

use App\Models\Deposit;
use App\Models\User;
use App\Services\FileHandlerService;
use App\Services\MailSender;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class DepositManager extends Component
{
    use FileHandlerService;
    use MailSender;
    use WithFileUploads;
    use WithPagination;
    //protected $paginationTheme = 'bootstrap'; //change from config file

    //public $users;
    #[Validate('required|exists:users,id')]
    public $user_id;

    #[Validate('required|numeric')]
    public $amount;

    #[Validate('required|date')]
    public $payment_date;

    #[Validate('nullable|string')]
    public $remark;

    #[Validate('nullable|file|mimes:jpg,png,pdf,txt,xlsx')]
    public $statement;

    #[Locked] //Locking the property for prevent malicious attack
    public $depositId;

    //protected $rules = [
    //    'user_id'   => 'required|exists:users,id',
    //    'amount'    => 'required|numeric',
    //    'payment_date' => 'required|date',
    //    'remark'       => 'nullable|string',
    //    'statement'    => 'nullable|file|mimes:jpg,png,pdf,txt,xlsx',
    //];

    //same name a property thakle mount() method a init kora lage na
    //public function mount($users): void
    //{
    //    $this->users = $users;
    //}

    public function resetInputFields(): void
    {
        //$this->reset('user_id');
        //$this->reset('amount');
        //$this->reset('payment_date');
        //$this->reset('remark');
        //$this->reset('depositId');

        $this->reset(['user_id', 'amount', 'payment_date', 'remark', 'depositId', 'statement']);
    }

    public function store(): void
    {
        try {
            $this->validate();
            $file = $this->uploadViaDisk($this->statement, 'backend/images/statements/', '', 'personal_disk'); //'personal_disk' is a custom disk name

            Deposit::create([
                'user_id' => $this->user_id,
                'amount' => $this->amount,
                'payment_at' => $this->payment_date,
                'remark' => $this->remark,
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

    public function edit($id): void
    {
        $deposit = Deposit::findOrFail($id);

        $this->depositId = $deposit->id;
        $this->user_id = $deposit->user_id;
        $this->amount = $deposit->amount;
        $this->payment_date = $deposit->payment_at->format('Y-m-d');
        $this->statement = $deposit->statement_file;
        $this->remark = $deposit->remark;

        // Emit event to open the modal
        $this->dispatch('openEditModal');
    }

    public function update(): void
    {
        $this->validate();
        $deposit = Deposit::find($this->depositId);

        $file = $this->uploadViaDisk($this->statement, 'backend/images/statements/', $deposit->statement_file, 'personal_disk'); //'personal_disk' is a custom disk name

        $deposit->update([
            'user_id' => $this->user_id,
            'amount' => $this->amount,
            'payment_at' => $this->payment_date,
            'remark' => $this->remark,
            'statement_file' => $file ?? $deposit->statement_file,
        ]);

        // Emit event to close the modal
        $this->dispatch('closeEditModal');
        $this->resetInputFields();

        session()->flash('success', 'Deposit updated successfully.');
    }

    public function confirmDelete($id): void
    {
        // Emit an event to trigger SweetAlert
        $this->dispatch('show-confirmation', id: $id);
    }

    public function delete($id): void
    {
        $deposit = Deposit::findOrFail($id);
        $this->removeFile($deposit->statement_file);

        $deposit->delete();
        $this->dispatch('deleted');
    }

    public function approve($id): void
    {
        $deposit = Deposit::findOrFail($id);

        $deposit->update([
            'payment_status' => 'confirm',
        ]);

        $data = [
            'subject' => 'Your deposit has been approved',
            'template' => 'emails.deposit_approved',
            'name' => $deposit->user->name,
            'amount' => $deposit->amount,
            'payment_date' => $deposit->payment_at->format('d M Y'),
            'approve_date' => now()->format('d M Y'),
            'approve_by' => auth()->user()->name,
            'mail_to' => $deposit->user->email,
        ];
        $this->emailSend($data);
        $this->dispatch('deposit_approved');
    }

    public function render(): View
    {
        $users = User::whereStatus(1)->get();

        $deposits = Deposit::query()->with('user', 'user.role')
            ->orderBy('payment_at', 'desc')
            ->paginate(20);

        return view('livewire.deposit-manager')->with([
            'deposits' => $deposits,
            'users' => $users,
        ])->extends('components.layouts.app')->section('contents');
    }
}
