@inject('text_layout', 'App\Helpers\LayoutHelper' )
@extends('layouts.app')
@php
    $url = Request::url();
    $texts = $text_layout::getHeaderText();
    $url_image = Storage::url($post->image->url);

    $otherPost = [];
    $index = 0;

    foreach ($similar_posts as $nextPost) {
        $otherPost[$index++] = $nextPost;
    }

@endphp

@section('meta_title', $post->name)
@section('meta_image', asset($url_image))

@section('content')
    <section class="container mx-auto p-2">
        <div class="content-center">
            @livewire('search')
        </div>

    </section>

    <body class="bg-white text-black antialiased dark:bg-gray-900 dark:text-white" style="zoom: 1; overflow: auto;">
        <div id="__next" data-reactroot="">
            <div class="mx-auto max-w-3xl px-4 sm:px-6 xl:max-w-5xl xl:px-0">
                <div class="flex flex-col justify-between">
                    <main class="mb-auto">
                        <div class="mx-auto max-w-3xl px-4 sm:px-6 xl:max-w-5xl xl:px-0">
                           <article>
                                <div class="xl:divide-y xl:divide-gray-200 xl:dark:divide-gray-700">
                                    <header class="pt-6 xl:pb-6">
                                        <div class="space-y-1 text-center">
                                            <dl class="space-y-10">
                                                <div>
                                                    <dt class="sr-only">Published on</dt>
                                                    <dd
                                                        class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                                                        <time datetime="2021-05-02T00:00:00.000Z">{{$post->created_at->format('d M   Y')}}</time>
                                                    </dd>
                                                </div>
                                            </dl>
                                            <div>
                                                <h1
                                                    class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-5xl md:leading-14">
                                                    {{$post->name}}</h1>

                                            </div>
                                        </div>
                                    </header>
                                    <div class="divide-y divide-gray-200 pb-8 dark:divide-gray-700 xl:grid xl:grid-cols-4 xl:gap-x-6 xl:divide-y-0"
                                        style="grid-template-rows: auto 1fr;">
                                        <dl
                                            class="pt-6xl:border-b xl:border-gray-200 xl:pt-11 xl:dark:border-gray-700">
                                            <dt class="sr-only">Authors</dt>
                                            <dd>
                                                <ul
                                                    class="flex justify-center space-x-8 sm:space-x-12 xl:block xl:space-x-0 xl:space-y-8">
                                                    <li class="flex items-center space-x-2">
                                                        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                                                <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2738%27%20height=%2738%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                                            </span>
                                                        <img alt="avatar" src="{{ asset('storage/blog/avatar.png') }}" decoding="async" data-nimg="intrinsic" class="h-10 w-10 rounded-full" srcset="{{ asset('storage/blog/avatar.png') }}" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                                        <noscript>
                                                            </noscript>
                                                        </span>


                                                        <dl class="whitespace-nowrap text-sm font-medium leading-5">
                                                            <dt class="sr-only">Name</dt>
                                                            <dd class="text-gray-900 dark:text-gray-100">{{ $post->user->name }}</dd>
                                                            <dt class="sr-only">Twitter</dt>
                                                            <dd><a target="_blank" rel="noopener noreferrer"
                                                                    href="https://mobile.twitter.com/portillo_dev"
                                                                    class="text-blue-500 hover:text-blue-700 dark:hover:text-primary-400">@portillo_dev</a>
                                                            </dd>
                                                        </dl>
                                                    </li>
                                                </ul>
                                            </dd>
                                        </dl>
                                        <div
                                            class="divide-y divide-gray-200 dark:divide-gray-700 xl:col-span-3 xl:row-span-2 xl:pb-0">
                                            <div class="prose max-w-none pt-10 pb-8 dark:prose-dark">
                                                <p class="pb-6"> {!! $post->excerpt !!}</p>
                                                <p class="pb-6"> {!! $post->body !!}</p>
                                            </div>
                                            <div class="pt-6 pb-6 text-sm text-gray-700 dark:text-gray-300 text-center">
                                                  <i class="fas fa-eye"></i> <span class="text-base"> {{ $post->visits }} </span>
                                            </div>

                                        </div>
                                        <footer>
                                            <div
                                                class="divide-gray-200 text-sm font-medium leading-5 dark:divide-gray-700 xl:col-start-1 xl:row-start-2 xl:divide-y">
                                                <div class="py-4 xl:py-8">
                                                    <h2
                                                        class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">
                                                        Tags</h2>
                                                        <div class="flex flex-wrap">
                                                            <i class="fas fa-tags"></i>
                                                            @foreach ($post->tags as $tag)
                                                                <span
                                                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                                                                    <a href="{{ route('tag', $tag->slug) }}">
                                                                        #{{ $tag->name }}
                                                                    </a>
                                                                </span>
                                                            @endforeach
                                                        </div>
                                                </div>
                                                <div class="py-4 xl:py-8">
                                                    <h2
                                                        class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">
                                                        COMPARTIR</h2>
                                                        <div class="flex flex-wrap">
                                                            {!! $post->getShare($url, $post->name) !!}
                                                        </div>
                                                </div>
                                                <div class="flex justify-between py-4 xl:block xl:space-y-8 xl:py-8">
                                                    <div>
                                                        <h2
                                                            class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">
                                                            Aritculo anterior</h2>
                                                        <div
                                                            class="text-primary-500 hover:text-primary-700 dark:hover:text-primary-400">
                                                            <a  href="{{ route('post', $otherPost[0]->slug) }}">{{$otherPost[0]->name}}</a></div>
                                                    </div>
                                                    <div>
                                                        <h2
                                                            class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">
                                                            Siguiente Articulo</h2>
                                                        <div
                                                            class="text-primary-500 hover:text-primary-700 dark:hover:text-primary-400">
                                                            <a href="{{ route('post', $otherPost[1]->slug) }}">{{$otherPost[1]->name}}</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-4 xl:pt-8"><a
                                                    class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                                    href="{{route('blog')}}">← Volver al blog</a></div>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </main>

                </div>
            </div>
        </div>

    </body>

@endsection
