@php
    $layout ='errors.backend-error-layout';
@endphp

@extends($layout)
@section('title', __('Forbidden'))
@section('code', '403')
@section('message', 'You are not authorized to access this page.')
