<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends Controller
{
    public function index()
    {
        abort_if( Gate::none( ['dashboard'] ), Response::HTTP_FORBIDDEN );

        $deposits = Deposit::with('user', 'user.role')
            ->select('user_id')
            ->selectRaw('MAX(payment_at) as latest_payment')
            ->selectRaw('MIN(payment_at) as earliest_payment')
            ->selectRaw('SUM(amount) as deposit_amount')
            //->selectRaw('TIMESTAMPDIFF(MONTH, MIN(payment_at), MAX(payment_at)) as total_month') // Difference in months
            ->selectRaw('TIMESTAMPDIFF(MONTH, MAX(payment_at), NOW()) as total_due_month') // Calculate diff in months
            ->selectRaw('TIMESTAMPDIFF(MONTH, MAX(payment_at), NOW()) * 2000 as total_due_amount') // Multiply by 2000
            ->where('payment_status', 'confirm')
            ->groupBy('user_id')
            ->orderBy('latest_payment', 'asc')
            ->paginate(15)->withQueryString();


        $total_balance = 0;
        $due_balance = 0;

        foreach ($deposits as $deposit){
            $due_balance += $deposit->total_due_amount;
            $total_balance += $deposit->deposit_amount;
        }
        return view('backend.dashboard.index', compact('deposits','total_balance', 'due_balance'));
    }

    public function analysis()
    {
        $search   = request()->get('search');
        $filters  = request()->get('filter');

        $deposits = Deposit::query()->with('user', 'user.role')
            ->when(isset($search), function ($query) use ($search) {
                $query->whereHas('user', function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%')
                        ->orwhere('email', 'like', '%' . $search . '%')
                        ->orwhere('phone_no', 'like', '%' . $search . '%');
                });
            })
            ->when(isset($filters['status']), function ($query) use ($filters) {
                $query->where('payment_status', $filters['status']);
            })
            ->when(isset($filters['date']), function ($query) use ($filters) {
                //$query->where('payment_at', $filters['date']);

                $dates = explode(' to ', $filters['date']);

                if (count($dates) == 1) {
                    $query->whereDate('payment_at', $dates[0]);
                } else {
                    $query->whereDate('payment_at', '>=', $dates[0]);
                    $query->whereDate('payment_at', '<=', $dates[1]);
                }
            })
            ->orderBy('payment_at', 'asc')
            ->paginate(20)
            ->withQueryString();

        return view('backend.dashboard.analysis', compact('deposits', 'search', 'filters'));
    }

    public function inactive()
    {
        if (auth()->user()->status){
            return redirect()->route('home');
        }else{
            return view('backend.inactive-message');
        }
    }
}
