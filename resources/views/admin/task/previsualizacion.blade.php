
@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Previsualización</h1>
@stop

@section('content')
    <div class="card-header">
        <h3>Previsualización de los posts</h3>
    </div>
    <hr>
    <div>
        @livewire('previsualizacion')
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>  </script>
@stop
