@extends('backend.layouts.app')
@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"/>
@endpush

@section('contents')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fas fa-user-plus">
                    </i>
                </div>
                <div> Create User</div>
            </div>
            <div class="page-title-actions">
                <a href="{{route('users.index')}}" class="btn-shadow mr-3 btn btn-danger">
                    <i class="fas fa-arrow-circle-left"> </i>
                    Back to list
                </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{route('users.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title"> Manage User </h5>
                        <div class="from-group">
                            <label for="name"> Name : </label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{old('name')}}">
                        </div>
                        <div class="from-group">
                            <label for="email"> Email : </label>
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{old('email')}}">
                        </div>
                        <div class="from-group">
                            <label for="password"> Password : </label>
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password">
                        </div>
                        <div class="from-group">
                            <label for="password_confirmation"> Confirm Password : </label>
                            <input id="password_confirmation" type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   name="password_confirmation">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title"> Manage Role </h5>
                        <div class="from-group">
                            <label for="name"> Select Role : </label>

                            <select name="role_id" id="" class="form-control">
                                @foreach (auth()->user()->role->slug == 'admin' ? $roles : $roles->except(1) as $key => $role)
                                    <option value="{{$role->id}}"> {{$role->name}} </option>
                                @endforeach
                            </select>

                        </div>

                        <div class="from-group mt-2">
                            <label for="profile_pic"> Uplaod Profile Picture : </label>
                            <input class="dropify" type="file" name="profile_pic">
                        </div>

                        <button type="submit" class="btn btn-primary mt-2"> Submit</button>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.dropify').dropify();
        });
    </script>
@endpush
