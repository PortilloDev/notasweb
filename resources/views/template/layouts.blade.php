<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv="Expires:Sat, 26 Jul 1997 05:00:00 GMT" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- nombre en la barra del navegador -->
    <title>@yield('titulo','La Pizarra')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <!-- DataTables-->
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- css mensajes -->
    <link rel="s tylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- formato inicio -->
    <link href="{{ asset('assets/css/general/inicio.css') }}" rel="stylesheet" type="text/css" />
    @yield('styles')
    <!-- marcando este campo se puede personalizar el css de cada página por separado, o incluir algún
         pluggin especifico -->

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>




</head>

<body id="body" class="hold-transition skin-blue layout-boxed sidebar-mini">

    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Inicio Header -->
        @include("template/header")
        <!-- Fin header -->
        <!-- Inicio Asside -->
        @include("")
        <!-- Fin Asside -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content">
                @yield('contenido')
            </section>
        </div>
        <!-- incio footer -->
        @include("template/footer")
        <!-- fin footer-->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
    </div>
    <!-- jQuery 3 -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    @yield('scriptsPlugins')

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- llamada al scripts de mensaje confirmando la eliminación -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- Select2 -->
    @yield('scripts')
</body>

</html>
