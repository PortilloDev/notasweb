@inject('text_layout', 'App\Helpers\LayoutHelper' )

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <title>@yield('meta_title') - {{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Blog sobre desarrollo web y programación">
    <meta name="meywords" content="Blog sobre desarrollo web y programación">

    <meta property="og:type" content="website" />
	<meta property="og:title" content="  {{ config('app.name') }}  " />
	<meta property="og:description" content="  Notasweb - Web sobre contenido de desarrollo web y programación " />
	<meta property="og:url" content="https://notasweb.me" />
	<meta property="og:site_name"  content="  {{ config('app.name') }}  " />

	{{-- <meta property="og:image" content="{{ asset('storage/blog/home.jpg') }}" /> --}}
    <meta property="og:image" content=@yield('meta_image') />
    <title>{{ config('app.name', 'NotasWeb') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    @livewireStyles
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <!-- include libraries(jQuery, bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-S0PTWNS3TM"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-S0PTWNS3TM');
    </script>

</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <div id="app">
            @if (isset($post))
                @if (!isset($posts) && (!isset($isTag) && !isset($isCategory)) )
                    @php
                      $post = request()->session()->get('post'); 
                    @endphp
                    {{ Breadcrumbs::render('post', $post) }}
                @elseif(isset($isTag))
                    {{ Breadcrumbs::render('tag', $tag) }}
                @elseif(isset($isCategory))
                    {{ Breadcrumbs::render('category', $category) }}
                @else
                    {{ Breadcrumbs::render() }}
                @endif
            @else
                {{ Breadcrumbs::render() }}
            @endif
            @php
                $texts = $text_layout::getHeaderText();
            @endphp
               
            @if (session('info'))
                <div class="top-auto container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-2 text-center mt-10">
                            <div class="alert alert-success text-center">
                                {{ session('info') }}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="">
                @yield('content')
            </div>
        </div>

        @include('template.footer')
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')
        @stack('modals')

        @livewireScripts
    </div>
</body>

</html>
