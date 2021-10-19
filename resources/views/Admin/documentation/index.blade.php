
@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Listado de documentación</h1>
@stop

@section('content')
    @if(session('info'))
    <div class="alert alert-primary" role="alert">
        <strong>!Fantastico!</strong> {{ session('info') }}
    </div>
    @endif
    <div class="card-header">
        <a href="{{ route('admin.documentations.create') }}">Crear Documentación</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr> 
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>slug</th>
                    <th>Descripción</th>
                    <th>url</th>
                     <th colspan="2"> </th>

                </tr>
            </thead>
            <tbody>
                @forelse ($documentations as $documentation )
                    <tr>
                        <td>{{ $documentation->id }}</td>
                        <td>{{ $documentation->title }}</td>
                        <td>{{ $documentation->slug }}</td>
                        <td>{{ $documentation->description }}</td>
                        <td>{{ $documentation->url }}</td>
                        <td width="10px">
                            <a class="btn btn-secondary" href="{{ route('admin.documentations.edit', $documentation) }}">Edit</a>
                        </td>
                        <td width="10px">
                            <form action="{{ route('admin.documentations.destroy', $documentation) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger">Eliminar</button>    
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No hay ninguna documentación registrada</td>
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