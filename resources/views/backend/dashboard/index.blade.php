@extends('backend.layouts.app')

@section('contents')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-center h4 text-muted">
                        <b style="font-variant: small-caps"> সকল সদস্যের হিসাব </b>
                    </div>

                    <div class="text-center mb-4">
                        <span class="d-block my-1"> মোট জমা : {{ $total_balance }} </span>
                        <span class="d-block my-1"> মোট বকেয়া : {{ $due_balance }} </span>
                        <span class="d-block my-1"> আজকের তারিখ : {{ now()->format('d F Y') }}</span>
                    </div>
                    <div class="table-responsive">
                        <x-data-table >
                            <x-slot:thead>
                                <tr>
                                    <th class="text-center" width="3%"> ক্রমিক নং </th>
                                    <th> নাম </th>
                                    <th class="text-center"> জমা </th>
                                    <th class="text-center"> বকেয়া </th>
                                    <th class="text-center"> শেষ জমার তারিখ </th>
                                    <th class="text-center"> বকেয়া মাস </th>
                                </tr>
                            </x-slot:thead>

                            <x-slot:tbody>
                                @forelse($deposits as $deposit)
                                    <tr>
                                        <td class="text-center"> {{ $loop->iteration }} </td>
                                        <td>
                                            <img src="{{ asset($deposit->user->thumbnail()) }}" alt="{{ $deposit->user->name }}"
                                                 class="img-thumbnail me-1" style="max-height: 40px; max-width: 50px">

                                            {{ $deposit->user->name }}

                                            @if($deposit->user->role->slug === 'admin')
                                                <span class="badge bg-dark">Admin</span>
                                            @elseif($deposit->user->role->slug === 'cashier')
                                                <span class="badge bg-primary">Cashier</span>
                                            @endif
                                        </td>
                                        <td class="text-center"> {{ $deposit->deposit_amount }} </td>
                                        <td class="text-center"> {{ $deposit->total_due_amount }} </td>
                                        <td class="text-center"> {{ date('d F Y', strtotime($deposit->latest_payment)) }} </td>
                                        <td class="text-center"> {{ $deposit->total_due_month }} Month </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center text-danger" colspan="10"> No record found! </td>
                                    </tr>
                                @endforelse
                            </x-slot:tbody>
                        </x-data-table>
                    </div>
                </div>
                @if($deposits->hasPages())
                    <div class="card-footer py-0">
                        {{ $deposits->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
