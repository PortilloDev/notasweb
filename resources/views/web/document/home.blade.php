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
                <div class="card mb-2 mt-2 shadow-lg">
                    <div class="card-block shadow-lg p-4">
                        <h1 class="h2-responsive mb-2 p-2"> {{ $documentation->title }} </h1>
                        <div class="section mt-1 mx-3 mx-md-5 mx-lg-1 shadow-lg" id="sectionArticles">
                            <div class="row">
                                <div class="col-md-5">
                                        <div class="view overlay hm-white-slight mb-1">
                                            <img src="{{ Storage::url($documentation->image) }}"
                                                class="img-fluid" alt="" title="{{ $documentation->title }} }}">
                                            <div class="mask waves-effect waves-light"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <h4 class="h4-responsive mb-1 mt-1">
                                        <p class="text-base text-gray-500 p-4">{!! $documentation->description !!} <a href="{{ $documentation->url }}"
                                            target="_blank" class="pull-right">Leer más</a> </p>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $documentations->render() }}
        </div>
    </div>
@endsection
