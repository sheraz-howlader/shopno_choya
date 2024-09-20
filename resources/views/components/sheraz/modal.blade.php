@props(['url' => '', 'id' => '', 'content' => '', 'title' => '', 'method' => '', 'formID' => '','animation' => ''])

<form action="{{ $url }}" method="post" id="{{$formID}}" enctype="multipart/form-data">
    @csrf
    @if($method)
        @method($method)
    @endif

    <div class="modal fade modal-animate {{$animation}}" id="{{ $id }}" data-bs-backdrop="static" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> {{ $title }} </h5>
                    <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ $content }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary shadow-2 btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>


@push('styles')
    <link rel="stylesheet" href="https://codedthemes.com/demos/admin-templates/gradient-able/bootstrap/default/assets/css/plugins/animate.min.css">
@endpush
