<div class="main">
    <div class="carrusel__container">
        <div class="carrusel__slides">
            <div class="carrusel__slide">
                <img src="{{ asset('img/slide01.png') }}" alt="Slide 1" class="carrusel__img">
                <div class="carrusel__text__02 carrusel__text__left">
                    <h2>{{ __('messages.Carrusel_Primera_Clinica') }}</h2>
                </div>
            </div>
            <div class="carrusel__slide">
                <img src="{{ asset('img/slide02.png') }}" alt="Slide 2" class="carrusel__img">
            </div>
            <div class="carrusel__slide">
                <img src="{{ asset('img/slider02.png') }}" alt="Slide 3" class="carrusel__img">
                <div class="carrusel__text__02">
                    <h2>{{ __('messages.Carrusel_Empresa_Bolsa') }}</h2>
                </div>
            </div>
            <div class="carrusel__slide">
                <img src="{{ asset('img/slide04.png') }}" alt="Slide 4" class="carrusel__img">
            </div>
            <div class="carrusel__slide">
                <img src="{{ asset('img/slide05.png') }}" alt="Slide 5" class="carrusel__img">
                <div class="carrusel__text__03 carrusel__text__right">
                    <h2>{{ __('messages.Carrusel_Exito_Acciones') }}</h2>
                </div>
            </div>
        </div>
        <div class="carrusel__buttons">
            <button class="carrusel__button" data-index="0"></button>
            <button class="carrusel__button" data-index="1"></button>
            <button class="carrusel__button" data-index="2"></button>
            <button class="carrusel__button" data-index="3"></button>
            <button class="carrusel__button" data-index="4"></button>
        </div>
    </div>

    <div class="informacion__container">
        <h1>{{ __('messages.Carrusel_Informacion') }}</h1>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const slides = document.querySelectorAll('.carrusel__slide');
        const buttons = document.querySelectorAll('.carrusel__button');
        let currentIndex = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
            buttons.forEach((button, i) => {
                button.classList.toggle('active', i === index);
            });
            currentIndex = index;
        }

        function autoSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }

        buttons.forEach((button, index) => {
            button.addEventListener('click', () => showSlide(index));
        });

        // Iniciar el slider automático
        setInterval(autoSlide, 3000); // Cambia cada 3 segundos

        // Mostrar el primer slide al cargar
        showSlide(0);
    });
</script>

