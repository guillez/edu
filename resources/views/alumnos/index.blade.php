@extends('layouts.dashboard')
@section('page_heading','alumnos')

@section('content')

<table class="table table-hover " id="alumnos-table">
    <thead>
        <th>Nombre</th>
        <th>Acciones</th>
    </thead>
</table>
@stop

@push('scripts')
<script>
$(function() {
    $('#alumnos-table').DataTable({
        processing: true,
        serverSide: true,
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.9/i18n/Spanish.json"
        },
        ajax: '{!! route('alumnos.data') !!}',
        columns: [
            { data: 'namelink', name: 'nombre' },
            { data: 'action', name: 'action', orderable: false, searchable: false},            
        ]
    });
});
</script>
@endpush