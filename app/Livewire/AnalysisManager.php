<?php

namespace App\Livewire;

use App\Models\Deposit;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class AnalysisManager extends Component
{
    use WithPagination;

    public $dateRange;

    public $status;

    public $search;

    public function resetFilter(): void
    {
        $this->reset(['dateRange', 'status', 'search']);
    }

    public function render(): View
    {
        $deposits = Deposit::query()->with('user', 'user.role')
            ->when(isset($this->search), function ($query) {
                $query->whereHas('user', function ($query) {
                    $query->where('name', 'like', '%'.$this->search.'%')
                        ->orwhere('email', 'like', '%'.$this->search.'%')
                        ->orwhere('phone_no', 'like', '%'.$this->search.'%');
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

        return view('livewire.analysis-manager', [
            'deposits' => $deposits,
            'dateRange' => $this->dateRange,
            'status' => $this->status,
            'search' => $this->search,
        ])->extends(config('livewire.layout'))->section('contents');
    }
}
