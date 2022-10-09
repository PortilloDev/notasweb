@inject('text_layout', 'App\Helpers\LayoutHelper' )
@extends('layouts.app')

@php
    $texts = $text_layout::getHeaderText();
@endphp

@section('meta_title', 'Home')
@section('meta_image', asset('storage/blog/home.jpg') )

@section('content')
    <div class="divide-y divide-gray-200 dark:divide-gray-700">
        <div class="mt-2 mb-4">
            <h1 class="text-3xl font-extrabold leading-9 tracking-tight text-cyan-500 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14">
                Articulos del blog </h1>
        </div>
        <div class="mt-2 mb-4">
            <p class="text-lg leading-7 text-gray-500 dark:text-gray-400">Blog relacionado con tecnología y programación. Tutoriales y noticias sobre librerías, frameworks,
                buenas prácticas de programación, automatizaciones, patrones y todo tipo de contenido relacionado con el desarrollo y sus fases.</p>
        </div>
        <div class="mt-2 mb-4">
                @livewire('search')
        </div>
    </div>
    <ul class="divide-y divide-gray-200 dark:divide-gray-700">
        @if (isset($posts))
            @foreach ($posts as $post)
                    <x-card-post :post="$post" />
            @endforeach
        @endif
    </ul>

    <div class="flex justify-center text-base font-normal leading-6">
        {{ $posts->links() }}
    </div>
@endsection