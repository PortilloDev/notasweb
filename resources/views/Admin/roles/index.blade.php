@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Lista de roles</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.roles.create') }}">Crear rol</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th colspan="2"> </th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($roles as $rol )
                        <tr>
                            <td>{{ $rol->id }}</td>
                            <td>{{ $rol->name }}</td>
                            <td>
                                <a class="btn btn-secondary" href="{{ route('admin.roles.edit', $role) }}">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <form action="{{ route('admin.roles.destroy', $role) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger">Eliminar</button>    
                            </form>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="">No hay ningún rol registrado</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop