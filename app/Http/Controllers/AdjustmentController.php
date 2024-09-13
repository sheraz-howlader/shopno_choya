<?php

namespace App\Http\Controllers;

use App\Models\Adjustment;
use App\Models\Deposit;
use App\Models\User;
use App\Services\FileHandlerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class AdjustmentController extends Controller
{
    use FileHandlerService;
    public function index()
    {
        abort_if(Gate::none(['adjustment::list']), Response::HTTP_FORBIDDEN);

        $search   = request()->get('search');
        $filters  = request()->get('filter');

        $users = User::where('status', 1)->get();

        $adjustments = Adjustment::query()->with('user')
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
                $query->where('payment_at', $filters['date']);
            })
            ->paginate(10)
            ->withQueryString();

        return view('backend.adjustments.index', compact('users', 'adjustments', 'search', 'filters'));
    }

    public function create()
    {
    }

    public function show()
    {
    }

    public function store(Request $request)
    {
        abort_if(Gate::none(['adjustment::create']), Response::HTTP_FORBIDDEN);

        $request->validate([
            'user_id' => 'required',
            'amount' => 'required',
            'payment_date' => 'required',
        ],[
            'user_id.required' => 'Member selection is required.',
            'payment_date.required' => 'Payment date is required.',
        ]);

        $file = $this->handleFile($request->statement, 'backend/images/adjustments/', '');

        $deposit = Deposit::create([
            'user_id' => $request->user_id,
            'amount' => $request->amount,
            'payment_status' => 'confirm',
            'payment_at'     => $request->payment_date,
            'statement_file' => $file,
            'remark' => $request->remark ?? null,
            'is_adjustment' => true,
        ]);

        Adjustment::create([
            'user_id' => $request->user_id,
            'deposit_id' => $deposit->id,
            'amount' => $request->amount,
            'payment_at' => $request->payment_date,
            'statement_file' => $file,
            'remark' => $request->remark ?? null,
        ]);

        return redirect()->route('adjustment.index')->with('success', 'Adjustment has been added successfully.');
    }

    public function edit(Request $request, $id)
    {
        abort_if(Gate::none(['adjustment::edit']), Response::HTTP_FORBIDDEN);

        abort_if(!$request->ajax(), Response::HTTP_FORBIDDEN);

        $adjustment = Adjustment::findOrFail($id);
        return response()->json(['adjustment' => $adjustment]);
    }

    public function update(Request $request, $id)
    {
        abort_if(Gate::none(['adjustment::edit']), Response::HTTP_FORBIDDEN);

        $request->validate([
            'user_id' => ['required', 'exists:users,id'],
            'amount' => 'required',
            'payment_date' => 'required',
        ],[
            'user_id.required' => 'Member selection is required.',
            'payment_date.required' => 'Payment date is required.',
        ]);

        $adjustment = Adjustment::findOrFail($id);
        $deposit = Deposit::findOrFail($adjustment->deposit_id);

        $file = $this->handleFile($request->statement, 'backend/images/adjustments/', $adjustment->statement_file);

        $adjustment->update([
            'user_id' => $request->user_id,
            'amount' => $request->amount,
            'payment_at' => $request->payment_date,
            'statement_file' => $file,
            'remark' => $request->remark ?? null,
        ]);

        $deposit->update([
            'user_id' => $request->user_id,
            'amount' => $request->amount,
            'payment_status' => 'confirm',
            'payment_at'     => $request->payment_date,
            'statement_file' => $file,
            'remark' => $request->remark ?? null,
        ]);

        return redirect()->route('adjustment.index')->with('success', 'Adjustment has been update successfully.');
    }

    public function destroy($id)
    {
        abort_if(Gate::none(['adjustment::destroy']), Response::HTTP_FORBIDDEN);

        $adjustment = Adjustment::findOrFail($id);
        $deposit = Deposit::findOrFail($adjustment->deposit_id);

        $adjustment->delete();
        $deposit->delete();

        return redirect()->route('adjustment.index')->with('success', 'Adjustment has been deleted successfully.');
    }
}
