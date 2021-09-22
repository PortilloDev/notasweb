
@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Listado de posts</h1>
@stop

@section('content')
    @if(session('info'))
    <div class="alert alert-primary" role="alert">
        <strong>!Fantastico!</strong> {{ session('info') }}
    </div>
    @endif
    <div class="card-header">
        <a href="{{ route('admin.posts.create') }}">Crear Post</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr> 
                    <th>Id</th>
                    <th>Autor</th>
                    <th>Categoria</th>
                    <th>Titulo</th>
                    <th>Slug</th>
                    <th>Extracto</th>
                    <th>Estado</th>
                    <th colspan="2"> </th>

                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post )
                    <tr>
                        <td>{{ $tag->id }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->name }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->excerpt }}</td>
                        <td>{{ $post->status }}</td>
                        <td width="10px">
                            <a class="btn btn-secondary" href="{{ route('admin.posts.edit', $post) }}">Edit</a>
                        </td>
                        <td width="10px">
                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger">Eliminar</button>    
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No hay ningun post registrado</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop