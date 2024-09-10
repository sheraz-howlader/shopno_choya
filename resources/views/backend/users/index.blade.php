@extends('backend.layouts.app')

@section('contents')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title border-bottom pb-2 mb-4 d-flex align-items-center justify-content-between">
                <h4 class="mb-0"> Member List </h4>
            </div>

            <div class="card">
                <div class="card-body">
                <div class="table-responsive">
                    <x-data-table>
                        <x-slot:thead>
                            <tr>
                                <th class="text-center" width="3%">S/L</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Status</th>
                                @canany(['user::edit', 'user::destroy'])
                                    <th class="text-center">Action</th>
                                @endcanany
                            </tr>
                        </x-slot:thead>

                        <x-slot:tbody>
                            @forelse($users as $user)
                                <tr>
                                    <td class="text-center"> {{ $loop->index +  $users->firstItem()}} </td>
                                    <td>
                                        <img src="{{ asset($user->thumbnail()) }}" alt="{{ $user->name }}"
                                             class="img-thumbnail me-1" style="max-height: 40px; max-width: 50px">
                                        {{ $user->name }}

                                        @if($user->role->slug === 'admin')
                                            <span class="badge bg-dark">Admin</span>
                                        @elseif($user->role->slug === 'cashier')
                                            <span class="badge bg-primary">Cashier</span>
                                        @endif
                                    </td>
                                    <td> {{ $user->email }} </td>
                                    <td class="text-center"> {{ $user->phone_no ?? 'N/A' }} </td>
                                    <td class="text-center"> {!! $user->display_status !!} </td>

                                    @canany(['user::edit', 'user::destroy'])
                                        @if(auth()->user()->role_id == 1 || $user->role_id !== 1)
                                            <td class="text-center">
                                                <a href="{{ route('users.edit', $user->id) }}"
                                                   class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <form action="{{ route('users.destroy', $user->id) }}" method="post"
                                                      class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm delete" type="submit">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        @endif
                                    @endcanany
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center text-danger"> No Deposit Found!</td>
                                </tr>
                            @endforelse
                        </x-slot:tbody>
                    </x-data-table>
                </div>
                @if($users->hasPages())
                    <div class="card-footer py-0">
                        {{ $users->links() }}
                    </div>
                @endif
            </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(function () {
            $(".delete").on('click', async function (e) {
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
        });
    </script>
@endpush
