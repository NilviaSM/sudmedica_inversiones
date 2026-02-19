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

        {{-- =========================
            RESUMEN NCG501 (nuevo)
           ========================= --}}
        <section class="documentos__section" aria-label="RESUMEN NCG501">
            <h1 class="documentos__section__title">{!! __('messages.Resumen') !!}</h1>

            <picture class="documentos__container">
                <img src="{{asset('img/sudmedica_docs.png')}}" alt="" class="documentos__img">
                <div class="documentos__texto">
                    <h1 class="documentos__texto__titulo">{{ __('messages.Resumen_NCG501_Titulo') }}</h1>

                    <div class="documentos__periodos">
                        <div class="documentos__periodo">
                            <p class="documentos__periodo__label">{{ __('messages.Resumen_NCG501_Primer_Semestre_2025') }}</p>
                            <a href="{{ route('resumen_ncg501_primer_semestre_2025') }}" class="boton__documentos">
                                {{ __('messages.Documentos_Descargar') }}
                            </a>
                        </div>

                        <div class="documentos__periodo">
                            <p class="documentos__periodo__label">{{ __('messages.Resumen_NCG501_Segundo_Semestre_2025') }}</p>
                            <a href="{{ route('resumen_ncg501_segundo_semestre_2025') }}" class="boton__documentos">
                                {{ __('messages.Documentos_Descargar') }}
                            </a>
                        </div>
                    </div>

                </div>
            </picture>
        </section>

        {{-- =========================
            DOCUMENTOS (existente)
           ========================= --}}

        <picture class="documentos__container">
            <img src="{{asset('img/sudmedica_docs.png')}}" alt="" class="documentos__img">
            <div class="documentos__texto">
                <h1 class="documentos__texto__titulo">{{ __('messages.reporte_2025') }}</h1>
                <a href="{{route('reporte_2025')}}" class="boton__documentos">{{ __('messages.Documentos_Descargar') }}</a>
            </div>
        </picture>

        <picture class="documentos__container">
            <img src="{{asset('img/sudmedica_docs.png')}}" alt="" class="documentos__img">
            <div class="documentos__texto">
                <h1 class="documentos__texto__titulo">{{ __('messages.tasacion_urbana') }}</h1>
                <a href="{{route('tasacion_urbana')}}" class="boton__documentos">{{ __('messages.Documentos_Descargar') }}</a>
            </div>
        </picture>

        <picture class="documentos__container">
            <img src="{{asset('img/sudmedica_docs.png')}}" alt="" class="documentos__img">
            <div class="documentos__texto">
                <h1 class="documentos__texto__titulo">{{ __('messages.Jea_RMSI') }}</h1>
                <a href="{{route('jearmsi')}}" class="boton__documentos">{{ __('messages.Documentos_Descargar') }}</a>
            </div>
        </picture>

        <picture class="documentos__container">
            <img src="{{asset('img/sudmedica_docs.png')}}" alt="" class="documentos__img">
            <div class="documentos__texto">
                <h1 class="documentos__texto__titulo">{{ __('messages.Jea_RMSI2025') }}</h1>
                <a href="{{route('jearmsi2025')}}" class="boton__documentos">{{ __('messages.Documentos_Descargar') }}</a>
            </div>
        </picture>

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
    <script src="{{asset('js/contacto.js')}}"></script>
</body>
</html>
