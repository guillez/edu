@extends('layouts.dashboard')
@section('page_heading','Editar alumno')

@section('content')
{!! Form::model($alumno, [
        'method' => 'PATCH',
        'route' => ['alumnos.update', $alumno->id],
        ]) !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    {!! Form::label('nombre', 'Nombre del alumno:', ['class' => 'control-label']) !!}
    {!! Form::text('nombre', null,['class' => 'form-control']) !!}
</div>

{!! Form::submit('Actualizar alumno', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@endsection