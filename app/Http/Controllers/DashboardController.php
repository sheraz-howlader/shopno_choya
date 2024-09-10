<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends Controller
{
    public function index()
    {
        abort_if( Gate::none( ['dashboard'] ), Response::HTTP_FORBIDDEN );

        $deposits = Deposit::with('user')
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
        $users = User::get();
        return view('backend.dashboard.analysis', compact('users'));
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
