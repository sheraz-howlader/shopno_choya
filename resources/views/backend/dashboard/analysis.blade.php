@extends('backend.layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

@section('contents')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title border-bottom pb-2 mb-4 d-flex align-items-center justify-content-between">
                <h4 class="mb-0"> Analysis & Report </h4>
            </div>

            @include('backend.layouts.notification')


            <livewire:analysis></livewire:analysis>


        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

{{--    <script>--}}
{{--        // date picker--}}
{{--        $('.flatpickr').flatpickr({--}}
{{--            altInput: true,--}}
{{--            dateFormat: "Y-m-d",--}}
{{--            enableTime: false,--}}
{{--            altFormat: "d/m/y",--}}
{{--            wrap: true,--}}
{{--            mode: "range",--}}
{{--        });--}}
{{--    </script>--}}
@endpush
