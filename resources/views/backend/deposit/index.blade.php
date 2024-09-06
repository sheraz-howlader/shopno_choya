@extends('backend.layout.app')

@push('styles')
    <link rel="stylesheet" href="https://codedthemes.com/demos/admin-templates/gradient-able/bootstrap/default/assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

@section('contents')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title border-bottom pb-2 mb-4 d-flex align-items-center">
                <h4 class="mb-0"> Deposit List </h4>
                <div class="mx-3">
                    <a href="" class="btn btn-primary btn-sm" data-pc-animate="fall" data-bs-toggle="modal" data-bs-target="#addEntry">
                        <i class="fas fa-plus-circle me-1"></i>
                        New Entry
                    </a>
                </div>
            </div>

            @include('backend.layout.notification')

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('deposit.index') }}" method="get">
                        <div class="row justify-content-end mb-3">
                            <div class="col-md-2 pe-0">
                                <div class="input-group input-group-sm flatpickr">
                                    <button class="btn btn-info btn-sm" type="button" data-toggle>
                                        <i class="fas fa-calendar-alt"></i>
                                    </button>

                                    <input type="date" name="filter[date]" class="form-control form-control-sm" placeholder="Payment Date" value="{{ isset($filters['date']) ? $filters['date'] : '' }}" data-input >

                                    <button class="btn btn-info btn-sm" type="button" data-clear>
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-1 pe-0">
                                <select name="filter[status]" class="form-control form-control-sm">
                                    <option disabled selected> Select status </option>
                                    <option value="confirm" @selected(isset($filters['status']) && $filters['status'] == 'confirm')> Confirm </option>
                                    <option value="pending" @selected(isset($filters['status']) && $filters['status'] == 'pending')> Pending </option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group input-group-sm">
                                    <input type="text" name="search" class="form-control form-control-sm" placeholder="name/email/phone" value="{{ isset($search) ? $search : '' }}">
                                    <button class="btn btn-info btn-sm" type="submit"> Search </button>

                                    @if (!empty($filters) || !empty($search))
                                        <a class="btn btn-danger btn-sm" href="{{ route('deposit.index') }}" role="button">
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
                                <div class="col-12 table-responsive ">
                                    <x-data-table id="deposit_list">
                                        <x-slot:thead>
                                            <tr>
                                                <th class="text-center" width="3%"> S/L</th>
                                                <th> Member Name</th>
                                                <th> Amount</th>
                                                <th> Payment Date </th>
                                                <th class="text-center" width="5%"> Payment Status</th>
                                                <th class="text-center" width="12%"> Action</th>
                                            </tr>
                                        </x-slot:thead>

                                        <x-slot:tbody>
                                            @forelse($deposits as $deposit)
                                                <tr>
                                                    <td class="text-center"> {{ $loop->index + $deposits->firstItem() }} </td>
                                                    <td> {{ $deposit->user->name }} </td>
                                                    <td> {{ $deposit->amount }} </td>
                                                    <td> {{ $deposit->payment_at->format('d M Y') }} </td>
                                                    <td class="text-center"> {!! $deposit->display_status !!} </td>
                                                    <td class="text-center">
                                                        <button type="button" data-id="${row.id}" class="btn btn-primary btn-sm" onclick="editDeposit({{$deposit->id}})">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </button>

                                                        @if(($deposit->payment_status === 'pending'))
                                                             <button type="button" class="btn btn-success btn-sm" onclick="approve({{$deposit->id}})">
                                                                 <div class="spinner-grow spinner-grow-sm" role="status"></div> Approve
                                                            </button>
                                                         @endif

                                                        <form action="{{ route('deposit.destroy', $deposit->id) }}" method="post" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger btn-sm deleteBTN">
                                                                <i class="fas fa-trash-alt"></i> Delete
                                                            </button>
                                                        </form>
                                                    </td>
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
    <form action="{{ route('deposit.store') }}" method="post">
        @csrf
        <div class="modal fade modal-animate" id="addEntry" data-bs-backdrop="static" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> Add Deposit </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="" class="required">Member</label>
                        <select class="form-control my-2" name="user_id">
                            <option selected disabled> --Select Member-- </option>
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary shadow-2">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{--End::Add Entry modal--}}

    {{--Start::Edit Entry modal--}}
    <form method="post" id="deposit_modal" action="">
        @csrf
        @method('put')
        <div class="modal fade modal-animate" id="editEntry" data-bs-backdrop="static" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> Update Deposit </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="" class="required">Member</label>
                        <select class="form-control my-2" name="user_id" id="user_id">
                            <option selected disabled> --Select Member-- </option>
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary shadow-2">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{--End::Edit Entry modal--}}
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // start::add modal animation
        let animateModal = document.getElementById('addEntry');
        animateModal.addEventListener('show.bs.modal', function (event) {
            let button = event.relatedTarget;
            let recipient = button.getAttribute('data-pc-animate');
            animateModal.classList.add('anim-' + recipient);
            if (recipient === 'let-me-in' || recipient === 'make-way' || recipient === 'slip-from-top') {
                document.body.classList.add('anim-' + recipient);
            }
        });

        animateModal.addEventListener('hidden.bs.modal', function (event) {
            removeClassByPrefix(animateModal, 'anim-');
            removeClassByPrefix(document.body, 'anim-');
        });

        function removeClassByPrefix(node, prefix) {
            for (let i = 0; i < node.classList.length; i++) {
                let value = node.classList[i];
                if (value.startsWith(prefix)) {
                    node.classList.remove(value);
                }
            }
        }
        // End::add modal animation

        // date picker
        $('.flatpickr').flatpickr({
            altInput: true,
            dateFormat: "Y-m-d",
            enableTime: false,
            altFormat: "d F Y",
            wrap: true
        });

        // edit deposit
        function editDeposit(id){
            // $('#editEntry').modal('show');

            $.ajax({
                type: "get",
                dataType: 'json',
                url:  route('deposit.edit', id),
                success: function(response) {
                    const date = new Date(response.deposit.payment_at);
                    const format_date = date.toISOString().split('T')[0];

                    $('#user_id').val(response.deposit.user_id);
                    $('#amount').val(response.deposit.amount);
                    $('#payment_date').val(format_date);
                    $('#remark').val(response.deposit.remark);

                    $('#deposit_modal').attr('action', route('deposit.update', id));
                    $('#editEntry').modal('show');
                }
            })
        }

        // approve deposit
        function approve(id){
            $.ajax({
                type: "post",
                url: route('deposit.approve', id),
                dataType: "json",
                success: function(data) {
                    window.location.reload();
                }
            });
        }

        // delete deposit
        $(".deleteBTN").on('click', async function(e) {
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
