@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="">
            <div>
                <h1>Documentación oficial</h1>
            </div>
            <div>
                <p> Enlaces a la documentación oficial de los distintas librerias o tecnologías que uso. </p>
            </div>
            <hr>
            @foreach ($documentations as $documentation)
                <div class="rounded overflow-hidden shadow-lg mb-4">
                    <article>
                        <figure>
                            @if ($documentation->image)
                                <div class="flex justify-center mt-5">
                                    <img src="{{ Storage::url($documentation->image) }}"
                                        class="rounded-xl w-1/2 h-1/2 object-cover img-responsive">
                                </div>
                            @endif
                        </figure>
                        <header class="mt-4">
                            <h1 class="text-center text-xl text-gray-700 mb-4"> {{ $documentation->title }}</h1>
                            <div class="p-6">
                                <p class="text-base text-gray-500">{!! $documentation->description !!} <a href="{{ $documentation->url }}"
                                target="_blank" class="pull-right">Leer más</a> </p>
                            </div>
                        </header>
                    </article>
                </div>
            @endforeach
            {{ $documentations->render() }}
        </div>
    </div>
@endsection
