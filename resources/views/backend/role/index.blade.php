@extends('backend.layouts.master')

@section('main-content')
    <main>
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    @include('backend.layouts.notification')
                </div>
            </div>

            <div class="page-title-container">
                <div class="row">
                    <div class="col-12 mb-3 mb-md-0 me-auto">
                        <div class="w-auto sw-md-30">
                            <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                                <i data-cs-icon="chevron-left" data-acorn-size="13"></i>
                                <span class="text-small align-middle"> home/role/management </span>
                            </a>
                        </div>
                    </div>

                    <h1 class="col-md-6"> Manage Roles </h1>
                    <div class="col-md-6">
                        <a href="{{ route('role.create') }}" class="btn btn-primary btn-sm float-end px-3">
                            <i class="fas fa-plus-circle"></i> Create Role </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center">Name</th>
                                <th class="text-center">Permissions</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody class="align-baseline">
                            @foreach($roles as $role)
                                <tr>
                                    <td class="text-center"> {{ $role->name }} </td>
                                    <td class="text-center">
                                        <span class="badge bg-info"> {{ $role->permissions_count }} </span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('role.edit', $role->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>

                                        <form action="{{ route('role.destroy', $role->id) }}" method="post" @class(['d-inline','d-none' => !$role->deletable])>
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm delete" type="submit">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
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
