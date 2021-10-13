@extends('layouts.app')

@section('content')
    <div class="container">

        <div>
            <p class="text-left text-2xl p-2"> 
                Notas Web, desea compartir conocimiento y aportar un granito de arena a la comunidad del desarrollo web y programción en general. 
            </p>

            <p class="text-left text-2xl p-2"> 
                Compartiendo desde pequeños tips para tú día a día, pasando por tutoriales de como realizo algunos procesos de interes, hasta compartir problemas y soluciones de mi día a día como desarrollador. 
            </p>
        </div>
        <div>
            <h1 class="text-center p-2 mb-5 mt-5">Últimas entradas</h1>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-x-6 gap-y-8">
            @foreach ($posts as $post )
            <article>
                <figure>
                    @if($post->image)
                      <img src="{{Storage::url($post->image->url)}}" class="rounded-xl h-36 w-full object-cover img-responsive">
                    @endif
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700"> {{$post->name}}</h1>
                    <p class="text-sm text-gray-500">{!! Str::limit($post->excerpt, 150, '...')  !!} <a href="{{route('post', $post->slug)}}" class="pull-right">Leer más</a> </p>
                </header>
            </article>
            @endforeach
        </div>
    </div>
@endsection