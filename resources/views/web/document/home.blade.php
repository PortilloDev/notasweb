@extends('layouts.app')

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
                @livewire('search-document')
            </div>
            <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">			 				
				<table id="users" class="stripe hover border-b-2" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
					<thead>
                        <tr class="bg-indigo-400 bg-opacity-100 text-white">
                            <th class="text-left">Titulo</th>
                                <th></th>
                                <th class="text-left">Descripción</th>
                                <th class="text-left">Enlace</th>

                        </tr>
					</thead>
					<tbody class="mt-2">
                        @foreach ($documentations as $documentation)
                        <tr class="p-2 border-b-2">
                            <td class="p-2"> {{$documentation->title  }}</td>
                            <td class="p-2"> <img class="w-1/2 h-1/2" src="{{ Storage::url($documentation->image) }}" alt="{{$documentation->title  }}"></td>
                            <td class="p-2"> {!!  $documentation->description  !!}</td>
                            <td class="p-2"> <a href="{{ $documentation->url  }} " target="_blank">{{ __('acceder')  }}</a> </td>
                        </tr>
                        @endforeach
					</tbody>					
                    {{ $documentations->render() }}
				</table>				
			</div>	
        {{--
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
              --}}
        </div>
    </div>
@endsection
