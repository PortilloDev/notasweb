@inject('text_layout', 'App\Helpers\LayoutHelper' )
@extends('layouts.app')
@php
$texts = $text_layout::getHeaderText();
@endphp

@section('content')
    <div class="container-fluid">
        <div class="">
            <div class="card-block pb-0 text-left  p-2" style="margin-bottom: -30px">
                <p class="text-left text-2xl p-2">
                    {!! $texts->excerpt !!}
                </p>
            </div>
            <div class="pb-0 text-left p-2">
                <p class="text-left text-2xl p-2">
                    {!! $texts->description !!}
                </p>
            </div>
        </div>

        <hr>
        <section class="mb-10 mx-auto max-w-screen-xl px-4 xl:px-0">
                <div class="mt-6 mb-4 font-semibold text-center">
                    <h3>Articulos en el blog</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 mx-auto max-w-screen-xl ">
                    @if(isset($posts))
                        @foreach ($posts as $post)
                            <x-card-post :post="$post" />
                        @endforeach
                        @endif
                </div>
            </section>
            <div class="mt-4">
                {{ $posts->links() }}
            </div>
    </div>
@endsection
