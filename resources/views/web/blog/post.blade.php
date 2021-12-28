@extends('layouts.app')
@php
 $url = Request::url();  
@endphp
@section('content')
    <div class=" mx-auto w-auto px-4 xl:px-0">
        <section class="bg-cover w-auto h-auto object-fill" style="background-image: url({{ Storage::url($post->image->url) }})">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                <div class="w-full md:w-3/4 lg:w-1/2">
                </div>
            </div>
        </section>
        <div class=" ">
                <hr>
                <div class="w-auto flex justify-between p-2 mt-2">
                    <div class="ml-5">
                        Categoria
                        <a href="{{ route('category', $post->category->slug) }}">{{ $post->category->name }}</a>
                    </div>
                    <div class="mr-5">
                        <p> Publicado por <strong> {{ $post->user->name }} </strong> el {{ $post->created_at->format('d/m/Y') }}</p>
                    </div>
                </div>
                <hr>

                <div class="mt-5 mb-8">
                    <h1 class="font-fold text-6xl text-center font-bold mt-11" style="color:#303a52">{{ $post->name }}</h1>
                </div>
                <hr>
                <div class="panel-body">
                    <div class="mt-2">
                        {!! $post->excerpt !!}
                    </div>
                    <hr>
                    <div class="flex flex-wrap">
                        <div class="w-5/6 mt-2">
                            {!! $post->body !!}
                        </div>
                        <div class="w-1/6 mt-2 text-center">
                            {!! $post->getShare($url) !!}
                        </div>
                    </div>
                   
                    <hr>
                    Etiquetas
                    <i class="fas fa-tags"></i>
                    @foreach ($post->tags as $tag)
                        <a href="{{ route('tag', $tag->slug) }}">
                            {{ $tag->name }}
                        </a>
                    @endforeach
                </div>
        </div>
        <hr>
        <div>
            <h3>Entradas relacionadas</h3>
        </div>
        <hr>
        <div class="mb-5">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 mx-auto max-w-screen-xl ">
                @if(isset($similar_posts))
                    @foreach ($similar_posts as $post)
                        <x-card-post :post="$post" />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
