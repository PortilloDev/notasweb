
@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Previsualización de los posts</h1>
@stop

@section('content')
<div class="card-header">
   
</div>
<div class="mt-5">
    @livewire('preview-post',['posts' => $posts])
</div>
<hr>
        
@stop


@section('js')
    <script>  </script>
@stop
