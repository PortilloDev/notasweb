
@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Crear post</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.posts.store']) !!}
        
        @include('admin.post.partials.form')
        
        {!! Form::submit('Crear Post', ['class' => 'btn btn-primary mt-2']) !!}
        {!! Form::close() !!}
    </div>
</div>
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
