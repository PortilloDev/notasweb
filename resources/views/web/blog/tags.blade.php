@extends('layouts.app')
@section('meta_title', 'Etiquetas ' .$tag->name)
@section('content')
<section class="mb-10 mx-auto max-w-screen-xl px-4 xl:px-0">
    <div class="mt-6 mb-4 font-semibold text-left">
        <h1 class="text-3xl font-extrabold leading-9 tracking-tight text-cyan-500 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14">
            Articulos relacionados por la etiqueta  <b> {{$tag->name}} </b> </h1>
    </div>
    <hr>
    <div class="flex flex-col lg:flex-row lg:space-x-12">
        <div class="px-4 lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
            @if(isset($posts))
                @foreach ($posts as $post)
                    <x-card-post :post="$post" />
                @endforeach
            @else
                <h4>Lo sentimos, pero en este momento no existen entradas relacionadas a esta etiqueta</h4>
            @endif
        </div>
        <div class="w-full lg:w-1/4 max-w-screen-sm">
            <div class="grid">
                  <h3> Otras etiquetas</h3>
            </div>
            <div class="p-4 border-t border-b md:border md:rounded">
                <i class="fas fa-tags"></i>
                @foreach ($tags as $tag)
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                        <a href="{{ route('tag', $tag->slug) }}">
                            #{{ $tag->name }}
                        </a>
                    </span>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
