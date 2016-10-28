@extends('vendor.crud.single-page-templates.common.app')

@section('content')

    <h2>Update Banco: {{$banco->nombre}}</h2>

    <form action="/banco/{{$banco->id}}" method="post">

        {{ csrf_field() }}

        {{ method_field("PUT") }}

        {!! \Nvd\Crud\Form::input('nombre','text')->model($banco)->show() !!}

        <button type="submit" class="btn btn-default">Submit</button>

    </form>

@endsection