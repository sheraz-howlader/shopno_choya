@extends('backend.layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css"/>

    <style>
        label:not(.form-check-label):not(.custom-file-label) {
            font-weight: 700;
        }
    </style>
@endpush

@section('contents')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title border-bottom pb-2 mb-4 d-flex align-items-center justify-content-between">
                <h4 class="mb-0"> Update Role </h4>

                <a href="{{ route('roles.index') }}" class="btn btn-info btn-sm">
                    <i class="fas fa-arrow-left me-1"></i>
                    Back
                </a>
            </div>

            @include('backend.layouts.notification')

            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('roles.update', $role->id) }}">
                        @csrf
                        @method('put')

                        <div class="form-group mb-4">
                            <label for="role_name"> Role Name </label>
                            <input type="text" class="form-control form-control-sm mt-1" id="role_name" name="role_name"
                                   placeholder="Role Name" value="{{ $role->name }}">
                        </div>

                        <div class="icheck-primary icheck-inline all_check">
                            <input type="checkbox" id="checkall" name="checkall" onclick="checkedAll();">
                            <label for="checkall">Mark All Access Key - for <b>{{ $role->name }}</b> Role</label>
                        </div>

                        @foreach($modules as $key => $module)
                            <div class="card my-4">
                                <div class="card-header p-3">
                                    {{ $module->name }}
                                    <a href="#" class="text-red ms-2" onclick="checkUncheck('module_{{ $key }}');">
                                        <i class="far fa-check-square"></i> Mark/Un-Mark All
                                    </a>
                                </div>
                                <div class="card-body p-3">
                                    <div class="row">
                                        @foreach($module->permissions as $permission)
                                            <div class="col-md-3">
                                                <div class="icheck-greensea icheck-inline">
                                                    <input type="checkbox" name="permissions[]"
                                                           class="module_{{ $key }} permission"
                                                           value="{{ $permission->id }}" id="{{ $permission->id }}"
                                                           @checked($role->permissions->pluck('id')->contains($permission->id))
                                                    >
                                                    <label for="{{ $permission->id }}">{{ $permission->name }}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <button class="btn btn-success btn-sm"> Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function checkedAll() {
            $('.permission').prop('checked', event.target.checked);
        }

        function checkUncheck(module_id) {
            event.preventDefault();
            let checkBoxes = $('.permission.' + module_id);
            checkBoxes.prop("checked", !checkBoxes.prop("checked"));
        }
    </script>
@endpush
