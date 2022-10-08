
@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Listado de categorias</h1>
@stop

@section('content')
    @if(session('info'))
    <div class="alert alert-primary" role="alert">
        <strong>!Fantastico!</strong> {{ session('info') }}
    </div>
    @endif
    <div class="card-header">
        <a href="{{ route('admin.categories.create') }}">Crear categoría</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Body</th>
                    <th colspan="2"> </th>

                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category )
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>{{ $category->body }}</td>
                        <td width="10px">
                            <a class="btn btn-secondary" href="{{ route('admin.categories.edit', $category) }}">Edit</a>
                        </td>
                        <td width="10px">
                            <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" aria-label="Eliminar">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No hay ninguna categoría registrada</td>
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
