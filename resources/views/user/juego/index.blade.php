@include('layouts/app')

<div class="register">

    <html>
    <head>
        <title>imge</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <!-- Save for Web Slices (imge.png) -->
    <table id="Tabla_01" width="1024" height="768" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <img  class="img-responsive" src="{{ asset('images/imge_01.png') }}" width="1024" height="215" alt=""></td>
        </tr>
        <tr>
            <td>
                <h3 align="center">{{Auth::user()->name . " bienvenid@ al juego de TCH (Toma el Control de tus Habitos)"}}</h3>
                <br>
                <h3 align="center" id="color"  >Presiona el botón ROJO para continuar al JUEGO</h3>
            </td>
        </tr>
        <tr>
            <td>
                <img  class="img-responsive" src="{{ asset('images/imge_03.png') }}" width="1024" height="434" alt=""></td>
        </tr>
        <tr>
            <td>
                <div class="alineacion">
                    <a href="{{route('user.juego.start', Auth::user()->id)}}"  type="button" class="btn btn-danger btn-circle btn-xl"><h3>Start</h3></a>

                </div>
            </td>
        </tr>
    </table>
    <!-- End Save for Web Slices -->
    </body>
    </html>

</div>