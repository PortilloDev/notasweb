@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h1>Lista de documentos</h1>
            @foreach ($documentations as $documentation )
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$documentation->title}}

                </div>
                <div class="panel-body">

                    @if($documentation->image)
                      <img src="{{Storage::url($documentation->image)}}" class="img-responsive">
                    @endif
                    {!! $documentation->description !!}
                    <a href="{{ $documentation->url }}" target="_blank" class="pull-right">Leer más</a>
                </div>
            </div>

            @endforeach
            {{$documentations->render()}}
        </div>
    </div>
@endsection