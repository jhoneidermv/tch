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
        <h3>...RESULTADOS...</h3>
        <br>
        <br>
        <br>

        <table class="table table-responsive">
            <thead>

            </thead>
            <tbody>

            @foreach($recomendaciones as $recomendaciones)

                <tr>
                    <th><h1><font color="red" size=4>Recomendación:</font></h1></th>
                </tr>
                    <th> {{ $recomendaciones }} </th>

            @endforeach
            </tbody>
        </table>

        //Desde aca puede colocar las rutinas quemadas

    </div>
</div>

</body>
</html>