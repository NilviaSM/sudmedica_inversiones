<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
</head>
<body>
    <h1>Nueva solicitud recibida!</h1>
    <p>Correo electronico enviado desde la pagina principal</p>
    <p><strong>Nombre:</strong>{{$data['nombre']}}</p>
    <p><strong>Telefono:</strong>{{$data['codigo_pais']}} {{$data['telefono']}}</p>
    <p><strong>Correo:</strong>{{$data['email']}}</p>
    <p><strong>Mensaje:</strong>{{$data['mensaje']}}</p>
</body>
</html>