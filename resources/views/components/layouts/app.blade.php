<!DOCTYPE html>
<html>

<head>
    <title> {{ config('app.name') }} </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ config('app.name') }}">
    <meta name="keywords" content="{{ config('app.name') }}">
    <meta name="author" content="Sheraz Howlader">

    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}"/>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('backend/css/style.css') }}" id="main-style-link"  data-navigate-once>
    <link rel="stylesheet" href="{{ url('backend/css/style-preset.css') }}"  data-navigate-track>

    <script src="https://kit.fontawesome.com/7b81d78297.js" crossorigin="anonymous"  data-navigate-track></script>

    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/phosphor-icons@1.4.2/src/css/icons.min.css"  data-navigate-track>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icon@0.1.0/css/feather.min.css"  data-navigate-track>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/material-icons@1.13.12/iconfont/material-icons.min.css"  data-navigate-track>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"  data-navigate-track>

    {{--icheck--}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"  data-navigate-track>

    @stack('styles')
    <style>
        .required::after {
            content: '*';
            color: red;
        }

        #loading{
            position: fixed;
            width: 100%;
            height: 100vh;
            background: #fff
            url({{ asset('preloader.gif') }})
            no-repeat center center;
            z-index: 99999;
        }
    </style>

    @livewireStyles
</head>


<body data-pc-header="header-1" data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true"
      data-pc-direction="ltr" data-pc-theme="light">

{{--@persist('loading')--}}
{{--<div id="loading"></div>--}}
{{--@endpersist--}}

<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>

@include('backend.layouts.sidebar')

@include('backend.layouts.header')

<div class="pc-container">
    <div class="pc-content">
        @yield('contents')
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js" data-navigate-track></script>
<script src="{{ url('backend/js/plugins/popper.min.js') }}" data-navigate-track></script>
<script src="{{ url('backend/js/plugins/simplebar.min.js') }}" data-navigate-track></script>
<script src="{{ url('backend/js/plugins/bootstrap.min.js') }}" data-navigate-track></script>
<script src="{{ url('backend/js/fonts/custom-font.js') }}" data-navigate-once></script>
<script src="{{ url('backend/js/pcoded.js') }}" data-navigate-once></script>
<script src="{{ url('backend/js/plugins/feather.min.js') }}" data-navigate-track></script>

<script src="https://cdn.jsdelivr.net/npm/phosphor-icons@1.4.2/src/index.min.js" data-navigate-track></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr" data-navigate-track></script>

<script data-navigate-once>
    let preloader = document.getElementById("loading");
    function myFunction(){
        preloader.style.display = 'none';
    }
</script>


@stack('scripts')
@include('sweetalert::alert')
@livewireScripts
{{--@routes--}}

</body>
</html>
