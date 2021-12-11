
@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Listado de tools</h1>
@stop

@section('content')
    @if(session('info'))
    <div class="alert alert-primary" role="alert">
        <strong>!Fantastico!</strong> {{ session('info') }}
    </div>
    @endif
    <div class="card-header">
        <a href="{{ route('admin.tools.create') }}">Crear tool</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th colspan="2"> </th>

                </tr>
            </thead>
            <tbody>
                @forelse ($tools as $tool )
                    <tr>
                        <td>{{ $tool->id }}</td>
                        <td>{{ $tool->name }}</td>
                        <td>{{ $tool->slug }}</td>
                        <td width="10px">
                            <a class="btn btn-secondary" href="{{ route('admin.tools.edit', $tool) }}">Edit</a>
                        </td>
                        <td width="10px">
                            <form action="{{ route('admin.tools.destroy', $tool) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger">Eliminar</button>    
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No hay ninguna tools registrado</td>
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