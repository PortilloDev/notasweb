
@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Crear documentación</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form method="post" class="form form-horizontal" action="{{ route('admin.documentations.store') }}" enctype="multipart/form-data">
             @csrf
             @include('admin.documentation.partials.form')
        
            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-primary"/>
            </div>
        </form>
    </div>
</div>
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
