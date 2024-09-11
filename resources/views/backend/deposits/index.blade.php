@extends('backend.layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

@section('contents')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title border-bottom pb-2 mb-4 d-flex align-items-center justify-content-between">
                <h4 class="">
                    Deposit List - <small> {{now()->format('F')}} </small>
                </h4>
                @canany(['deposit::create'])
                    <a href="" class="btn btn-primary btn-sm" data-pc-animate="fall" data-bs-toggle="modal"
                       data-bs-target="#addEntry">
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
                                <div class="col-12 table-responsive">
                                    <x-data-table id="deposit_list">
                                        <x-slot:thead>
                                            <tr>
                                                <th class="text-center" width="3%"> S/L</th>
                                                <th> Member Name </th>
                                                <th> Amount </th>
                                                <th class="text-center" width="10%"> Attached File </th>
                                                <th> Payment Date </th>
                                                <th class="text-center" width="5%"> Payment Status </th>

                                                @canany(['deposit::edit', 'deposit::destroy'])
                                                    <th class="text-center" width="12%"> Action </th>
                                                @endcanany
                                            </tr>
                                        </x-slot:thead>

                                        <x-slot:tbody>
                                            @forelse($deposits as $deposit)
                                                <tr>
                                                    <td class="text-center"> {{ $loop->index + $deposits->firstItem() }} </td>
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
                                                    <td> {{ $deposit->amount }} </td>
                                                    <td class="text-center">
                                                        @if($deposit->statement_file)
                                                            <a href="{{ asset($deposit->statement_file) }}" download>
                                                                <i class="fas fa-paperclip"></i> File Attached
                                                            </a>
                                                        @else
                                                            <span class="text-danger"> <i>No Attach file</i> </span>
                                                        @endif
                                                    </td>
                                                    <td> {{ $deposit->payment_at->format('d M Y') }} </td>
                                                    <td class="text-center"> {!! $deposit->display_status !!} </td>

                                                    @canany(['deposit::edit', 'deposit::destroy'])
                                                        @if(!$deposit->is_adjustment)
                                                            <td class="text-center">
                                                                @canany(['deposit::deposit-approve'])
                                                                    @if(($deposit->payment_status === 'pending'))
                                                                        <button type="button" class="btn btn-success btn-sm" onclick="approve({{$deposit->id}})">
                                                                            <div class="spinner-grow spinner-grow-sm" role="status"></div>
                                                                            Approve
                                                                        </button>
                                                                    @endif
                                                                @endcanany

                                                                @canany(['deposit::edit'])
                                                                    <button type="button" class="btn btn-primary btn-sm" onclick="editDeposit({{$deposit->id}})">
                                                                        <i class="fas fa-edit"></i> Edit
                                                                    </button>
                                                                @endcanany

                                                                @canany(['deposit::destroy'])
                                                                    <form action="{{ route('deposit.destroy', $deposit->id) }}" method="post" class="d-inline">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button type="submit" class="btn btn-danger btn-sm deleteBTN">
                                                                            <i class="fas fa-trash-alt"></i> Delete
                                                                        </button>
                                                                    </form>
                                                                @endcanany
                                                            </td>
                                                        @else
                                                        <td class="text-center">
                                                            <small class="text-primary font-bold"> Adjustment Record </small>
                                                        </td>
                                                        @endif
                                                    @endcanany
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="10" class="text-center text-danger"> No Deposit Found! </td>
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

    {{--Start::Add Entry modal--}}
    <x-sheraz.modal url="{{ route('deposit.store') }}" id="addEntry" title="Add Deposit" animation="anim-fall">
        <x-slot:content>
            <label for="" class="required">Member</label>
            <select class="form-control my-2" name="user_id">
                <option selected disabled> --Select Member--</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" @selected(auth()->id() === $user->id)> {{ $user->name }} </option>
                @endforeach
            </select>

            <label for="" class="required">Amount</label>
            <input type="number" placeholder="amount" name="amount" class="form-control my-2">

            <label for="">Statement </label>
            <small class="text-info">(attach for prove your payment)</small>
            <input type="file" placeholder="Statement" name="statement" class="form-control my-2">

            <label for="" class="required">Payment Date</label>
            {{--<input type="date" name="payment_date" class="form-control my-2 flatpickr">--}}

            <div class="input-group  my-2 flatpickr">
                <button class="btn btn-info" type="button" data-toggle>
                    <i class="fas fa-calendar-alt"></i>
                </button>

                <input type="date" name="payment_date" class="form-control"
                       placeholder="Payment Date" data-input>

                <button class="btn btn-info" type="button" data-clear>
                    <i class="fas fa-times"></i>
                </button>
            </div>


            <label for="">Remark</label>
            <input type="text" name="remark" placeholder="Write something important" class="form-control my-2">
        </x-slot:content>
    </x-sheraz.modal>
    {{--End::Add Entry modal--}}

    {{--Start::Edit Entry modal--}}
    <x-sheraz.modal id="editEntry" title="Update Deposit" animation="anim-blur" method="put" formID="deposit_modal">
        <x-slot:content>
            <label for="" class="required">Member</label>
            <select class="form-control my-2" name="user_id" id="user_id">
                <option selected disabled> --Select Member--</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}"> {{ $user->name }} </option>
                @endforeach
            </select>

            <label for="" class="required">Amount</label>
            <input type="number" placeholder="amount" name="amount" id="amount" class="form-control my-2">

            <label for="">Statement</label>
            <small class="text-info">(attach for prove your payment)</small>
            <input type="file" placeholder="Statement" name="statement" class="form-control my-2">

            <label for="" class="required">Payment Date</label>
            {{--<input type="date" name="payment_date" id="payment_date" class="form-control my-2">--}}

            <div class="input-group  my-2" id="payment_date">
                <button class="btn btn-info" type="button" data-toggle>
                    <i class="fas fa-calendar-alt"></i>
                </button>

                <input type="text" name="payment_date" class="form-control"  data-input>

                <button class="btn btn-info" type="button" data-clear>
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <label for="">Remark</label>
            <input type="text" name="remark" id="remark" placeholder="Write something important"
                   class="form-control my-2">
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
        function editDeposit(id) {
            $.ajax({
                type: "get",
                dataType: 'json',
                url: route('deposit.edit', id),
                beforeSend() {
                    swal.fire({
                        title: 'Processing your request...',
                    });
                    swal.showLoading();
                },
                success: function (response) {
                    $('#user_id').val(response.deposit.user_id);
                    $('#amount').val(response.deposit.amount);
                    $('#remark').val(response.deposit.remark);

                    $('#payment_date').flatpickr({
                        altInput: true,
                        dateFormat: "Y-m-d",
                        enableTime: false,
                        altFormat: "d F Y",
                        wrap: true,
                        defaultDate: response.deposit.payment_at
                    });

                    $('#deposit_modal').attr('action', route('deposit.update', id));
                    $('#editEntry').modal('show');
                    swal.close();
                }
            })
        }

        // approve deposit
        async function approve(id) {
            let confirmation = await swal.fire({
                text: "Are you sure want to approve?",
                showCancelButton: true,
                icon: 'warning',
            });
            if (confirmation.isConfirmed) {
                $.ajax({
                    type: "post",
                    url: route('deposit.approve', id),
                    dataType: "json",
                    beforeSend() {
                        swal.fire({
                            title: 'Processing your request...',
                        });
                        swal.showLoading();
                    },
                    success: function (response) {
                        swal.close();
                        swal.fire({
                            html: response.message,
                            icon: response.status,
                            confirmButtonText: 'OK'
                        }).then(function() {
                            location.reload();
                        });
                    }
                });
            }
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
