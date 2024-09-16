<?php

namespace App\Livewire;

use App\Models\Deposit;
use Livewire\Component;

class Analysis extends Component
{
    public $dateRange;
    public $status;
    public $search;

    public function mount()
    {
        $this->dateRange = null;
        $this->status = null;
        $this->search = null;
    }
    public function submitForm()
    {
        //validation here
    }

    public function resetFilter(): void
    {
        $this->dateRange = null;
        $this->status = null;
        $this->search = null;
    }


    public function render()
    {
        $deposits = Deposit::query()->with('user', 'user.role')
            ->when(isset($this->search), function ($query) {
                $query->whereHas('user', function ($query){
                    $query->where('name', 'like', '%' . $this->search . '%')
                        ->orwhere('email', 'like', '%' . $this->search . '%')
                        ->orwhere('phone_no', 'like', '%' . $this->search . '%');
                });
            })
            ->when(isset($this->status), function ($query) {
                $query->where('payment_status', $this->status);
            })
            ->when(isset($this->dateRange), function ($query) {
                $dates = explode(' to ', $this->dateRange);

                if (count($dates) == 1) {
                    $query->whereDate('payment_at', $dates[0]);
                } else {
                    $query->whereDate('payment_at', '>=', $dates[0]);
                    $query->whereDate('payment_at', '<=', $dates[1]);
                }
            })
            ->orderBy('payment_at')
            ->paginate(20)
            ->withQueryString();


        return view('livewire.analysis', [
            'deposits'  => $deposits,
            'dateRange' => $this->dateRange,
            'status' => $this->status,
            'search' => $this->search,
        ]);
    }
}
