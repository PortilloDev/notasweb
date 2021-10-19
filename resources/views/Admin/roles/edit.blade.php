@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Edital rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put' ]) !!}

            @include('admin.roles.partials.form')

            {!! Form::submit('Actualizar Role', ['class' => 'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
