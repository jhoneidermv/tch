@include('layouts/app')
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Documento sin título</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

</head>

<body>
<div align="center">

    <div  align="center">
        <h3>TCH (Toma el Control de tus Habitos)</h3>
    </div>

    <div  align="center">
        <video id="mi-video"   autoplay>
            <source src="{{ asset('video/9.mp4') }}" type="video/mp4"  >
        </video>
    </div>

    <div id="bn"  style= "display:none; align:center "  >
        <table cellpadding="3" cellspacing="3">
            <tr>
                <td colspan="3" >
                    <a class="myButton btn-block" href="{{route('user.juego.start3')}}" align="center" type="button" ><h3>Café</h3></a></td>
                    <h3>&nbsp;</h3></td>
                <td colspan="3" >
                    <a class="myButton btn-block" href="{{route('user.juego.start31')}}" align="center" type="button" ><h3>Jugo de fruta natural</h3></a></td>
            </tr>
        </table>


    </div>

</div>

<script type='text/javascript'>
    document.getElementById('mi-video').addEventListener('ended',myHandler,false);
    //document.getElementById('bn').style.visibility = "hidden";
    function myHandler(e) {

        $("#bn").fadeIn(3000);

        $document.getElementById("bn").style.position = "absolute";
        $document.getElementById("bn").style.left = '200px';
        $document.getElementById("bn").style.top = '20px';

    }
</script>
</body>
</html>