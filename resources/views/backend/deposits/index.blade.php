@extends('backend.layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

@section('contents')

    <livewire:deposit-crud :users="$users"></livewire:deposit-crud>

@endsection
