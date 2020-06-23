<!doctype html>
<html lang="en">
 <head>
     @include('content.meta')
     <title>Manajemen RSUNTAN</title>
     @include('content.css')
 </head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
     @include('content.header')
     @include('content.ui')
     @include('content.main-anak')
    </div>
    @include('content.js')

<!-- Datepicker -->     
<script type="text/javascript">
$(document).ready(function() {
    $('#table').DataTable({
        "responsive": true,
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('getTable') }}",
        "columns": [
            { "data": "DT_RowIndex", "name": 'id' },
            { "data": "va", "name": 'va' },
            { "data": "nama", "name": 'nama'},
            { "data": "status" , "name": 'status'},
            { "data": "name" , "name": 'teller'},
            { "data": "option" , "name": 'option', "orderable": false, "searchable": false}
        ]
    });
});
</script>
<!-- Datatables -->

</body>
</html>