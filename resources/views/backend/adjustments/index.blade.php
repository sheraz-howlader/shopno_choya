@extends('backend.layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

@section('contents')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title border-bottom pb-2 mb-4 d-flex align-items-center justify-content-between">
                <h4 class="mb-0"> Adjustment List </h4>

                @canany(['adjustment::create'])
                    <a href="" class="btn btn-primary btn-sm" data-pc-animate="fall" data-bs-toggle="modal"
                       data-bs-target="#addAdjustment">
                        <i class="fas fa-plus-circle me-1"></i>
                        New Entry
                    </a>
                @endcanany
            </div>

            @include('backend.layouts.notification')

            <div class="card">
                <div class="card-body">
                    <div class="dt-responsive">
                        <div id="dom-jqry_wrapper" class="dt-container dt-bootstrap5">
                            <div class="row mt-2 justify-content-md-center">
                                <div class="col-12 table-responsive ">
                                    <x-data-table id="deposit_list">
                                        <x-slot:thead>
                                            <tr>
                                                <th class="text-center" width="3%"> S/L</th>
                                                <th> Member Name </th>
                                                <th> Amount </th>
                                                <th> Adjustment Date </th>
                                                <th> Remark </th>
                                                <th class="text-center" width="12%"> Action </th>
                                            </tr>
                                        </x-slot:thead>

                                        <x-slot:tbody>
                                            @forelse($adjustments as $adjustment)
                                                <tr>
                                                    <td class="text-center"> {{ $loop->index + $adjustments->firstItem() }} </td>
                                                    <td> {{ $adjustment->user->name }} </td>
                                                    <td> {{ $adjustment->amount }} </td>
                                                    <td> {{ $adjustment->payment_at->format('d M Y') }} </td>
                                                    <td> {{ $adjustment->remark }} </td>
                                                    <td class="text-center">
                                                        @canany(['adjustment::edit'])
                                                            <button type="button" class="btn btn-primary btn-sm" onclick="editAdjustment({{$adjustment->id}})">
                                                                <i class="fas fa-edit"></i> Edit
                                                            </button>
                                                        @endcanany

                                                        @canany(['adjustment::destroy'])
                                                            <form action="{{ route('adjustment.destroy', $adjustment->id) }}" method="post" class="d-inline">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-danger btn-sm deleteBTN">
                                                                    <i class="fas fa-trash-alt"></i> Delete
                                                                </button>
                                                            </form>
                                                        @endcanany
                                                    </td>
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

                @if($adjustments->hasPages())
                    <div class="card-footer py-0">
                        {{ $adjustments->links() }}
                    </div>
                @endif

            </div>
        </div>
    </div>

    {{--Start::Add Entry modal--}}
    <x-sheraz.modal url="{{ route('adjustment.store') }}" id="addAdjustment" title="Add Adjustment" animation="anim-fall">
        <x-slot:content>
            <label for="" class="required">Member Name</label>
            <select class="form-control my-2" name="user_id">
                <option selected disabled> --Select Member--</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}"> {{ $user->name }} </option>
                @endforeach
            </select>
            <label for="" class="required">Amount</label>
            <input type="number" placeholder="amount" name="amount" class="form-control my-2">

            <label for="" class="required">Payment Date</label>
            <input type="date" name="payment_date" class="form-control my-2">

            <label for="">Remark</label>
            <input type="text" name="remark" placeholder="Write something important" class="form-control my-2">
        </x-slot:content>
    </x-sheraz.modal>
    {{--End::Add Entry modal--}}

    {{--Start::Edit Entry modal--}}
    <x-sheraz.modal id="editAdjustment" title="Update Adjustment" animation="anim-blur" method="put" formID="adjustment_modal">
        <x-slot:content>
            <label for="" class="required">Member Name</label>
            <select class="form-control my-2" name="user_id" id="user_id">
                <option selected disabled> --Select Member--</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}"> {{ $user->name }} </option>
                @endforeach
            </select>
            <label for="" class="required">Amount</label>
            <input type="number" placeholder="amount" name="amount" id="amount" class="form-control my-2">

            <label for="" class="required">Payment Date</label>
            <input type="date" name="payment_date" id="payment_date" class="form-control my-2">

            <label for="">Remark</label>
            <input type="text" name="remark" id="remark" placeholder="Write something important" class="form-control my-2">
        </x-slot:content>
    </x-sheraz.modal>
    {{--End::Edit Entry modal--}}
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
            altFormat: "d F Y",
            wrap: true
        });

        // edit deposit
        function editAdjustment(id) {
            $.ajax({
                type: "get",
                dataType: 'json',
                url: route('adjustment.edit', id),
                success: function (response) {
                    const date = new Date(response.adjustment.payment_at);
                    const format_date = date.toISOString().split('T')[0];

                    $('#user_id').val(response.adjustment.user_id);
                    $('#amount').val(response.adjustment.amount);
                    $('#payment_date').val(format_date);
                    $('#remark').val(response.adjustment.remark);

                    $('#adjustment_modal').attr('action', route('adjustment.update', id));
                    $('#editAdjustment').modal('show');
                }
            })
        }

        // delete deposit
        $(".deleteBTN").on('click', async function (e) {
            e.preventDefault();
            let confirmation = await swal.fire({
                text: "Are you sure want to delete? It can not be undone.",
                showCancelButton: true,
                icon: 'warning',
            });
            if (confirmation.isConfirmed) {
                $(this).closest('form').submit();
            }
        });
    </script>
@endpush
