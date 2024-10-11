<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista de la BD</title>
</head>
<body>
    <section>
        <h3>Información desde la base de datos.</h3>
        {{-- IMPRIME EL VALOR DESDE LA BD --}}
        <p>{{$client->email}}</p>
    </section>
</body>
</html>
