@extends('backend.layouts.app')

@section('contents')
    <main>
        <div class="container">
            <div class="error-page text-center">
                <h1 class="fw-bold text-danger" style="font-size:100px"> @yield('code') </h1>
                <div class="error-content ml-lg-4">
                    <h3><i class="fas fa-exclamation-triangle text-danger"></i> @yield('title') </h3>
                    <p class="mb-4 text-success"> @yield('message') </p>
                    <a class="btn btn-primary" href="{{ route('home') }}">
                        <i class="fas fa-home"></i>
                        You may return to Dashboard
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection
