@extends('vendor.crud.single-page-templates.common.app')

@section('content')

    <h2>Banco: {{$banco->nombre}}</h2>

    <ul class="list-group">

        <li class="list-group-item">
            <h4>Id</h4>
            <h5>{{$banco->id}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Nombre</h4>
            <h5>{{$banco->nombre}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Created At</h4>
            <h5>{{$banco->created_at}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Updated At</h4>
            <h5>{{$banco->updated_at}}</h5>
        </li>
        
    </ul>

@endsection