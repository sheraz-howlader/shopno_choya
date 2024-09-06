@extends('backend.layouts.master')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css" />

    <style>
        label:not(.form-check-label):not(.custom-file-label) {
            font-weight: 700;
        }
    </style>
@endpush

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
                                <span class="text-small align-middle"> home/update/role </span>
                            </a>
                        </div>
                    </div>

                    <h1 class="col-md-6"> Update Role </h1>
                    <div class="col-md-6">
                        <a href="{{ route('role.index') }}" class="btn btn-info btn-sm float-end px-3">
                            <i class="fas fa-arrow-left"></i> Back </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <form method="post" action="{{ route('role.update', $role->id) }}">
                    @csrf
                    @method('put')

                    <div class="form-group mb-4">
                        <label for="role_name"> Role Name </label>
                        <input type="text" class="form-control" id="role_name" name="role_name" placeholder="Role Name" value="{{ $role->name }}">
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
                                                <input type="checkbox" name="permissions[]" class="module_{{ $key }} permission" value="{{ $permission->id }}" id="{{ $permission->id }}"
                                                {{ $role->permissions()->pluck('id')->contains($permission->id) ? 'checked': '' }}>
                                                <label for="{{ $permission->id }}">{{ $permission->name }}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <button class="btn btn-success"> Save Changes </button>
                </form>
            </div>
        </div>
    </main>
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
