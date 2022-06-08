
 <div class="form-group">
    <label class="form-label">Title</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', isset($post->name) ? $post->name : '') }}"/>
</div>  
<div class="form-group">
    <label class="form-label">Slug</label>
    <input type="text" name="slug" class="form-control" value="{{ old('slug',  isset($post->slug) ?  $post->slug : '') }}"/>
</div>  
<div class="form-group">
    <label class="form-label">Extracto</label>
    <textarea name="excerpt" rows="5" cols="40" class="form-control summernote_excerpt" >
        @if(isset($post->excerpt))
            {{ $post->excerpt }}
        @endif
    </textarea>
</div>  
<div class="form-group">
    <label class="form-label">Description</label>
    <textarea name="body" rows="5" cols="40" class="form-control">
        @if(isset($post->body))
            {{ $post->body }}
        @endif
    </textarea>
</div>  
<div class="form-group">
    <label class="form-label">Autor</label>
    <select name="user_id" id="user_id" class="form-control">
        <option value=""> Selecciona un autor...</option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}" {{  isset($post->category_id) ?  (old('user_id', $post->user_id) == $user->id ? 'selected' : '') : '' }}> {{ $user->name }}</option>
        @endforeach

    </select>
</div>  

<div class="form-group">
    <label class="form-label">Categoria</label>
    <select name="category_id" id="category_id" class="form-control">
        <option value=""> Selecciona una categoría...</option>
        @foreach ($categories as $category)
            <option 
                value="{{ $category->id }}"
                     {{ isset($post->category_id) ? (old('category_id', $post->category_id) == $category->id ? 'selected' : '') : '' }}> {{ $category->name  }}</option>
        @endforeach

    </select>
</div>
<div class="form-group">
    <label class="form-label">Etiquetas</label>
    <select  name="tags[]" class="form-control" multiple>
        <option value=""> Selecciona etiquetas...</option>
        @foreach ($tags as $id => $tag)
            <option value="{{ $tag->id }}" 
                 {{is_array(old('tag->id')) ? (in_array($tag->id, old('tag->id')) ? 'selected' : '')  : (isset($post) ? ($post->tags->firstWhere('id',$tag->id) ? 'selected' : '') : '')}}
                 > 
                 {{ $tag->name  }}</option>
        @endforeach

    </select>
</div>
<div class="form-group">
    <label class="form-label">Estado</label>
    <select name="status" id="status" class="form-control">
        <option value=""> Selecciona estado publicación...</option>
        <option value="2" {{ isset($post->status) ? (old('status', $post->status) == 2 ? 'selected' : '') : '' }}> Publicado</option>
        <option value="1" {{ isset($post->status) ? (old('status', $post->status) == 1 ? 'selected' : '') : '' }}> Borrador </option>

    </select>
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
