@extends('backend.layouts.master')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css" />
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
                                <span class="text-small align-middle"> home/create/role </span>
                            </a>
                        </div>
                    </div>

                    <h1 class="col-md-6"> Create Role </h1>
                    <div class="col-md-6">
                        <a href="{{ route('role.index') }}" class="btn btn-info btn-sm float-end px-3">
                            <i class="fas fa-arrow-left"></i> Back </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('role.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="role_name"> Role Name </label>
                                <input type="text" class="form-control" id="role_name" name="role_name" placeholder="Role Name">
                                <p class="text-center"> <b>Manage Permission for Role</b> </p>
                            </div>

                            @foreach($modules as $module)
                                <div class="card mb-4">
                                    <div class="card-header p-2">
                                        {{ $module->name }}
                                        <a href="#" class="text-red">
                                            <i class="far fa-check-square"></i> Mark/Un-Mark All
                                        </a>
                                    </div>
                                    <div class="card-body p-3">
                                        <div class="row">
                                            @foreach($module->permissions as $permission)
                                                <div class="col-md-3">
                                                    <div class="icheck-greensea icheck-inline">
                                                        <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" id="{{ $permission->id }}">
                                                        <label for="{{ $permission->id }}">{{ $permission->name }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <button class="btn btn-secondary"> Create </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
@endpush
