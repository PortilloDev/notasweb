@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Editar usuario</h1>
@stop

@section('content')
    @if(session('info'))
    <div class="alert alert-primary" role="alert">
        <strong>!Fantastico!</strong> {{ session('info') }}
    </div>
    @endif
    <div class="card card-body">
        <h1 class="h5">Nombre</h1>
        <p class="form-control">{{ $user->name }}</p>
        <h1 class="h5">Lista de Roles</h1>
        {!! Form::model($user,['route' => ['admin.users.update', $user], 'method' => 'put']) !!}

            @foreach ($roles as $role )
               <div>
                    <label >
                        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                        {{ $role->name }}
                    </label>
               </div>
            @endforeach

            {!! Form::submit('Asginar rol', ['class' => 'btn btn-primary mt-2']) !!}
        {!! Form::close() !!}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop