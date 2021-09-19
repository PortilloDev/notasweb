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