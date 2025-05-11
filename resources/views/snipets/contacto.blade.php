<div class="contacto__container container">
    <a href="tel:+56322186995">
        <img class="contacto__img" src="{{asset('img/contacto_sudmedica.png')}}" alt="">
    </a>
    <div class="contacto__form">
        <div class="contacto__title">
            <img src="{{asset('img/asesora.png')}}" alt="">
            <p>{{ __('messages.Contacto_Titulo') }}</p>
        </div>
        <form id="contact-form" action="{{route('contactanos.store')}}" method="post">
            @csrf
            <input type="text" placeholder="{{ __('messages.Contacto_Nombre') }}" name="nombre">
            <input type="text" placeholder="{{ __('messages.Contacto_Telefono') }}" name="telefono">
            <input type="text" placeholder="{{ __('messages.Contacto_Email') }}" name="email">
            <input type="submit" value="{{ __('messages.Contacto_Enviar') }}">
        </form>
        <div class="loading-popup" id="loading-popup">
            <div class="loading-content">
                <div class="spinner"></div>
                <p>{{ __('messages.Contacto_Enviando') }}</p>
            </div>
        </div>
        @if ($errors->has('error'))
        <div class="custom-popup" id="custom-popup">
            <div class="popup-content">
                <h2>{{ __('messages.Contacto_Error') }}</h2>
                <p>{{ $errors->first('error') }}</p>
                <button class="popup-close" id="popup-close">Cerrar</button>
            </div>
        </div>
        @endif
        @if (session('info'))
            <div class="custom-popup" id="custom-popup">
                <div class="popup-content">
                    <h2>{{ __('messages.Contacto_Confirmacion') }}</h2>
                    <p>{{session('info')}}</p>
                    <button class="popup-close" id="popup-close">Cerrar</button>
                </div>
            </div>
        @endif
        <div class="contacto__whatsapp">
            <p>
                {{ __('messages.Contacto_Whatsapp') }}
            </p>
            <a href="https://wa.me/56979622807" class="btn__form btn__form__whatssap"><i class="fa-brands fa-whatsapp"></i> {{ __('messages.Contacto_Enviar_Mensaje') }}</a>
            <a href="tel:+56322186995" class="btn__form btn__form__call"><i class="fa fa-phone" aria-hidden="true"></i> {{ __('messages.Contacto_Llamar') }}</a>
        </div>
    </div>
    <style>
        .loading-popup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Fondo semitransparente */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1000;
        visibility: hidden; /* Oculta el popup por defecto */
        opacity: 0;
        transition: visibility 0s, opacity 0.3s ease-in-out;
    }

    .loading-popup.show {
        visibility: visible; /* Muestra el popup */
        opacity: 1;
    }

    .loading-content {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        max-width: 400px;
        width: 90%;
        font-family:lato;
    }

    .loading-content .spinner {
        width: 40px;
        height: 40px;
        border: 4px solid #ccc;
        border-top: 4px solid #114071;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        margin: 0 auto 10px auto;
    }

    .custom-popup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Fondo semitransparente */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1000;
        visibility: hidden; /* Oculta el popup por defecto */
        opacity: 0;
        transition: visibility 0s, opacity 0.3s ease-in-out;
    }

    .custom-popup.show {
        visibility: visible; /* Muestra el popup */
        opacity: 1;
    }

    .popup-content {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        max-width: 400px;
        width: 90%;
        font-family: lato;
    }

    .popup-content h2 {
        margin-bottom: 10px;
        font-size: 24px;
        color: #333;
    }

    .popup-content p {
        margin-bottom: 20px;
        font-size: 16px;
        color: #555;
    }

    .popup-close {
        background-color: #114071;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .popup-close:hover {
        background-color: var(--white);
        color: black;
        border: 1px solid black;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    .loading-content p {
        font-size: 16px;
        color: #555;
    }
    </style>
    <script>
    document.addEventListener("DOMContentLoaded", (event) => {
    const form = document.getElementById("contact-form");
    const loadingPopup = document.getElementById("loading-popup");

    if (form) {
        form.addEventListener("submit", (event) => {
            // Muestra el popup de carga
            loadingPopup.classList.add("show");
        });
    }

    const popup = document.getElementById("custom-popup");
    const closeButton = document.getElementById("popup-close");

    if (popup) {
        // Mostrar el popup automáticamente si existe
        popup.classList.add("show");

        // Cerrar el popup al hacer clic en el botón
        closeButton.addEventListener("click", () => {
            popup.classList.remove("show");
        });
    }
})
    </script>
</div>