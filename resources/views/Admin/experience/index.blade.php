
@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Listado de experiencias</h1>
@stop

@section('content')
    @if(session('info'))
    <div class="alert alert-primary" role="alert">
        <strong>!Fantastico!</strong> {{ session('info') }}
    </div>
    @endif
    <div class="card-header">
        <a href="{{ route('admin.experiences.create') }}">Crear Experiencía</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>title</th>
                    <th>Slug</th>
                    <th>Body</th>
                    <th colspan="2"> </th>

                </tr>
            </thead>
            <tbody>
                @forelse ($experiences as $experience )
                    <tr>
                        <td>{{ $experience->id }}</td>
                        <td>{{ $experience->title }}</td>
                        <td>{{ $experience->slug }}</td>
                        <td>{{ $experience->body }}</td>
                        <td width="10px">
                            <a class="btn btn-secondary" href="{{ route('admin.experiences.edit', $experience) }}">Edit</a>
                        </td>
                        <td width="10px">
                            <form action="{{ route('admin.experiences.destroy', $experience) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger">Eliminar</button>    
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No hay ninguna experiencía registrada</td>
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