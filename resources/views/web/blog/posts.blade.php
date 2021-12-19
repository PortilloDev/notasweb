@inject('text_layout', 'App\Helpers\LayoutHelper' )
@extends('layouts.app')
@php
$texts = $text_layout::getHeaderText();
@endphp

@section('content')
    <div class="container-fluid">
        <div class="card mb-2 mt-2 shadow-lg">
            <div class="card-block pb-0 text-left shadow-lg p-4">
                <p class="text-left text-2xl p-2">
                    {!! $texts->excerpt !!}
                </p>
            </div>
            <div class="card-block pb-0 text-left shadow-lg p-4">
                <p class="text-left text-2xl p-2">
                    {!! $texts->description !!}
                </p>
            </div>
        </div>
        @if(isset($last_post))
            <div class="card mb-2 mt-2 shadow-lg">
                <div class="card-block shadow-lg p-4">
                    <h1 class="h2-responsive mb-2 p-2"> Entrada reciente</h1>
                    <x-card-post :post="$last_post" />
                </div>
            </div>
        @endif
        <div>
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card mb-2 shadow-lg">
                        <div class="card-block shadow-lg p-4">
                            <h1 class="h2-responsive mb-2 p-2"> Otros Articulos</h1>
                            <div class="flex flex-col justify-center h-screen">
                            @if(isset($posts))
                                @foreach ($posts as $post)
                                    <x-card-post :post="$post" />
                                    <hr class="mb-2">
                                @endforeach
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
