
@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Crear layout</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form method="layout" class="form form-horizontal" action="{{ route('admin.layouts.store') }}" enctype="multipart/form-data">
            @csrf
            @include('admin.layout.partials.form')
        
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
