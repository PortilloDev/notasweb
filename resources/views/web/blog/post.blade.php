@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="bg-cover" style="background-image: url({{ Storage::url($post->image->url) }})">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                <div class="w-full md:w-3/4 lg:w-1/2">
                   
                </div>
            </div>
        </section>
        <div class="">
            <div class="">
                <hr>
                <div class="w-4/5 flex justify-between p-2 mt-2">
                    <div class="">
                        Categoria
                         <a href="{{route('category', $post->category->slug)}}">{{$post->category->name}}</a>
                    </div>
                    <div>
                        <p> Autor: {{ $post->user->name }}</p>
                    </div>
                    <div>
                        <p> fecha: {{ $post->created_at->format('d/m/Y') }}</p>
                    </div>
                </div>
                <hr>
                <div class="mt-5 mb-8">
                    <h1 class="font-fold text-6xl text-center font-bold mt-11" style="color:#303a52">{{$post->name}}</h1>
                </div>
                <hr>
                <div class="panel-body">
                    <div class="mt-2">
                        {!! $post->excerpt!!}
                    </div>
                   <hr>
                    <div class="mt-2">
                        {!! $post->body !!}
                    </div>

                   <hr>
                   Etiquetas
                   @foreach ($post->tags as $tag )
                       <a href="{{route('tag', $tag->slug)}}">
                            {{$tag->name}}
                       </a>
                   @endforeach

                </div>
            </div>

        </div>
    </div>
@endsection