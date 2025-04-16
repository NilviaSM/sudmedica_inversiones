<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3a008cc3c3.js" crossorigin="anonymous"></script>
    <title>Sudmedica</title>
</head>
<body>
    @include('snipets.navbar')
    <div class="container">
        <h2>{{$noticias->titulo}}</h2>
        <div class="noticias">
            <div class="noticias-info">
                {{$noticias->contenido}}
            </div>
            <picture width="100px", height="150px">
                <img src="" alt="imagen-noticia" width="100%">
            </picture>
        </div>
    </div>
    
    @include('snipets.contacto')
</body>
</html>