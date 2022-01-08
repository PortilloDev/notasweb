@inject('text_layout', 'App\Helpers\LayoutHelper' )
@extends('layouts.app')
@php
$texts = $text_layout::getHeaderText();
@endphp

@section('content')
    <section class="w-full h-full bg-center bg-cover" style="background-image: url({{ asset('storage/blog/home.jpg') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-5xl">{{ $texts->h1 }}</h1>
                <p class="text-white text-lg mt-2 mb-4">{{ $texts->paragraph }}</p>
                @livewire('search')
            </div>
        </div>
    </section>
    @include('partials/grid-home')
    <div class="container-fluid">
        <hr>
        <section class="mb-10 mx-auto max-w-screen-xl px-4 xl:px-0">
            <div class="mt-6 mb-4 font-semibold text-center">
                <h3>Articulos en el blog</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 mx-auto max-w-screen-xl ">
                @if (isset($posts))
                    @foreach ($posts as $post)
                        <x-card-post :post="$post" />
                    @endforeach
                @endif
            </div>
        </section>
        <div class="mx-auto max-w-screen-xl mt-4">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
