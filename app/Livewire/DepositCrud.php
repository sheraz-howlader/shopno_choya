<?php

namespace App\Livewire;

use App\Models\Deposit;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithPagination;

class DepositCrud extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $user_id;
    public $amount;
    public $payment_date;
    public $remark;
    public $users;
    public $depositId;
    public $updateMode = false;

    protected $rules = [
        'user_id'   => 'required|exists:users,id',
        'amount'    => 'required|numeric',
        'payment_date' => 'required|date',
        'remark'       => 'nullable|string',
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
        $this->updateMode = false;
    }

    public function store()
    {
        try {
            $this->validate();

            Deposit::create([
                'user_id'   => $this->user_id,
                'amount'    => $this->amount,
                'payment_at'=> $this->payment_date,
                'remark'    => $this->remark,
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
        // $this->payment_date = $deposit->payment_at;
        $this->payment_date = $deposit->payment_at->format('Y-m-d');
        $this->remark       = $deposit->remark;

        // Emit event to open the modal
        $this->dispatch('openEditModal');
    }

//    public function payment_date()
//    {
//        $this->payment_date = 100;
//    }


    public function update()
    {
        $this->validate();

        $deposit = Deposit::find($this->depositId);

        $deposit->update([
            'user_id'   => $this->user_id,
            'amount'    => $this->amount,
            'payment_at'=> $this->payment_date,
            'remark'    => $this->remark,
        ]);

        // Emit event to close the modal
        $this->dispatch('closeEditModal');
        $this->resetInputFields();

        session()->flash('success', 'Deposit updated successfully.');
    }

    public function delete($id)
    {
        Deposit::find($id)->delete();
        session()->flash('success', 'Deposit deleted successfully.');
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
