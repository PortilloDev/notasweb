
<div class="form-group">
    <label class="form-label">H1</label>
    <input type="text" name="h1" class="form-control" value="{{ old('h1', isset($layout->h1) ? $layout->h1 : '') }}"/>
</div>  
<div class="form-group">
    <label class="form-label">Parrafo</label>
    <input type="text" name="paragraph" class="form-control" value="{{ old('paragraph',  isset($layout->paragraph) ?  $layout->paragraph : '') }}"/>
</div>  
<div class="form-group">
    <label class="form-label">Extracto</label>
    <textarea name="excerpt" rows="5" cols="40" class="form-control summernote_excerpt" >
        @if(isset($layout->excerpt))
            {{ $layout->excerpt }}
        @endif
    </textarea>
</div>  
<div class="form-group">
    <label class="form-label">Description</label>
    <textarea name="description" rows="5" cols="40" class="form-control summernote">
        @if(isset($layout->description))
            {{ $layout->description }}
        @endif
    </textarea>
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
    $('.summernote_excerpt').summernote({    
    });
</script>
@stop
