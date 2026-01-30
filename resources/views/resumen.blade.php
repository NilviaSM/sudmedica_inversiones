<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/contacto.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3a008cc3c3.js" crossorigin="anonymous"></script>
    <title>Sudmédica</title>
</head>
<body>
    @include("snipets.navbar")
    <div class="documentos">
        <picture class="documentos__container">
            <img src="{{asset('img/sudmedica_docs2.png')}}" alt="" class="documentos__img">
            <div class="resumen__texto">
                <div class="resumen_textos">
                    <h1 class="resumen__texto__uno">{{ __('messages.Primer_semestre_2025') }}</h1>
                    <h2 class="resumen__texto__dos">{{ __('messages.Resumen_transacciones') }}</h2>
                </div>
                <a href="{{route('Reporte_Partes_Relacionadas')}}" class="boton__resumen">{{ __('messages.Documentos_Descargar') }}</a>
            </div>
        </picture>
        
    </div>
    @include('snipets.contacto')
    @include('volver_inicio')
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/contacto.js')}}"></script>
</body>
</html>