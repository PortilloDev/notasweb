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
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Escriba el slug']) !!}
    @error('slug')
        <small class="text-danger">
            <strong>{{ $message }} </strong>
        </small>
        <br>
    @enderror
</div>
