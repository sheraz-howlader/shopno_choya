<!DOCTYPE html>
<html>

<head>
    <title> SCSS </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="SaaS & Inventory Software">
    <meta name="keywords" content="SaaS & Inventory Software">
    <meta name="author" content="Sheraz Howlader">

    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}"/>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('backend/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ url('backend/css/style-preset.css') }}">

    <script src="https://kit.fontawesome.com/7b81d78297.js" crossorigin="anonymous"></script>

    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/phosphor-icons@1.4.2/src/css/icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icon@0.1.0/css/feather.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/material-icons@1.13.12/iconfont/material-icons.min.css">

    {{--icheck--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">

    @stack('styles')
    <style>
        .required::after{
            content: '*';
            color: red;
        }
    </style>
</head>


<body data-pc-header="header-1" data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true"
      data-pc-direction="ltr" data-pc-theme="light">

<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>

@include('backend.layout.sidebar')

@include('backend.layout.header')

<div class="pc-container">
    <div class="pc-content">
        @yield('contents')
    </div>
</div>

<footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
        <div class="row">
            <div class="col-sm-6 my-1">
                <p class="m-0"> SCSS &#9829; crafted by Team
                    <a href="https://github.com/sherazHowlader" target="_blank"> Sheraz Howlader </a></p>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="{{ url('backend/js/plugins/popper.min.js') }}" type="6c705b80c5ee6d73b3f92550-text/javascript"></script>
<script src="{{ url('backend/js/plugins/simplebar.min.js') }}" type="6c705b80c5ee6d73b3f92550-text/javascript"></script>
<script src="{{ url('backend/js/plugins/bootstrap.min.js') }}" type="6c705b80c5ee6d73b3f92550-text/javascript"></script>
<script src="{{ url('backend/js/fonts/custom-font.js') }}" type="6c705b80c5ee6d73b3f92550-text/javascript"></script>
<script src="{{ url('backend/js/pcoded.js') }}" type="6c705b80c5ee6d73b3f92550-text/javascript"></script>
<script src="{{ url('backend/js/plugins/feather.min.js') }}" type="6c705b80c5ee6d73b3f92550-text/javascript"></script>
<script src="{{ url('backend/js/rocket-loader.min.js') }}" data-cf-settings="6c705b80c5ee6d73b3f92550-|49" defer></script>

<script src="{{ ('backend/js/plugins/apexcharts.min.js ') }}" type="6c705b80c5ee6d73b3f92550-text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/phosphor-icons@1.4.2/src/index.min.js"></script>

@stack('scripts')
@routes
</body>
</html>
