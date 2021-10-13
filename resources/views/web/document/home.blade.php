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
            @foreach ($documentations as $documentation )
                <article>
                    <figure>
                        @if($documentation->image)
                        <img src="{{Storage::url($documentation->image)}}" class="rounded-xl w-1/2 h-1/2 object-cover img-responsive">
                        @endif
                    </figure>
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700"> {{$documentation->title}}</h1>
                        <p class="text-base text-gray-500">{!! Str::limit($documentation->description, 150, '...')  !!} <a href="{{$documentation->url}}"  target="_blank" class="pull-right">Leer más</a> </p>
                    </header>
                </article>
            @endforeach
            {{$documentations->render()}}
        </div>
    </div>
@endsection