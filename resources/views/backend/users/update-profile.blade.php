@extends('backend.layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css"/>
@endpush

@section('contents')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title border-bottom pb-2 mb-4 d-flex align-items-center justify-content-between">
                <h4 class="mb-0"> Profile Update </h4>

                <a href="{{ route('users.index') }}" class="btn btn-info btn-sm">
                    <i class="fas fa-arrow-left me-1"></i>
                    Back
                </a>
            </div>

            @include('backend.layouts.notification')

            <form action="{{ route('users.update', auth()->user()->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="{{ route('users.update', auth()->user()->id) }}">
                                    @csrf
                                    @method('put')
                                    <div class="row mt-2">
                                        <label for="name" class="col-sm-2 col-form-label col-form-label-sm mt-2">Name</label>
                                        <div class="col-sm-9 mt-2">
                                            <input type="text" class="form-control form-control-sm" name="name" id="name" value="{{ auth()->user()->name }}">
                                        </div>

                                        <label for="email" class="col-sm-2 col-form-label col-form-label-sm mt-2">Email</label>
                                        <div class="col-sm-9 mt-2">
                                            <input type="email" class="form-control form-control-sm" name="email" id="email" value="{{ auth()->user()->email }}">
                                        </div>

                                        <label for="phone_number" class="col-sm-2 col-form-label col-form-label-sm mt-2">Phone Number</label>
                                        <div class="col-sm-9 mt-2">
                                            <input type="number" class="form-control form-control-sm" name="phone_number" id="phone_number" value="{{ auth()->user()->phone_no }}">
                                        </div>

                                        <label for="pass" class="col-sm-2 col-form-label col-form-label-sm mt-2">Password</label>
                                        <div class="col-sm-9 mt-2">
                                            <input type="text" class="form-control form-control-sm" name="pass" id="pass">
                                        </div>

                                        <label for="status" class="col-sm-2 col-form-label col-form-label-sm mt-2"> Status </label>
                                        <div class="col-sm-9 mt-2">
                                            <div class="icheck-primary icheck-inline all_check">
                                                <input type="radio" id="active" name="status" value="1" @checked(auth()->user()->status === 1)>
                                                <label for="active"> Active </label>
                                            </div>
                                            <div class="icheck-primary icheck-inline all_check">
                                                <input type="radio" id="inactive" name="status" value="0" @checked(auth()->user()->status === 0)>
                                                <label for="inactive"> Inactive </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="offset-md-1 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"> Profile Picture </h5>
                                <input type="hidden" name="role_id" value="{{ auth()->user()->role_id }}">

                                <div class="from-group mt-2">
                                    <input class="file_upload" type="file" name="profile_pic" data-default-file="{{asset(auth()->user()->profile_photo_path)}}">
                                </div>

                                <button type="submit" class="btn btn-primary btn-sm mt-2 float-end">
                                    <i class="fas fa-save"></i> Save Changes
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.file_upload').dropify();
        });
    </script>
@endpush
