<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title> @yield('title','default') | Panel de Administracion </title>
        <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/plugins.css')}}">
    </head>
    <body>
        @include('layouts.nav')
        <section>

            @yield('content')
        </section>
        <script src="{{asset('plugins.js.jquery-3.2.0.min.js')}}"></script>
        <script src="{{asset('plugins.bootstrap.js.bootstrap.js')}}"></script>


    </body>




</html>