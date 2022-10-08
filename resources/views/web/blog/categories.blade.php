@section('content')
@php
    // dd($posts);
@endphp
@section('meta_title', 'Categorias ' .$category->name)
@extends('layouts.app')
<section class="mb-10 mx-auto max-w-screen-xl px-4 xl:px-0">
    <div class="mt-6 mb-4 font-semibold text-center">
        <h1 class="text-3xl font-extrabold leading-9 tracking-tight text-cyan-500 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14">
            Articulos relacionados por la categoría <b> {{$category->name}} </b> </h1>

    </div>
    <hr>
    <ul class="divide-y divide-gray-200 dark:divide-gray-700">
        @if (isset($posts))
            @foreach ($posts as $post)
                    <x-card-post :post="$post" />
            @endforeach
        @else
            <h4>Lo sentimos, pero en este momento no existen entradas relacionadas a esta categoria</h4>
        @endif
    </ul>
</section>

@endsection
