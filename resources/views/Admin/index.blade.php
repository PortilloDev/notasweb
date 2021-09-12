@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Panel de administración</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop