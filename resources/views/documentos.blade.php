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

<style>
    .documentos__container--dropdown {
        overflow: visible;
    }

    .boton-dropdown {
        width: 100%;
        border: none;
        cursor: pointer;
    }

    .dropdown-arrow {
        display: inline-block;
        margin-left: 8px;
        font-size: 14px;
        transition: transform 0.2s ease;
    }

    .boton-dropdown.activo .dropdown-arrow {
        transform: rotate(180deg);
    }

    .dropdown-candidatos {
        display: none;
        width: 100%;
        margin-top: 8px;
        background: rgba(255, 255, 255, 0.96);
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.25);
        position: relative;
        z-index: 10;
    }

    .dropdown-candidatos.activo {
        display: block;
    }

    .dropdown-candidatos a {
        display: block;
        padding: 12px 16px;
        color: #004080;
        background: #ffffff;
        text-decoration: none;
        font-weight: 700;
        border-bottom: 1px solid rgba(0, 64, 128, 0.15);
    }

    .dropdown-candidatos a:last-child {
        border-bottom: none;
    }

    .dropdown-candidatos a:hover {
        background: #8cc63f;
        color: #003b73;
    }
</style>

<body>
    @include("snipets.navbar")

    <div class="documentos">

           {{-- Candidatos Directorio --}}
        <picture class="documentos__container documentos__container--dropdown">
            <img src="{{asset('img/sudmedica_docs.png')}}" alt="Candidatos Directorio" class="documentos__img">

            <div class="documentos__texto">
                <h1 class="documentos__texto__titulo">Candidatos Directorio</h1>

                <button type="button" class="boton__documentos boton-dropdown" id="btnPostulantesDirectorio">
                    Postulantes Directorio
                    <span class="dropdown-arrow">▼</span>
                </button>

                <div class="dropdown-candidatos" id="dropdownPostulantesDirectorio">
                    <a href="{{ asset('documentos/candidatos-directorio/CV_RAUL_MEDINA.pdf') }}" target="_blank">
                        CV - Raúl Medina
                    </a>

                    <a href="{{ asset('documentos/candidatos-directorio/CV_FERNANDO_ARAVENA.pdf') }}" target="_blank">
                        CV - Fernando Aravena
                    </a>

                    <a href="{{ asset('documentos/candidatos-directorio/CV_GERSON_GARCES.pdf') }}" target="_blank">
                        CV - Gerson Garcés
                    </a>

                    <a href="{{ asset('documentos/candidatos-directorio/CV_ANGEL_TRUJILLO.pdf') }}" target="_blank">
                        CV - Ángel Trujillo
                    </a>

                    <a href="{{ asset('documentos/candidatos-directorio/CV_ALVARO_BONICH.pdf') }}" target="_blank">
                        CV - Álvaro Bonich
                    </a>

                    <a href="{{ asset('documentos/candidatos-directorio/CV_FERNANDO_AGUILAR.pdf') }}" target="_blank">
                        CV - Fernando Aguilar
                    </a>
                </div>
            </div>
        </picture>
        {{-- Estados Financieros Anuales --}}
        <picture class="documentos__container">
            <img src="{{asset('img/sudmedica_docs.png')}}" alt="" class="documentos__img">
            <div class="documentos__texto">
                <h1 class="documentos__texto__titulo">{{ __('messages.EEFF_Consolidado_Sudmedica_2025-2024') }}</h1>
                <a href="{{route('consolidadoPdf2025-2024')}}" class="boton__documentos">{{ __('messages.Documentos_Descargar') }}</a>
            </div>
        </picture>

        <picture class="documentos__container">
            <img src="{{asset('img/sudmedica_docs.png')}}" alt="" class="documentos__img">
            <div class="documentos__texto">
                <h1 class="documentos__texto__titulo">{{ __('messages.Documentos_EEFF_Consolidado') }}</h1>
                <a href="{{route('consolidadoPdf')}}" class="boton__documentos">{{ __('messages.Documentos_Descargar') }}</a>
            </div>
        </picture>

        {{-- Memorias Anuales --}}
        <picture class="documentos__container">
            <img src="{{asset('img/sudmedica_docs.png')}}" alt="" class="documentos__img">
            <div class="documentos__texto">
                <h1 class="documentos__texto__titulo">{{ __('messages.Documentos_Memoria_2025') }}</h1>
                <a href="{{route('memoria2025Pdf')}}" class="boton__documentos">{{ __('messages.Documentos_Descargar') }}</a>
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
                <h1 class="documentos__texto__titulo">{{ __('messages.Documentos_Memoria_2023') }}</h1>
                <a href="{{route('memoria2023Pdf')}}" class="boton__documentos">{{ __('messages.Documentos_Descargar') }}</a>
            </div>
        </picture>

        {{-- Actas --}}
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

 

        {{-- Otros --}}
        <picture class="documentos__container">
            <img src="{{asset('img/sudmedica_docs.png')}}" alt="" class="documentos__img">
            <div class="documentos__texto">
                <h1 class="documentos__texto__titulo">{{ __('messages.tasacion_urbana') }}</h1>
                <a href="{{route('tasacion_urbana')}}" class="boton__documentos">{{ __('messages.Documentos_Descargar') }}</a>
            </div>
        </picture>

        <!-- 
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
                <h1 class="documentos__texto__titulo">{{ __('messages.Documentos_Operaciones_2024') }}</h1>
                <a href="{{route('operacionesxlsx')}}" class="boton__documentos">{{ __('messages.Documentos_Descargar') }}</a>
            </div>
        </picture> 
        -->

    </div>

    @include('snipets.contacto')
    @include('volver_inicio')

    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/contacto.js')}}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const boton = document.getElementById('btnPostulantesDirectorio');
            const dropdown = document.getElementById('dropdownPostulantesDirectorio');

            if (!boton || !dropdown) return;

            boton.addEventListener('click', function () {
                dropdown.classList.toggle('activo');
                boton.classList.toggle('activo');
            });
        });
    </script>
</body>
</html>