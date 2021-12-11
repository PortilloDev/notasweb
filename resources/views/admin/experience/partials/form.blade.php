
 <div class="form-group">
    <label class="form-label">Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', isset($experience->title) ? $experience->title : '') }}"/>
</div>  
<div class="form-group">
    <label class="form-label">Slug</label>
    <input type="text" name="slug" class="form-control" value="{{ old('slug',  isset($experience->slug) ?  $experience->slug : '') }}"/>
</div>  
<div class="form-group">
    <label class="form-label">Description</label>
    <textarea name="body" rows="5" cols="40" class="form-control summernote">
        @if(isset($experience->body))
            {{ $experience->body }}
        @endif
    </textarea>
</div>  
<div class="form-group">
    <label class="form-label">Skill</label>
    <select  name="skills[]" class="form-control" multiple>
        <option value=""> Selecciona skill...</option>
        @foreach ($skills as $id => $skill)
            <option value="{{ $skill->id }}" 
                 {{is_array(old('skill->id')) ? (in_array($skill->id, old('skill->id')) ? 'selected' : '')  : (isset($experience) ? ($experience->skills->firstWhere('id',$skill->id) ? 'selected' : '') : '')}}
                 > 
                 {{ $skill->name  }}</option>
        @endforeach

    </select>
</div>
<div class="form-group">
    <label class="form-label">Tecnologias</label>
    <select  name="tecnologies[]" class="form-control" multiple>
        <option value=""> Selecciona tecnología...</option>
        @foreach ($tecnologies as $id => $tecnology)
            <option value="{{ $tecnology->id }}" 
                 {{is_array(old('tecnology->id')) ? (in_array($tecnology->id, old('tecnology->id')) ? 'selected' : '')  : (isset($experience) ? ($experience->tecnologies->firstWhere('id',$tecnology->id) ? 'selected' : '') : '')}}
                 > 
                 {{ $tecnology->name  }}</option>
        @endforeach

    </select>
</div>
<div class="form-group">
    <label class="form-label">Tools</label>
    <select  name="tools[]" class="form-control" multiple>
        <option value=""> Selecciona Tool...</option>
        @foreach ($tools as $id => $tool)
            <option value="{{ $tool->id }}" 
                 {{is_array(old('tool->id')) ? (in_array($tool->id, old('tool->id')) ? 'selected' : '')  : (isset($experience) ? ($experience->tools->firstWhere('id',$tool->id) ? 'selected' : '') : '')}}
                 > 
                 {{ $tool->name  }}</option>
        @endforeach

    </select>
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
