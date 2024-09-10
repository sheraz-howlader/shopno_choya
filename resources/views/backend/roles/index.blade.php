@extends('backend.layouts.app')

@section('contents')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title border-bottom pb-2 mb-4 d-flex align-items-center justify-content-between">
                <h4 class="mb-0"> Role List </h4>

                @canany(['role::create'])
                    <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus-circle me-1"></i>
                        Add Role
                    </a>
                @endcanany
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <x-data-table>
                        <x-slot:thead>
                            <tr>
                                <th class="text-center">Name</th>
                                <th class="text-center">Permissions</th>

                                @canany(['role::edit', 'role::delete'])
                                    <th class="text-center">Action</th>
                                @endcanany
                            </tr>
                        </x-slot:thead>

                        <x-slot:tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td class="text-center"> {{ $role->name }} </td>
                                    <td class="text-center">
                                        <span class="badge bg-info"> {{ $role->permissions_count }} </span>
                                    </td>
                                    @canany(['role::edit', 'role::delete'])
                                        <td class="text-center">
                                            @canany(['role::edit'])
                                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            @endcanany

                                            @canany(['role::delete'])
                                                <form action="{{ route('roles.destroy', $role->id) }}"
                                                      method="post" @class(['d-inline','d-none' => !$role->deletable])>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm delete" type="submit">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            @endcanany
                                        </td>
                                    @endcanany
                                </tr>
                            @endforeach
                        </x-slot:tbody>
                    </x-data-table>
                    </div>
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
