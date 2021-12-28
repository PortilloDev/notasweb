
@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Editar post</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
      <form method="POST" class="form form-horizontal" action="{{ route('admin.posts.update', $post) }}" enctype="multipart/form-data">
      @csrf
       <input type="hidden" name="_method" value="put">
        @include('admin.post.partials.form')
        <div class="form-group">
                <input type="submit" value="Actualizar Post" class="btn btn-primary"/>
            </div>
        </form>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop