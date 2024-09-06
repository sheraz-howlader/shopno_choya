@push('styles')
    <style>
        .bd-callout {
            padding: .5rem;
            margin-top: 1.25rem;
            margin-bottom: 1.25rem;
            border: 1px solid #e9ecef;
            border-left-width: 0.25rem;
            border-radius: 0.25rem;
        }
        .bd-callout-warning {
            border-left-color: #f0ad4e;;
        }
    </style>
@endpush

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show">
        {{session('error')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($errors->any())
    <div class="bd-callout bd-callout-warning">
        <ul class="list-unstyled mb-0 error-message">
            @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session()->has('HTML'))
    <div id="importStatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title"> Imported Status </h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                      <span aria-hidden="true">
                          <i class="dripicons-cross"></i>
                      </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="bd-callout bd-callout-warning">
                        {!! session()->get('HTML') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@push('scripts')
    <script>
        // $('#importStatus').modal('show');
    </script>
@endpush
