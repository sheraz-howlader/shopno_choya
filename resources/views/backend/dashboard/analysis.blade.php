@extends('backend.layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

@section('contents')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title border-bottom pb-2 mb-4 d-flex align-items-center justify-content-between">
                <h4 class="mb-0"> Analysis & Report </h4>
            </div>

            @include('backend.layouts.notification')

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('analysis') }}" method="get">
                        <div class="row justify-content-end mb-3">
                            <div class="col-md-2 pe-0 mt-2">
                                <div class="input-group input-group-sm flatpickr">
                                    <button class="btn btn-info btn-sm" type="button" data-toggle>
                                        <i class="fas fa-calendar-alt"></i>
                                    </button>

                                    <input type="date" name="filter[date]" class="form-control form-control-sm"
                                           placeholder="Payment Date"
                                           value="{{ isset($filters['date']) ? $filters['date'] : '' }}" data-input>

                                    <button class="btn btn-info btn-sm" type="button" data-clear>
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-1 pe-0 mt-2">
                                <select name="filter[status]" class="form-control form-control-sm">
                                    <option disabled selected> Select status</option>
                                    <option
                                        value="confirm" @selected(isset($filters['status']) && $filters['status'] == 'confirm')>
                                        Confirm
                                    </option>
                                    <option
                                        value="pending" @selected(isset($filters['status']) && $filters['status'] == 'pending')>
                                        Pending
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-3 mt-2">
                                <div class="input-group input-group-sm">
                                    <input type="text" name="search" class="form-control form-control-sm"
                                           placeholder="name/email/phone" value="{{ isset($search) ? $search : '' }}">
                                    <button class="btn btn-info btn-sm" type="submit"> Search</button>

                                    @if (!empty($filters) || !empty($search))
                                        <a class="btn btn-danger btn-sm" href="{{ route('analysis') }}"
                                           role="button">
                                            <i class="fas fa-sync-alt"></i>
                                            Reset
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="dt-responsive">
                        <div id="dom-jqry_wrapper" class="dt-container dt-bootstrap5">
                            <div class="row mt-2 justify-content-md-center">
                                <div class="col-12 table-responsive">
                                    <x-data-table id="deposit_list">
                                        <x-slot:thead>
                                            <tr>
                                                <th class="text-center" width="10%"> Payment Date </th>
                                                <th> Member Name </th>
                                                <th class="text-center" width="7%"> Amount </th>
                                                <th class="text-center" width="10%"> Attached File </th>
                                                <th class="text-center" width="5%"> Payment Status </th>
                                                <th> Remark </th>
                                            </tr>
                                        </x-slot:thead>

                                        <x-slot:tbody>
                                            @forelse($deposits as $deposit)
                                                <tr>
                                                    <td class="text-center"> {{ $deposit->payment_at->format('d M Y') }} </td>
                                                    <td>
                                                        {{ $deposit->user->name }}

                                                        @if($deposit->user->role->slug === 'admin')
                                                            <span class="badge bg-dark">Admin</span>
                                                        @elseif($deposit->user->role->slug === 'cashier')
                                                            <span class="badge bg-primary">Cashier</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center"> {{ $deposit->amount }} </td>
                                                    <td class="text-center">
                                                        @if(!is_null($deposit->statement_file))
                                                            <a href="{{ asset($deposit->statement_file) }}" download>
                                                                <i class="fas fa-paperclip"></i> File Attached
                                                            </a>
                                                        @else
                                                            <span class="text-danger"> <i>No Attach file</i> </span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center"> {!! $deposit->display_status !!} </td>
                                                    <td> {!! $deposit->remark !!} </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="10" class="text-center text-danger"> No Record Found! </td>
                                                </tr>
                                            @endforelse
                                        </x-slot:tbody>
                                    </x-data-table>
                                </div>
                            </div>
                        </div>
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

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // date picker
        $('.flatpickr').flatpickr({
            altInput: true,
            dateFormat: "Y-m-d",
            enableTime: false,
            altFormat: "d/m/y",
            wrap: true,
            mode: "range",
        });
    </script>
@endpush
