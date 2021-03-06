@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">provincia {{ $provincia->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('provincias/' . $provincia->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit provincia"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['provincias', $provincia->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete provincia',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $provincia->id }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $provincia->nombre }} </td></tr><tr><th> Fk Pais Id </th><td> {{ $provincia->fk_pais_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection