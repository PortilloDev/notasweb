@extends('layouts.app')

@section('content')
    <div class="container">

        <div>
            <p class="text-left text-2xl p-2">
                Notas Web, desea compartir conocimiento y aportar un granito de arena a la comunidad del desarrollo web y
                programción en general.
            </p>

            <p class="text-left text-2xl p-2">
                Compartiendo desde pequeños tips para tú día a día, pasando por tutoriales de como realizo algunos procesos
                de interes, hasta compartir problemas y soluciones de mi día a día como desarrollador.
            </p>
        </div>
        <div>
            <h1 class="text-center p-2 mb-5 mt-5">Últimas entradas</h1>
        </div>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-x-6 gap-y-8">
            @foreach ($posts as $post)
                <div class="rounded overflow-hidden shadow-lg">
                    @if ($post->image)
                        <img class="w-full object-cover img-responsive" src="{{ Storage::url($post->image->url) }}
                    @endif" alt="">
                        <div class="px-4 py-2">
                            <div class="font-bold text-xl mb-2">
                                <a href="#">
                                    {{ $post->name }}
                                </a>
                            </div>
                            <p class="text-gray-700 text-base">
                                {!! Str::limit($post->excerpt, 150, '...') !!}
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <a href="{{ route('post', $post->slug) }}">
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-xs font-semibold text-gray-700 mr-2 mb-2">Leer
                                    más</span>
                            </a>
                        </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
