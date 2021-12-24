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
        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::text('password',null, ['class' => 'form-control', 'placeholder' => 'Escriba una contraseña']) !!}
            @error('password')
                <small class="text-danger">
                    <strong>{{ $message }} </strong>
                </small>
                <br>
            @enderror
        </div>   
        <div class="form-group">
            {!! Form::label('password2', 'Repita la Password:') !!}
            {!! Form::text('password2',null, ['class' => 'form-control', 'placeholder' => 'Repita la contraseña']) !!}
            @error('password2')
                <small class="text-danger">
                    <strong>{{ $message }} </strong>
                </small>
                <br>
            @enderror
        </div>
            @foreach ($roles as $role )
                <div>
                    <label >
                        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                        {{ $role->name }}
                    </label>
                </div>
            @endforeach

            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary mt-2']) !!}
        {!! Form::close() !!}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop