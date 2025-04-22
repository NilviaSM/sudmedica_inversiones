<div class="main">
    <div class="carrusel__container">
        <div class="carrusel__slides">
            <div class="carrusel__slide">
                <img src="{{ asset('img/slider01.png') }}" alt="Slide 1" class="carrusel__img">
                <div class="carrusel__text__01">
                    <h2><b>SABÍAS QUE INVERTIR EN SALUD</b> PUEDE SER UNA DE LAS DECISIONES MÁS <b>RENTABLES?</b></h2>
                </div>
            </div>
            <div class="carrusel__slide">
                <img src="{{ asset('img/slider02.png') }}" alt="Slide 2" class="carrusel__img">
                <div class="carrusel__text__02">
                    <h2>LA PRIMERA EMPRESA JUNIOR QUE COTIZA EN BOLSA</h2>
                </div>
            </div>
            <div class="carrusel__slide">
                <img src="{{ asset('img/slider03.png') }}" alt="Slide 3" class="carrusel__img">
                <div class="carrusel__text__03 carrusel__text__left">
                    <h2>EL ÉXITO SE CONSTRUYE CON BUENAS ACCIONES</h2>
                </div>
            </div>
        </div>
        <div class="carrusel__buttons">
            <button class="carrusel__button" data-index="0"></button>
            <button class="carrusel__button" data-index="1"></button>
            <button class="carrusel__button" data-index="2"></button>
        </div>
    </div>

    <div class="informacion__container">
        <h1>Te contamos</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit magni voluptate, doloribus sapiente deleniti hic repellendus quidem aliquam veritatis nulla quaerat vel ex facere! Placeat natus numquam soluta ad quae!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum optio placeat quibusdam, saepe dolor molestias aut nostrum ipsam numquam blanditiis doloribus distinctio illo dicta! Ut nobis nisi laborum nesciunt quos.Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum eveniet reprehenderit voluptatum voluptatem nihil neque totam quos dicta vel labore ex quas molestiae, repudiandae ut, quibusdam minus soluta aspernatur libero.</p>
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
        top: 30%; /* Centra verticalmente */
        right: 10%; /* Posiciona el texto a la izquierda */
        transform: translateY(-50%); /* Ajusta el centrado vertical */
        color: #fff;
        background-color: rgba(18, 64, 113, 0.6); /* Fondo semitransparente */
        backdrop-filter: blur(2px); /* Aplica el efecto de desenfoque */
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        padding: 15px;
        border-radius: 5px;
        max-width: 300px;
        display: flex; /* Flexbox para centrar el contenido */
        flex-direction: column; /* Asegura que el texto fluya verticalmente */
        justify-content: center; /* Centra el contenido verticalmente */
    }

    .carrusel__text__left{
        left:10%;
    }

    .carrusel__text__01 h2,
    .carrusel__text__02 h2,
    .carrusel__text__03 h2 {
        font-size: 2.5vw; /* Tamaño de fuente relativo al ancho del viewport */
        font-family: 'Lato', sans-serif;
        font-weight: 400;
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
        text-align: center;
        padding: 20px;
    }

    /* Media Queries para pantallas más pequeñas */
    @media (max-width: 768px) {
        .carrusel__container {
            height: auto; /* Ajusta la altura automáticamente */
        }

        .carrusel__img {
            width: 100%;
            height: auto; /* Mantén la proporción de la imagen */
        }

        .carrusel__text__01,
        .carrusel__text__02,
        .carrusel__text__03 {
            top: 35%; /* Ajusta la posición vertical */
            left: 5%; /* Reduce el margen izquierdo */
            max-width: 90%; /* Asegura que el texto no ocupe demasiado espacio */
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
            width: 100%;
            height: auto; /* Mantén la proporción de la imagen */
        }

        .carrusel__text__01,
        .carrusel__text__02,
        .carrusel__text__03 {
            top: 40%; /* Ajusta la posición vertical */
            left: 5%; /* Reduce aún más el margen izquierdo */
            max-width: 100%; /* Permite que el texto ocupe todo el ancho disponible */
        }

        .carrusel__text__01 h2,
        .carrusel__text__02 h2,
        .carrusel__text__03 h2 {
            font-size: 5vw; /* Ajusta el tamaño del texto para pantallas muy pequeñas */
        }

        .carrusel__text__01 p,
        .carrusel__text__02 p,
        .carrusel__text__03 p {
            font-size: 4vw; /* Ajusta el tamaño del párrafo para pantallas muy pequeñas */
        }
    }
</style>