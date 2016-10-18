@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">alumno {{ $alumno->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('alumnos/' . $alumno->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit alumno"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['alumnos', $alumno->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete alumno',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $alumno->id }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $alumno->nombre }} </td></tr><tr><th> Documento </th><td> {{ $alumno->documento }} </td></tr><tr><th> Serial </th><td> {{ $alumno->serial }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection