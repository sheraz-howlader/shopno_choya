<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\User;
use App\Services\Category\CategoryServices;
use App\Services\DataTableFilterService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DepositController extends Controller
{
    use CategoryServices;
    use DataTableFilterService;

    public function index()
    {
        $search   = request()->get('search');
        $filters  = request()->get('filter');

        $users = User::where('status', 1)->get();

        $deposits = Deposit::query()
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
            ->paginate()
            ->withQueryString();

        return view('backend.deposit.index', compact('users', 'deposits', 'search', 'filters'));
    }

    public function getAllDeposits(Request $request): void
    {
        $columns = ['id', 'user_id', 'amount', 'payment_status'];
        $search = $request->input('search.value');

        $deposits = $this->query(Deposit::class, '');
        $totalItem = $deposits->count();

        $filter = $this->querySearch($deposits, $search, 'name');
        $totalFiltered = $filter->count();

        $deposits = $this->queryGet($request, $filter, $columns, '');

        $data = [];
        if (! empty($deposits)) {
            foreach ($deposits as $key => $deposit) {
                $item['id'] = $deposit->id;
                $item['key'] = $key + 1;
                $item['name'] =  $deposit->user->name;
                $item['amount'] =  $deposit->amount;
                $item['payment_status'] =  $deposit->display_status;
                $item['status'] =  $deposit->payment_status;
                $item['payment_at'] =  $deposit->payment_at->format('d M Y');

                $data[] = $item;
            }
        }

        $json_data = [
            'draw' => intval($request->input('draw')),
            'recordsTotal' => intval($totalItem),
            'recordsFiltered' => intval($totalFiltered),
            'data' => $data,
        ];

        echo json_encode($json_data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'amount' => 'required',
            'payment_date' => 'required',
        ],[
            'user_id.required' => 'Member selection is required.',
            'payment_at.required' => 'Payment date is required.',
        ]);

        Deposit::create([
            'user_id' => $request->user_id,
            'amount' => $request->amount,
            'payment_at' => $request->payment_date,
            'remark' => $request->remark ?? null,
        ]);

        return redirect()->route('deposit.index')->with('success', 'Deposit has been save successfully.');
    }

    public function edit(Request $request, $id)
    {
        abort_if(!$request->ajax(), Response::HTTP_FORBIDDEN);

        $deposit = Deposit::findOrFail($id);
        return response()->json(['deposit' => $deposit]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => ['required', 'exists:users,id'],
            'amount' => 'required',
            'payment_date' => 'required',
        ],[
            'user_id.required' => 'Member selection is required.',
            'payment_at.required' => 'Payment date is required.',
        ]);

        $deposit = Deposit::findOrFail($id);

        $deposit->update([
            'user_id' => $request->user_id,
            'amount' => $request->amount,
            'payment_at' => $request->payment_date,
            'remark' => $request->remark ?? null,
        ]);

        return redirect()->route('deposit.index')->with('success', 'Deposit has been update successfully.');
    }

    public function destroy($id)
    {
        $deposit = Deposit::findOrFail($id);
        $deposit->delete();

        return redirect()->route('deposit.index')->with('success', 'Deposit has been deleted successfully.');
    }

    public function approveDeposits($id)
    {
        $deposit = Deposit::findOrFail($id);
        $deposit->update([
            'payment_status' => 'confirm'
        ]);
        return response()->json(['deposit' => $deposit]);
    }
}
