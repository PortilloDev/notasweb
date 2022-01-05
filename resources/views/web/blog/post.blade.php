@extends('layouts.app')
@php
    $url = Request::url();  
@endphp
@section('content')
    <div class=" mx-auto w-auto px-4 xl:px-0">
        <section class="bg-contain lg:bg-cover" style="background-image: url({{ Storage::url($post->image->url) }});
            background-position:center;background-repeat:no-repeat;">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">     
            </div>
        </section>
        <div class=" ">
                <hr>
                <div class="w-auto grid justify-start p-2 mt-2 md:flex justify-between  ">
                    <div class="md:ml-5">
                        Categoria
                        <a href="{{ route('category', $post->category->slug) }}">{{ $post->category->name }}</a>
                    </div>
                    <div>
                        <i class="fas fa-eye"></i>  <span class="text-base"> {{ $post->visits }}   </span>
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
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                            <a href="{{ route('tag', $tag->slug) }}">
                                #{{ $tag->name }}
                            </a>
                        </span>
                    @endforeach
                </div>
        </div>
        <hr>
        <div>
            <h3>Otros artículos</h3>
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
