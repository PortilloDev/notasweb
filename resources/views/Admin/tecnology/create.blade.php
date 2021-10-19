@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Crear nueva tecnología</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.tecnologies.store']) !!}
            
            @include('admin.tecnology.partials.form')
            
            {!! Form::submit('Crear Tecnología', ['class' => 'btn btn-primary mt-2']) !!}
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
