@inject('text_layout', 'App\Helpers\LayoutHelper' )
@extends('layouts.app')
@php
$url = Request::url();
$texts = $text_layout::getHeaderText();
@endphp
@section('content')

    <section class="w-auto h-auto bg-center bg-cover" style="background-image: url({{ Storage::url($post->image->url) }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-black font-bold text-5xl">{{ $texts->h1 }}</h1>
                <p class="text-black text-lg mt-2 mb-4">{{ $texts->paragraph }}</p>
                @livewire('search')
            </div>
        </div>
    </section>
    <div class="max-w-screen-lg mx-auto">
        <main class="mt-10">
            <div class="mb-4 md:mb-0 w-full mx-auto relative">
                <div class="px-4 lg:px-0">
                    <h2 class="text-4xl font-semibold text-gray-800 leading-tight">
                        {{ $post->name }}
                    </h2>
                    <i class="fas fa-tags"></i>
                    @foreach ($post->tags as $tag)
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                            <a href="{{ route('tag', $tag->slug) }}">
                                #{{ $tag->name }}
                            </a>
                        </span>
                    @endforeach
                </div>
                {{-- <img src="{{ Storage::url($post->image->url) }}" class="w-full object-cover lg:rounded" style="height: 28em;"/> --}}
            </div>
            <div class="w-auto grid justify-start p-2 mt-2 md:flex justify-between  ">
                <div class="md:ml-5">
                    Categoria
                    <a href="{{ route('category', $post->category->slug) }}">{{ $post->category->name }}</a>
                </div>
                <div>
                    <i class="fas fa-eye"></i> <span class="text-base"> {{ $post->visits }} </span>
                </div>
                <div class="mr-5">
                    <p> Publicado por <strong> {{ $post->user->name }} </strong> el
                        {{ $post->created_at->format('d/m/Y') }}</p>
                </div>
            </div>
            <hr>

            <div class="flex flex-col lg:flex-row lg:space-x-12">
                <div class="px-4 lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
                    <p class="pb-6"> {!! $post->excerpt !!}</p>
                    <p class="pb-6"> {!! $post->body !!}</p>
                </div>
                <div class="w-full lg:w-1/4 max-w-screen-sm">
                    <div class="p-4 border-t border-b md:border md:rounded">
                        <div class="flex py-2">
                            <img src="{{ asset('storage/blog/profile.jpg') }}"
                                class="h-10 w-10 rounded-full mr-2 object-cover" />
                            <div>
                                <p class="font-semibold text-gray-700 text-sm"> Iván Portillo </p>
                                <p class="font-semibold text-gray-600 text-xs"> Programador Backend </p>
                            </div>
                        </div>
                        <p class="text-gray-700 py-3">
                            Soy desarrollador backend en Laravel y PHP. Me gusta escribir sobre desarrollo web,
                            programación y tecnología en general.
                        </p>
                        <a href="{{ route('perfil') }}"
                            class="px-2 py-1 text-gray-100 bg-green-700 flex w-full items-center justify-center rounded"
                            style="background-color: #303a52">
                            Sobre mí
                            <i class='bx bx-user-plus ml-2'></i>
                        </a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="mt-10 mb-10">
                {!! $post->getShare($url, $post->name) !!}
            </div>
            <hr>
            <div class="mb-5">
                <section class="mb-10 mx-auto max-w-screen-xl px-4 xl:px-0">
                    <div class="mt-6 mb-4 font-semibold text-center">
                        <h3>Otros articulos</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 mx-auto max-w-screen-xl ">
                        @if (isset($similar_posts))
                            @foreach ($similar_posts as $post)
                                <div class="w-auto cursor-pointer rounded-md shadow-md shadow-gray-200 hover:shadow-blue-400/80 hover:shadow-2xl hover:bg-gray-50">
                                    <x-card-post :post="$post" />
                                </div>
                            @endforeach
                        @endif
                    </div>
                </section>
            </div>
        </main>
    </div>
@endsection
