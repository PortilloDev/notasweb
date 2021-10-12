
 <div class="form-group">
    <label class="form-label">Titulo</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', isset($documentation->title) ? $documentation->title : '') }}"/>
</div>  
<div class="form-group">
    <label class="form-label">Slug</label>
    <input type="text" name="slug" class="form-control" value="{{ old('slug',  isset($documentation->slug) ?  $documentation->slug : '') }}"/>
</div>  
<div class="form-group">
    <label class="form-label">Descripción</label>
    <textarea name="description" rows="5" cols="40" class="form-control summernote">
        @if(isset($documentation->description))
            {{ $documentation->description }}
        @endif
    </textarea>
</div>  
<div class="form-group">
    <label class="form-label">Url documentación</label>
    <input type="text" name="url" class="form-control" value="{{ old('url',  isset($documentation->url) ?  $documentation->url : '') }}"/>
</div>  
<div class="form-group">
    <label class="form-label">Imagen</label>
    <input type="file" class="form-control" name="file" >
</div>  

@section('js')
<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('.summernote').summernote({    
    });
</script>
@stop