<style>
    .carrusel__container {
        width: 100%;
        max-height: 600px; /* Ajusta automáticamente la altura según el contenido */
        position: relative;
        overflow: hidden;
        aspect-ratio: 16 / 9; /* Mantén una proporción fija (opcional) */
    }

    .carrusel__slides {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .carrusel__slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0; /* Oculta todos los slides por defecto */
        transition: opacity 0.5s ease-in-out; /* Transición suave */
    }

    .carrusel__slide.active {
        opacity: 1; /* Muestra solo el slide activo */
    }

    .carrusel__img {
        width: 100%;
        height: auto; /* Mantén la proporción de la imagen */
        object-fit: contain; /* Asegura que la imagen se muestre completa */
    }

    .carrusel__text__01{
        position: absolute;
        top: 30%; /* Centra verticalmente */
        left: 10%; /* Posiciona el texto a la izquierda */
        transform: translateY(-50%); /* Ajusta el centrado vertical */
        color: #fff;
        padding: 15px;
        border-radius: 5px;
        max-width: 500px;
        display: flex; /* Flexbox para centrar el contenido */
        flex-direction: column; /* Asegura que el texto fluya verticalmente */
        justify-content: center; /* Centra el contenido verticalmente */
    }

    .carrusel__text__02,
    .carrusel__text__03 {
        position: absolute;
        top: 37%; /* Centra verticalmente */
        right: 3%; /* Posiciona el texto a la izquierda */
        transform: translateY(-50%); /* Ajusta el centrado vertical */
        color: #fff;
        background-color: rgba(3, 29, 56, 0.7); /* Fondo semitransparente */
        background-blend-mode:multiply;
        backdrop-filter: blur(2px); /* Aplica el efecto de desenfoque */
        box-shadow: 0px 4px 4px rgba(152, 56, 68, 0.25);
        padding: 15px;
        border-radius: 5px;
        max-width: 350px;
        display: flex; /* Flexbox para centrar el contenido */
        flex-direction: column; /* Asegura que el texto fluya verticalmente */
        justify-content: center; /* Centra el contenido verticalmente */
        height:60%;
    }

    .carrusel__text__left{
        left:3%;
    }

    .carrusel__text__01 h2,
    .carrusel__text__02 h2,
    .carrusel__text__03 h2 {
        font-size: 50px; /* Tamaño de fuente relativo al ancho del viewport */
        font-family: 'Lato', sans-serif;
        font-weight: 800;
        margin: 0 0 0;
    }

    .carrusel__text__01 p,
    .carrusel__text__02 p,
    .carrusel__text__03 p {
        font-size: 1.5vw; /* Tamaño de fuente relativo al ancho del viewport */
        margin: 0;
    }

    .carrusel__buttons {
        position: absolute;
        bottom: calc(2% + 60px); /* Calcula la distancia como un porcentaje más un valor fijo */
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 10px;
    }

    .carrusel__button {
        width: 15px;
        height: 15px;
        background-color: #ccc;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .carrusel__button.active {
        background-color: #333;
    }

    .informacion__container {
        max-width:800px;
        text-align: center;
        line-height:4rem;
        padding: 20px;
        h1{
            font-size:clamp(30px, 5vw ,50px);
        }
    }

    /* Media Queries para pantallas más pequeñas */
    @media (max-width: 768px) {
        .carrusel__container {
            height: auto; /* Ajusta la altura automáticamente */
        }

        .carrusel__img {
            width: 110%;
            height: auto; /* Mantén la proporción de la imagen */
        }

        .carrusel__text__01,
        .carrusel__text__02,
        .carrusel__text__03 {
            top: 32%; /* Ajusta la posición vertical */
            left: 5%; /* Reduce el margen izquierdo */
            max-width: 40%; /* Asegura que el texto no ocupe demasiado espacio */
            height:40%;
        }

        .carrusel__text__01 h2,
        .carrusel__text__02 h2,
        .carrusel__text__03 h2 {
            font-size: 4vw; /* Aumenta el tamaño del texto en pantallas pequeñas */
        }

        .carrusel__text__01 p,
        .carrusel__text__02 p,
        .carrusel__text__03 p {
            font-size: 3vw; /* Aumenta el tamaño del párrafo en pantallas pequeñas */
        }
    }

    @media (max-width: 480px) {
        .carrusel__container {
            height: auto; /* Ajusta la altura automáticamente */
        }

        .carrusel__img {
            width: 150%;
            height: auto; /* Mantén la proporción de la imagen */
        }

        .carrusel__text__01,
        .carrusel__text__02,
        .carrusel__text__03 {
            top: 40%; /* Ajusta la posición vertical */
            left: 5%; /* Reduce aún más el margen izquierdo */
            max-width: 40%; /* Permite que el texto ocupe todo el ancho disponible */
        }

        .carrusel__text__01 h2,
        .carrusel__text__02 h2,
        .carrusel__text__03 h2 {
            font-size: 4.5vw; /* Ajusta el tamaño del texto para pantallas muy pequeñas */
        }

        .carrusel__text__01 p,
        .carrusel__text__02 p,
        .carrusel__text__03 p {
            font-size: 4vw; /* Ajusta el tamaño del párrafo para pantallas muy pequeñas */
        }

        .carrusel__buttons {
            margin-bottom:10px;
            bottom: -10px; /* Separa los botones de la imagen */
        }

        .informacion__container {
            text-align: center; /* Centra el texto horizontalmente */
            padding: 20px;
        }

        .informacion__container h1 {
            text-align:left;
            font-size: 7vw; /* Ajusta el tamaño del título para pantallas pequeñas */
            margin:2rem 0;
        }

        .informacion__container p {
            font-size: 4vw; /* Ajusta el tamaño del párrafo para pantallas pequeñas */
            line-height: 1.5; /* Mejora la legibilidad */
        }
    }
</style>