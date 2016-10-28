@extends('layouts.dashboard')
@section('page_heading','Estadosalumnos')

@section('content')
    <table class="table table-hover " id="estadosalumnos-table">
        <thead>
            <th>Descripcion</th>
            <th>Acciones</th>
        </thead>
    </table>
@stop

@push('scripts')
<script>
$(function() {
    $('#estadosalumnos-table').DataTable({
        processing: true,
        serverSide: true,
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.9/i18n/Spanish.json"
        },
        ajax: '{!! route('estadosalumnos.data') !!}',
        columns: [
            { data: 'namelink', name: 'descripcion' },
            { data: 'action', name: 'action', orderable: false, searchable: false},            
        ]
    });
});
</script>
@endpush
