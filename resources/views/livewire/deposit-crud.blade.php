<div class="row">
    <div class="col-sm-12">
        <div class="page-header-title border-bottom pb-2 mb-4 d-flex align-items-center justify-content-between">
            <h4 class="">
                Deposit List - <small> {{now()->format('F')}} </small>
            </h4>
            @canany(['deposit::create'])
                <button href="" class="btn btn-primary btn-sm" data-pc-animate="fall" id="openModalBtn">
                    <i class="fas fa-plus-circle me-1"></i>
                    New Entry
                </button>
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
                                                                    <button type="button" class="btn btn-success btn-sm" wire:click="approve({{$deposit->id}})">
                                                                        <div class="spinner-grow spinner-grow-sm" role="status"></div>
                                                                        Approve
                                                                    </button>
                                                                @endif
                                                            @endcanany

                                                            @canany(['deposit::edit'])
                                                                <button class="btn btn-primary btn-sm" wire:click="edit({{ $deposit->id }})"> Edit </button>
                                                            @endcanany

                                                            @canany(['deposit::destroy'])
                                                                <button class="btn btn-danger btn-sm" wire:click.prevent="confirmDelete({{ $deposit->id }})">Delete</button>
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

    {{--Start::Add Entry modal--}}
    <form wire:submit.prevent="store" method="post">
        <div class="modal fade modal-animate" id="addEntry" data-bs-backdrop="static" wire:ignore.self>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> Add Deposit </h5>
                        <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="" class="required">Member</label>
                        <select class="form-control my-2" name="user_id" wire:model="user_id">
                            <option> --Select Member--</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" @selected(auth()->id() === $user->id)> {{ $user->name }} </option>
                            @endforeach
                        </select>

                        <label for="" class="required">Amount</label>
                        <input type="number" placeholder="amount" name="amount" class="form-control my-2"  wire:model="amount">

                        <label for="" class="required">Payment Date</label>

                        <div class="input-group">
                            <button class="btn btn-info" type="button" data-toggle>
                                <i class="fas fa-calendar-alt"></i>
                            </button>

                            <input type="text" class="form-control flatpickr" readonly="readonly" name="payment_date"
                                   placeholder="Payment Date" wire:model="payment_date" data-input>

                            <button class="btn btn-info" type="button" id="clear-date">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>

                        <label for="">Statement</label>
                        <small class="text-info">(attach for prove your payment)</small>
                        <input type="file" placeholder="Statement" name="statement" class="form-control my-2" wire:model="statement">

                        <label for="">Remark</label>
                        <input type="text" name="remark" placeholder="Write something important" class="form-control my-2" wire:model="remark">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary shadow-2 btn-sm">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{--End::Add Entry modal--}}

    {{--Start::Edit Entry modal--}}
    <form wire:submit.prevent="update">
        <div class="modal fade modal-animate" id="editEntry" wire:ignore.self>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> Update Deposit </h5>
                        <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="" class="required">Member</label>
                        <select class="form-control my-2" name="user_id" wire:model="user_id">
                            <option> --Select Member--</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" @selected(auth()->id() === $user->id)> {{ $user->name }} </option>
                            @endforeach
                        </select>

                        <label for="" class="required">Amount</label>
                        <input type="number" placeholder="amount" name="amount" class="form-control my-2"  wire:model="amount">

                        <label for="" class="required">Payment Date</label>
                        <div class="input-group my-2">
                            <button class="btn btn-info" type="button" data-toggle>
                                <i class="fas fa-calendar-alt"></i>
                            </button>

                            <input type="text" class="form-control flatpickr" readonly="readonly" name="payment_date"
                                   placeholder="Payment Date" wire:model="payment_date" data-input>

                            <button class="btn btn-info" type="button" id="clear-date">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>

                        <label for="">Statement</label>
                        <small class="text-info">(attach for prove your payment)</small>
                        <input type="file" placeholder="Statement" name="statement" class="form-control my-2" wire:model="statement">

                        <label for="">Remark</label>
                        <input type="text" name="remark" placeholder="Write something important" class="form-control my-2" wire:model="remark">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary btn-sm" id="closeModalBtn">Close</button>
                        <button type="submit" class="btn btn-primary shadow-2 btn-sm">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{--End::Edit Entry modal--}}
</div>


@push('scripts')
    <script>
        // Make sure the DOM is fully loaded before running this script
        document.addEventListener('DOMContentLoaded', function () {
            //addEntry
            const openModalBtn = document.getElementById('openModalBtn');
            openModalBtn.addEventListener('click', function () {
                let modal = new bootstrap.Modal(document.getElementById('addEntry'));
                modal.show();

                // Get all elements with class .flatpickr
                const flatpickrInstances = document.querySelectorAll('.flatpickr');
                flatpickrInstances.forEach((element) => {
                    // Apply Flatpickr to each element
                    const instance = flatpickr(element, {
                        dateFormat: "Y-m-d",
                        enableTime: false,
                    });

                    // Clear date functionality
                    document.getElementById('clear-date').addEventListener('click', function () {
                        instance.clear() // Clear the date for this instance
                            @this.set('payment_date', null); // Reset the Livewire model
                    });
                });
            });

            //close after store or validation
            window.addEventListener('closeAddModal', event => {
                let modal = bootstrap.Modal.getInstance(document.getElementById('addEntry'));
                modal.hide();
            });



            //edit modal show
            window.addEventListener('openEditModal', event => {
                let modal = new bootstrap.Modal(document.getElementById('editEntry'));
                modal.show();

                // Get all elements with class .flatpickr
                const flatpickrInstances = document.querySelectorAll('.flatpickr');
                flatpickrInstances.forEach((element) => {
                    // Apply Flatpickr to each element
                    const instance = flatpickr(element, {
                        dateFormat: "Y-m-d",
                        enableTime: false,
                        defaultDate: @this.payment_date,
                    });

                    // Clear date functionality
                    document.getElementById('clear-date').addEventListener('click', function () {
                        instance.clear() // Clear the date for this instance
                            @this.set('payment_date', null); // Reset the Livewire model
                    });
                });
            });

            //close by button
            const closeModalBtn = document.getElementById('closeModalBtn');
            closeModalBtn.addEventListener('click', function () {
                let modal = bootstrap.Modal.getInstance(document.getElementById('editEntry'));
                modal.hide();
            });

            //close after update or validation
            window.addEventListener('closeEditModal', event => {
                let modal = bootstrap.Modal.getInstance(document.getElementById('editEntry'));
                modal.hide();
            });

            Livewire.on('deposit_approved', () => {
                Swal.fire({
                    text: "Deposit has been approved successfully.",
                    icon: 'success'
                });
            });

            window.addEventListener('showDeleteConfirmation', function (event) {
                // Extract the id from the event
                const id = event.detail[0];

                Swal.fire({
                    text: "Are you sure you want to delete? This action cannot be undone.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        @this.delete(id);
                    }
                });
            });

            // show a success message after deletion
            Livewire.on('deletedSuccessfully', () => {
                Swal.fire({
                    text: "Deposit deleted successfully.",
                    icon: 'success'
                });
            });
        });
    </script>
@endpush
