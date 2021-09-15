@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Crear nuevo rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre:') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Escriba un nombre']) !!}
                @error('name')
                    <small class="text-danger">
                        <strong>{{ $message }} </strong>
                    </small>
                    <br>
                @enderror
            </div>
            <strong>Permisos</strong>
            @error('permissions')
                <br>
                <small class="text-danger">
                    <strong>{{ $message }} </strong>
                </small>
                <br>
            @enderror
            @foreach ($permissions as $permission)
                <div>
                    <label>
                        {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                        {{ $permission->name }}
                    </label>
                </div>
            @endforeach

            {!! Form::submit('Crear Role', ['class' => 'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
