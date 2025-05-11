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
    <picture class="imagen__container">
        <img src="{{asset('img/sudmedica01.png')}}" alt="" class="imagen">
    </picture>
        <div class="directorio">
            <p class="historia container">{!! __('messages.Nosotros_Historia') !!}</p>
            <h1 class="directorio__titulo titulo container">{{ __('messages.Nosotros_Directorio') }}</h1>
            <div class="directorio__cards cards">
            <div class="directorio__card card">
                    <img class="directorio__card__img card__img" src="{{asset('img/Ángel_Trujillo_López_Vicepresidente 1.png')}}" alt="">
                    <div class="card__info">
                        <h5 class="card__name">Ángel Trujillo López</h5>
                        <h5 class="card__ocupation angel_ocupation">{{ __('messages.Directorio_Card_Angel_Ocupation') }}</h5>
                        <p class="card__description angel_description">{{ __('messages.Directorio_Card_Angel_Description') }}</p>
                        <a class="card__button" href="#"
                            data-name="Ángel Trujillo López" 
                            data-ocupation="{{ __('messages.Directorio_Card_Angel_Ocupation') }}" 
                            data-description="{{ __('messages.Directorio_Card_Angel_Description') }}">{{ __('messages.Directorio_Card_VerMas') }}</a>
                   </div>
                </div>
                <div class="directorio__card card">
                    <img class="directorio__card__img card__img" src="{{asset('img/Freddy_Hurtado_Presidente 1.png')}}" alt="">
                    <div class="card__info">
                        <h5 class="card__name">Freddy Hurtado</h5>
                        <h5 class="card__ocupation freddy_ocupation">{{ __('messages.Directorio_Card_Freddy_Ocupation') }}</h5>
                        <p class="card__description freddy_description">{{ __('messages.Directorio_Card_Freddy_Description') }}</p>
                        <a class="card__button" href="#"
                            data-name="Freddy Hurtado" 
                            data-ocupation="{{ __('messages.Directorio_Card_Freddy_Ocupation') }}" 
                            data-description="{{ __('messages.Directorio_Card_Freddy_Description') }}">{{ __('messages.Directorio_Card_VerMas') }}</a>
                    </div>
                </div>
                
                <div class="directorio__card card">
                    <img class="directorio__card__img card__img" src="{{asset('img/maria_soledad_Lopez_Secretaria 1.png')}}" alt="">
                    <div class="card__info">
                        <h5 class="card__name">María Soledad López Tapia</h5>
                        <h5 class="card__ocupation maria_ocupation">{{ __('messages.Directorio_Card_Maria_Ocupation') }}</h5>
                        <p class="card__description maria_description">{{ __('messages.Directorio_Card_Maria_Description') }}</p>
                        <a class="card__button" href="#"
                            data-name="María Soledad López Tapia" 
                            data-ocupation="{{ __('messages.Directorio_Card_Maria_Ocupation') }}" 
                            data-description="{{ __('messages.Directorio_Card_Maria_Description') }}">{{ __('messages.Directorio_Card_VerMas') }}</a>
                    </div>
                </div>
                <div class="directorio__card card">
                    <img class="directorio__card__img card__img" src="{{asset('img/Felipe_Oelckers_Aljaro_Director 1.png')}}" alt="">
                    <div class="card__info">
                        <h5 class="card__name">Felipe Oelckers Aljaro</h5>
                        <h5 class="card__ocupation felipe_ocupation">{{ __('messages.Directorio_Card_Felipe_Ocupation') }}</h5>
                        <p class="card__description felipe_description">{{ __('messages.Directorio_Card_Felipe_Description') }}</p>
                        <a class="card__button" href="#"
                            data-name="Felipe Oelckers Aljaro" 
                            data-ocupation="{{ __('messages.Directorio_Card_Felipe_Ocupation') }}" 
                            data-description="{{ __('messages.Directorio_Card_Felipe_Description') }}">{{ __('messages.Directorio_Card_VerMas') }}</a>
                    </div>
                </div>
                <div class="directorio__card card">
                    <img class="directorio__card__img card__img" src="{{asset('img/Fernando_Marcelo_Aguiar_Rosales_Director 1.png')}}" alt="">
                    <div class="card__info">
                        <h5 class="card__name">Fernando Marcelo Aguiar Rosales</h5>
                        <h5 class="card__ocupation fernando_ocupation">{{ __('messages.Directorio_Card_Fernando_Ocupation') }}</h5>
                        <p class="card__description fernando_description">{{ __('messages.Directorio_Card_Fernando_Description') }}</p>
                        <a class="card__button" href="#"
                            data-name="Fernando Marcelo Aguiar Rosales" 
                            data-ocupation="{{ __('messages.Directorio_Card_Fernando_Ocupation') }}" 
                            data-description="{{ __('messages.Directorio_Card_Fernando_Description') }}">{{ __('messages.Directorio_Card_VerMas') }}</a>
                    </div>
                </div>
                <div id="popup" class="popup">
                    <div class="popup__content">
                        <span class="popup__close" aria-label="Cerrar">&times;</span>
                        <div class="popup__info">
                            <img id="popup-img" class="popup__img" src="" alt="Imagen del directorio">
                            <div class="popup__info_text">
                                <h2 class="popup__title" id="popup-name">Nombre</h2>
                                <h4 class="popup__ocupation" id="popup-ocupation">Ocupación</h4>
                                <p class="popup__description" id="popup-description">Descripción</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="gerencia">
            <h1 class="gerencia__titulo titulo">Gerencia</h1>
            <div class="gerencia__cards cards">
                <div class="gerencia__card card">
                    <img class="gerencia__card__img card__img" src="{{asset('img/man.jpg')}}" alt="">
                    <div class="card__info">
                        <h5 class="gerencia__card__name card__name">César Mendoza - CEO</h5>
                        <h5 class="gerencia__card__ocupation card__ocupation">Ingeniero Comercial</h5>
                        <p class="gerencia__card__description card__description">Creador modelo de negocios SUDMedica</p>
                    </div>
                </div>
                <div class="gerencia__card card">
                    <img class="gerencia__card__img card__img" src="{{asset('img/woman02.jpg')}}" alt="">
                    <div class="card__info">
                        <h5 class="gerencia__card__name card__name">Mauricio Cortés GERENTE DE OPERACIONES</h5>
                        <h5 class="gerencia__card__ocupation card__ocupation">Director Médico</h5>
                        <p class="gerencia__card__description card__description">Médico de la Universidad de Chile, Especialidad en Cirugía en la 
                            Universidad de Valparaíso con subespecialidad Cirugía Vascular, 
                            Diplomado Gestión Instituciones de Salud, Universidad de Los Andes; 
                            fue Jefe de Servicio de Cirugía Hospital San Juan de Dios, Los Andes, 
                            Gerente General Fundadores S.A.C., entre
                        </p>
                    </div>
                </div>
                <div class="gerencia__card card">
                    <img class="gerencia__card__img card__img" src="{{asset('img/man.jpg')}}" alt="">
                    <div class="card__info">
                        <h5 class="gerencia__card__name card__name">lan Couso</h5>
                        <h5 class="gerencia__card__ocupation card__ocupation">GERENTE GENERAL CONSTRUCTORA RED MEDICA</h5>
                        <p class="gerencia__card__description card__description">Ingeniero Civil Industrial PUC, MBA - Masterof Business Administration, 
                            fue Gerente General BBVA Administradora General de Fondos S.A. 
                            Gerente Comercial Shopping Cencosud (Chile), Gerente División Hoteles 
                            para Sudamérica, Cencosud Shopping Centers S.A.; Gerente General 
                            Inmobiliaria Suecia, Director Inmobiliario empresas Manfred Paulmann, entre entre otros.
                        </p>
                    </div>
                </div>
            <div class="gerencia__card card">
                <img class="gerencia__card__img card__img" src="{{asset('img/woman01.jpg')}}" alt="">
                <div class="card__info">
                    <h5 class="gerencia__card__name card__name">Pablo Ribbeck</h5>
                    <h5 class="gerencia__card__ocupation card__ocupation">GERENTE DE FINANZAS</h5>
                    <p class="gerencia__card__description card__description">Director Médico
                        fue Gerente General BBVA Administradora General de Fondos S.A. 
                        Gerente Comercial Shopping Cencosud (Chile), Gerente División Hoteles 
                        para Sudamérica, Cencosud Shopping Centers S.A.; Gerente General 
                        Inmobiliaria Suecia, Director Inmobiliario empresas Manfred Paulmann, entre entre otros.
                    </p>
                </div>
            </div>
        </div> -->
        <div class="cards__details container" style="margin-top:2rem;">
            <p>{!! __('messages.Nosotros_Equipo') !!}</p>
        </div>
        <div class="carrusel__container">
            <img src="{{asset('img/edificio0102.png')}}" alt="" class="imagen">
        </div>
        <div class="details__edificio container">
            <ul>
                @foreach(__('messages.Nosotros_Edificio_Detalles') as $detalle)
                    <li>{{ $detalle }}</li>
                @endforeach
            </ul>
        </div>
        <div class="details__ubicacion container">
            <p>{!! __('messages.Nosotros_Edificio') !!}</p>
        </div>
</div>
    @include("snipets.contacto")
    @include('volver_inicio')
    <style>
        /* Estilos del popup */
        .popup {
            display: none; /* Oculto por defecto */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Fondo semitransparente */
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .popup__content {
            position: relative;
            font-family: lato;
            color: #114071;
            background-color: #fff;
            padding: 50px;
            border-radius: 4px;
            max-width:70vw;
            width: 90%;
            max-height: 90vh; /* Limita la altura del popup al 80% del viewport */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            overflow-y: auto; /* Habilita el scroll vertical si el contenido excede el tamaño */
        }

        .popup__close {
            position: absolute;
            top: 20px; /* Espacio desde la parte superior */
            right: 30px; /* Espacio desde la parte derecha */
            font-size: 40px; /* Tamaño del botón */
            font-weight: light;
            color: #333;
            cursor: pointer;
            background: none;
            border: none;
            outline: none;
            z-index: 10; /* Asegura que el botón esté por encima del contenido */
            transition: transform 0.3s ease; /* Transición suave para efectos */
            color:#114071;
        }

        .popup__info{
            display:grid;
            grid-template-columns: auto 1fr;
            gap:4rem;
        }

        .popup__close:hover {
            transform: scale(1.2); /* Efecto de agrandamiento al pasar el cursor */
            color: #114071; /* Cambia el color al pasar el cursor */
        }

        .popup__title {
            font-size: 24px;
            margin-bottom: 10px;
            text-align:left;
        }

        .popup__ocupation{
            text-align:left;
        }

        .popup__description {
            font-size: 20px;
            color: #114071;
            text-align: left; /* Justifica el texto para mejor legibilidad */
            margin-top: 10px;
            font-weight:300;
        }

        .popup__img {
            width: 100%;
            max-width: 200px; /* Ajusta el tamaño máximo de la imagen */
            height: auto;
            margin-bottom: 15px; /* Espacio debajo de la imagen */
            border-radius: 8px; /* Bordes redondeados */
        }

        .carrusel__container {
        width: 100%;
        max-height: 452px; /* Ajusta automáticamente la altura según el contenido */
        position: relative;
        overflow: hidden;
        aspect-ratio: 16 / 9; /* Mantén una proporción fija (opcional) */
    }

    @media (max-width: 640px) {
    .popup__info {
        display: grid;
        grid-template-columns: auto;
    }

    .popup__img{
        margin:auto;
    }

}

    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const buttons = document.querySelectorAll('.card__button');
            const popup = document.getElementById('popup');
            const closePopup = document.querySelector('.popup__close');

            // Elementos dinámicos del popup
            const popupImg = document.getElementById('popup-img');
            const popupName = document.getElementById('popup-name');
            const popupOcupation = document.getElementById('popup-ocupation');
            const popupDescription = document.getElementById('popup-description');

            // Abrir el popup al hacer clic en cualquier botón
            buttons.forEach(button => {
                button.addEventListener('click', function (e) {
                    e.preventDefault(); // Evita el comportamiento predeterminado del enlace

                    // Obtener los datos del botón clicado
                    const imgSrc = button.closest('.card').querySelector('.card__img').getAttribute('src');
                    const name = button.getAttribute('data-name');
                    const ocupation = button.getAttribute('data-ocupation');
                    const description = button.getAttribute('data-description');

                    // Actualizar el contenido del popup
                    popupImg.setAttribute('src', imgSrc);
                    popupName.textContent = name;
                    popupOcupation.textContent = ocupation;
                    popupDescription.innerHTML = description; // Usa innerHTML para procesar etiquetas HTML como <br>

                    // Mostrar el popup
                    popup.style.display = 'flex';
                });
            });

            // Cerrar el popup al hacer clic en el botón de cierre
            closePopup.addEventListener('click', function () {
                popup.style.display = 'none'; // Oculta el popup
            });

            // Cerrar el popup al hacer clic fuera del contenido
            popup.addEventListener('click', function (e) {
                if (e.target === popup) {
                    popup.style.display = 'none'; // Oculta el popup
                }
            });
        });
    </script>
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>