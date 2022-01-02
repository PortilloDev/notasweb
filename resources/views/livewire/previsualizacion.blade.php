<div>

@section('content')
<hr>
<div class="mt-5">
    <select class="form-control" >
        <option value="">{{ __("Selecciona un post") }}</option>
        @foreach ($this->posts as $post)
            <option value=""value="{{$post->id  }}">
                <button wire:click="viewPost({{ $post->id }})" > {{$post->name  }}</button>
            </option> 
        @endforeach
        </select>
</div>
@if($entrada)
<hr>
    <div class=" mx-auto w-auto px-4 xl:px-0">
        <section class="bg-contain lg:bg-cover" style="background-image: url({{ Storage::url($entrada->image->url) }});
            background-position:center;background-repeat:no-repeat;">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">     
            </div>
        </section>
        <div class=" ">
                <hr>
                <div class="w-auto grid justify-start p-2 mt-2 md:flex justify-between  ">
                    <div class="md:ml-5">
                        Categoria
                        <a href="{{ route('category', $entrada->category->slug) }}">{{ $entrada->category->name }}</a>
                    </div>
                    <div class="mr-5">
                        <p> Publicado por <strong> {{ $entrada->user->name }} </strong> el {{ $entrada->created_at->format('d/m/Y') }}</p>
                    </div>
                </div>
                <hr>

                <div class="mt-5 mb-8">
                    <h1 class="font-fold text-6xl text-center font-bold mt-11" style="color:#303a52">{{ $entrada->name }}</h1>
                </div>
                <hr>
                <div class="panel-body">
                    <div class="mt-2">
                        {!! $entrada->excerpt !!}
                    </div>
                    <hr>
                    <div class="flex flex-wrap">
                        <div class="w-5/6 mt-2">
                            {!! $entrada->body !!}
                        </div>
                        <div class="w-1/6 mt-2 text-center">
                        </div>
                    </div>                   
                    <hr>
                    Etiquetas
                    <i class="fas fa-tags"></i>
                    @foreach ($entrada->tags as $tag)
                        <a href="{{ route('tag', $tag->slug) }}">
                            {{ $tag->name }}
                        </a>
                    @endforeach
                </div>
        </div>
        <hr>
    </div>
@endif    
@endsection


</div>
