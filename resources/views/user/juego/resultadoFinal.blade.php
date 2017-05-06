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
            <tr>
                <th> Recomendación 1</th>
                <th> Recomendación 2</th>
                <th> Recomendación 3</th>
                <th> Recomendación 4</th>
                <th> Recomendación 5</th>
                <th> Recomendación 6</th>
                <th> Recomendación 7</th>
                <th> Recomendación 8</th>
                <th> Recomendación 9</th>

            </tr>
            </thead>
            <tbody>

            @foreach($recomendaciones as $recomendaciones)

                    <th> {{ $recomendaciones }} </th>
                    <th> {{ $recomendaciones }} </th>
                    <th> {{ $recomendaciones }} </th>
                    <th> {{ $recomendaciones }} </th>
                    <th> {{ $recomendaciones }} </th>
                    <th> {{ $recomendaciones }} </th>
                    <th> {{ $recomendaciones }} </th>
                    <th> {{ $recomendaciones}} </th>
                    <th> {{ $recomendaciones }} </th>



            @endforeach


            </tbody>
        </table>



    </div>
</div>

</body>
</html>