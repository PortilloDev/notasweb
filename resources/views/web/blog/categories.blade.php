@section('content')
@php
    // dd($posts);
@endphp
@section('meta_title', 'Categorias ' .$category->name)
@extends('layouts.app')
<section class="mb-10 mx-auto max-w-screen-xl px-4 xl:px-0">
    <div class="mt-6 mb-4 font-semibold text-center">
        <h2>Articulos relacionados con la categoría de <b> {{$category->name}} </b></h2>
    </div>
    <hr>
    <div class="grid grid-cols-1 gap-4 w-5/6 md:w-3/6 mx-auto max-w-screen-xl ">
        @if(isset($posts))
            @foreach ($posts as $post)
            <div class="mb-4 cursor-pointer rounded-md shadow-md shadow-gray-200 hover:shadow-blue-400/80 hover:shadow-2xl hover:bg-gray-50">
                <x-card-post :post="$post" />
            </div>
            @endforeach
        @else
            <h4>Lo sentimos, pero en este momento no existen entradas relacionadas a esta categoria</h4>
        @endif
    </div>
</section>

@endsection