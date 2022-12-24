
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
        <a href="{{ route('admin.layouts.create') }}">Crear layout</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>H1</th>
                    <th>Parrafo</th>
                    <th>Extracto</th>
                    <th>Descripción</th>
                    <th colspan="2"> </th>

                </tr>
            </thead>
            <tbody>
                @forelse ($layouts as $layout )
                    <tr>
                        <td>{{ $layout->id }}</td>
                        <td>{{ $layout->h1 }}</td>
                        <td>{{ $layout->paragraph }}</td>
                        <td>{!! $layout->excerpt !!}</td>
                        <td>{!! $layout->description !!}</td>
                        <td width="10px">
                            <a class="btn btn-secondary" href="{{ route('admin.layouts.edit', $layout) }}">Edit</a>
                        </td>
                        <td width="10px">
                            <form action="{{ route('admin.layouts.destroy', $layout) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No hay ningun layout registrado</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@stop


@section('js')
    <script> console.log('Hi!'); </script>
@stop
