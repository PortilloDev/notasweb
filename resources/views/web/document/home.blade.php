@extends('layouts.app')
@section('meta_title', 'Notasweb: Documentación')
@section('content')
    <div class="container">
        <div class="">
            <div>
                <h1>Documentación oficial</h1>
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
