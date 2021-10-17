@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card mb-2 mt-2">
            <div class="card-block pb-0 text-center">
                <p class="text-left text-2xl p-2">
                    Notas Web, desea compartir conocimiento y aportar un granito de arena a la comunidad del desarrollo web
                    y
                    programción en general.
                </p>

                <p class="text-left text-2xl p-2">
                    Compartiendo desde pequeños tips para tú día a día, pasando por tutoriales de como realizo algunos
                    procesos
                    de interes, hasta compartir problemas y soluciones de mi día a día como desarrollador.
                </p>
            </div>
        </div>
        <div class="card mb-2 mt-2">
            <div class="card-block pb-0 text-center">
                <div class="card-block">
                    <h1 class="h2-responsive mb-2 p-4">Último Post</h1>
                </div>
                <div>

                </div>

            </div>
        </div>

        <div>
            <div class="row">
                <div class="col-md-9">
                    <div class="card mb-2">
                        <div class="card-block">
                            <h1 class="h2-responsive mb-2 p-4">Otras entradas y tutoriales</h1>
                            @foreach ($posts as $post)
                                <div class="section mt-1 mx-3 mx-md-5 mx-lg-1" id="sectionArticles">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <a href="{{ route('post', $post->slug) }}">
                                                <div class="view overlay hm-white-slight mb-1">
                                                    <img src="{{ Storage::url($post->image->url) }}"
                                                        class="img-fluid" alt="" title="{{ $post->name }} }}">

                                                    <div class="mask waves-effect waves-light"></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-7">
                                            <p class="teal-text mt-0 small" title="Fecha creación">
                                                {{ $post->created_at->format('d/m/Y') }}
                                            </p>

                                            <h4 class="h4-responsive mb-1 mt-1">
                                                <a href="{{ route('post', $post->slug) }}"
                                                    class="black-text-2 font-bold pb-3">
                                                    {{ $post->name }}
                                                </a>
                                            </h4>
                                            <p class="grey-text-3 font-thin">
                                                {!! Str::limit($post->excerpt, 150, '...') !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-2">
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-2">
                        <div class="card-block">
                            <h2 class="h3-responsive mt-0 mb-2 p-4">Etiquetas</h2>
                            <a href="#" class="chip primary-color-dark white-text p-2"
                                    title="25 artículos con hashtag #laravel">
                                # laravel 
                                <span class="d-none d-lg-inline-block">(25)</span>
                            </a>                                                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
