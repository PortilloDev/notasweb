
@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Registro Logs</h1>
@stop

@section('content')
<div class="card-header">

</div>
<div class="mt-5">
    <div>
        <h4>Registro páginas visitadas</h4>
        <table class="table">
            <tr class="bg-indigo-400 bg-opacity-100 text-black">
                    <th scope="col" class="text-left">Id</th>
                    <th scope="col" class="text-left">Id_Post</th>
                    <th scope="col" class="text-left">Token</th>
                    <th scope="col" class="text-left">Página actual</th>
                    <th scope="col" class="text-left">Página prevía</th>
                    <th scope="col" class="text-left">información adicional</th>
                    <th scope="col" class="text-left">model</th>
                    <th scope="col" class="text-left">paginas</th>
    
            </tr>
            <tbody>
                @forelse ($logs as $log)
                    <tr class="p-2 border-b-2">
                        <td scope="row">  {{$log->id}}   </td>
                        <td scope="row">  {{$log->post_id}}   </td>
                        <td scope="row">  {{$log->_token}}   </td>
                        <td scope="row">  {{$log->url_current}}   </td>
                        <td scope="row">  {{$log->url_previous}}   </td>
                        <td scope="row">  {{$log->info}}   </td>
                        <td scope="row">  {{$log->model}}   </td>
                        <td scope="row">  
                            <select name="" id="">
                                @php
                                    $pages = json_decode($log->pages, true);
                                @endphp
                                @if ($pages != null)
                                    @foreach ($pages as $page )
                                        <option value="">{{$page}}</option>
                                    @endforeach
                                @endif
                            </select>
                             
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{$logs->links()}}
        </div>
    </div>
</div>
<hr>
        
@stop


@section('js')
    <script>  </script>
@stop
