@extends('layouts.app')
@section('meta_title', 'Documentación')
@section('content')
    <div class="container">
        <div class="">
            <div>
                <h1 class="text-3xl font-extrabold leading-9 tracking-tight text-cyan-500 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14">
                    Documentación </h1>
            </div>
            <div>
                <p> Enlaces a la documentación oficial de frameworks y lenguajes de programación. </p>
            </div>
            <hr>
            <div class="mb-2">
                @livewire('search-documents', ['documentations' => $documentations])
            </div>
        </div>
    </div>
@endsection
