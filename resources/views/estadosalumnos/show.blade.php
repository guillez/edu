@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">estadosalumno {{ $estadosalumno->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('estadosalumnos/' . $estadosalumno->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit estadosalumno"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['estadosalumnos', $estadosalumno->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete estadosalumno',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $estadosalumno->id }}</td>
                                    </tr>
                                    <tr><th> Descripcion </th><td> {{ $estadosalumno->descripcion }} </td></tr><tr><th> Activo </th><td> {{ $estadosalumno->activo }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection