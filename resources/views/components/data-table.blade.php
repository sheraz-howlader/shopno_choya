@props([
    'id' => '' ,
    'thead' => '',
    'tbody' => ''
])

<table id="{{ $id }}" class="table table-bordered nowrap dataTable table-hover">
    <thead> {{ $thead }} </thead>
    <tbody> {{ $tbody }} </tbody>
</table>







@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.1.2/css/buttons.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.1.2/css/buttons.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.3/css/responsive.bootstrap5.css">

    <style>
        /*div.dt-button-collection{*/
        /*    width: 20%;*/
        /*}*/

        .table td,.table th {
            padding: 5px 10px!important;
        }

        div.dt-buttons > .dt-button, div.dt-buttons > div.dt-button-split .dt-button {
            border: none!important;
            background: rgba(0, 0, 0, 0.1)!important;
        }
    </style>

@endpush

@push('scripts')
    <script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.colVis.min.js"></script>

    <script src="https://cdn.datatables.net/2.1.5/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.3/js/dataTables.responsive.js"></script>

    <script>
        $('#select_all').on('click', function() {
            $('.dt-checkboxes').prop('checked', this.checked);
        });
    </script>

@endpush
