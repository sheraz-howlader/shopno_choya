<div class="card">
    <div class="card-body">
        <form wire:submit.prevent="submitForm" method="get">
            <div class="row justify-content-end mb-3">
                <div class="col-md-2 pe-0 mt-2">
                    <div class="input-group input-group-sm">
                        <button class="btn btn-info btn-sm" type="button" data-toggle>
                            <i class="fas fa-calendar-alt"></i>
                        </button>

                        <input type="text" name="filter[date]" class="form-control form-control-sm flatpickr" readonly="readonly"
                               placeholder="Payment Date" wire:model="dateRange"
                               value="{{ $dateRange ?? '' }}" data-input>

                        <button class="btn btn-info btn-sm" type="button" id="clear-date">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-1 pe-0 mt-2">
                    <select name="filter[status]" class="form-control form-control-sm" wire:model="status">
                        <option selected> Select status</option>
                        <option
                            value="confirm" @selected(isset($status) && $status == 'confirm')>
                            Confirm
                        </option>
                        <option
                            value="pending" @selected(isset($status) && $status == 'pending')>
                            Pending
                        </option>
                    </select>
                </div>

                <div class="col-md-3 mt-2">
                    <div class="input-group input-group-sm">
                        <input type="text" name="search" class="form-control form-control-sm" wire:model="search"
                               placeholder="name/email/phone" value="{{ $search ?? '' }}">

                        <button class="btn btn-info btn-sm" type="submit"> Search </button>

                        @if (!empty($dateRange) || !empty($status) || !empty($search))
                            <button class="btn btn-danger btn-sm" wire:click="resetFilter"
                               role="button">
                                <i class="fas fa-sync-alt"></i>
                                Reset
                            </button>
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
                                            @if($deposit->statement_file)
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


@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get all elements with class .flatpickr
            const flatpickrInstances = document.querySelectorAll('.flatpickr');
            flatpickrInstances.forEach((element) => {
                // Apply Flatpickr to each element
                const instance = flatpickr(element, {
                    dateFormat: "Y-m-d",
                    enableTime: false,
                    mode: "range",
                });

                // Clear date functionality
                document.getElementById('clear-date').addEventListener('click', function () {
                    instance.clear() // Clear the date for this instance
                        @this.set('dateRange', null); // Reset the Livewire model
                });
            });
        });
    </script>
@endpush
