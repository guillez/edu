@extends('layouts.dashboard')
@section('page_heading','Nuevo alumno')

@section('content')
{{ Form::open([
        'route' => 'alumnos.store',
        ]) }}
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    {{ Form::label('nombre', 'Nombre del alumno:', ['class' => 'control-label']) }}
    {{ Form::text('nombre', null,['class' => 'form-control']) }}
</div>

{{ Form::submit('Crear nuevo alumno', ['class' => 'btn btn-primary']) }}

{{ Form::close() }}

@endsection