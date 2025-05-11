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
    @include("snipets.navbar")
    <div class="documentos">
        <picture class="documentos__container">
            <img src="{{asset('img/sudmedica_docs.png')}}" alt="" class="documentos__img">
            <div class="documentos__texto">
                <h1 class="documentos__texto__titulo">{{ __('messages.Documentos_Memoria_2024') }}</h1>
                <a href="{{route('memoriaPdf')}}" class="boton__documentos">{{ __('messages.Documentos_Descargar') }}</a>
            </div>
        </picture>
        <picture class="documentos__container">
            <img src="{{asset('img/sudmedica_docs.png')}}" alt="" class="documentos__img">
            <div class="documentos__texto">
                <h1 class="documentos__texto__titulo">{{ __('messages.Documentos_Operaciones_2024') }}</h1>
                <a href="{{route('operacionesxlsx')}}" class="boton__documentos">{{ __('messages.Documentos_Descargar') }}</a>
            </div>
        </picture>
        <picture class="documentos__container">
            <img src="{{asset('img/sudmedica_docs.png')}}" alt="" class="documentos__img">
            <div class="documentos__texto">
                <h1 class="documentos__texto__titulo">{{ __('messages.Documentos_EEFF_Consolidado') }}</h1>
                <a href="{{route('consolidadoPdf')}}" class="boton__documentos">{{ __('messages.Documentos_Descargar') }}</a>
            </div>
        </picture>
        <picture class="documentos__container">
            <img src="{{asset('img/sudmedica_docs.png')}}" alt="" class="documentos__img">
            <div class="documentos__texto">
                <h1 class="documentos__texto__titulo">{{ __('messages.Documentos_Memoria_2023') }}</h1>
                <a href="{{route('memoria2023Pdf')}}" class="boton__documentos">{{ __('messages.Documentos_Descargar') }}</a>
            </div>
        </picture>
    </div>
    @include('snipets.contacto')
    @include('volver_inicio')
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>