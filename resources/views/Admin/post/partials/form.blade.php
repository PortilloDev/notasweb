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
<div class="form-group">
    {!! Form::label('category_id', 'Categoria:', ['class' => 'form-label']) !!}
    <br>
    {!! Form::select('category_id', 
              $categories,
             null,
             ['class' => 'form-control','placeholder' => 'Selecciona una categoría...']); !!}
    @error('category_id')
        <small class="text-danger">
            <strong>{{ $message }} </strong>
        </small>
        <br>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('user_id', 'Autor:', ['class' => 'form-label']) !!}
    <br>
    {!! Form::select('user_id', 
              $users,
             null,
             ['class' => 'form-control','placeholder' => 'Selecciona un autor...']); !!}
    @error('user_id')
        <small class="text-danger">
            <strong>{{ $message }} </strong>
        </small>
        <br>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('status', 'Estado:', ['class' => 'form-label']) !!}
    <br>
    {!! Form::select('status', 
             ['1' => 'Borrador','2' => 'Publicado'],
             null,
              ['class' => 'form-control','placeholder' => 'Estado']); !!}
    @error('status')
        <small class="text-danger">
            <strong>{{ $message }} </strong>
        </small>
        <br>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('excerpt', 'Extracto:') !!}
    <input type="textarea" name="excerpt" id="summernote_excerpt" class="form-control" >
    @error('excerpt')
        <small class="text-danger">
            <strong>{{ $message }} </strong>
        </small>
        <br>
    @enderror
</div>
<div class="form-group">

    {!! Form::label('body', 'Publicación:') !!}
    <input type="textarea" name="body" id="summernote" class="form-control" >
    @error('body')
        <small class="text-danger">
            <strong>{{ $message }} </strong>
        </small>
        <br>
    @enderror
</div>
<div class="form-group" >
    {!! Form::label('file', 'Imagen:') !!}
    {!! Form::file('file', $attributes = []) !!}
    @error('file')
        <small class="text-danger">
            <strong>{{ $message }} </strong>
        </small>
        <br>
    @enderror
</div>

@section('js')
<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({    
    });
    $('#summernote_excerpt').summernote({    
    });
</script>
@stop
