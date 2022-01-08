@extends('layouts.app')
@section('content')
<section class="mb-10 mx-auto max-w-screen-xl px-4 xl:px-0">
    <div class="mt-6 mb-4 font-semibold text-left">
        <h2>Articulos relacionados con la etiqueta de <b> {{$tag->name}} </b></h2>
    </div>
    <hr>
    <div class="gap-4 mx-auto max-w-screen-xl ml-10 mr-10">
        @if(isset($posts))
            @foreach ($posts as $post)
                <x-card-post :post="$post" />
            @endforeach
        @else
            <h4>Lo sentimos, pero en este momento no existen entradas relacionadas a esta etiqueta</h4>
        @endif
    </div>
</section>

@endsection