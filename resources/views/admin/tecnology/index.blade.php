
@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Listado de Tecnologias</h1>
@stop

@section('content')
    @if(session('info'))
    <div class="alert alert-primary" role="alert">
        <strong>!Fantastico!</strong> {{ session('info') }}
    </div>
    @endif
    <div class="card-header">
        <a href="{{ route('admin.tecnologies.create') }}">Crear Tecnología</a>
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
                @forelse ($tecnologies as $tecnology )
                    <tr>
                        <td>{{ $tecnology->id }}</td>
                        <td>{{ $tecnology->name }}</td>
                        <td>{{ $tecnology->slug }}</td>
                        <td width="10px">
                            <a class="btn btn-secondary" href="{{ route('admin.tecnologies.edit', $tecnology) }}">Edit</a>
                        </td>
                        <td width="10px">
                            <form action="{{ route('admin.tecnologies.destroy', $tecnology) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger">Eliminar</button>    
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No hay ninguna tecnología registrada</td>
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