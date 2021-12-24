@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Lista de usuarips</h1>
@stop

@section('content')
    @livewire('admin-users')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop