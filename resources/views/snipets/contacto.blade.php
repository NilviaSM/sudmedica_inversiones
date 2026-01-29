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
            <input type="text" placeholder="{{ __('messages.Contacto_Nombre') }}" name="nombre" required=True>
            <div class="selected_country">
                <select name="codigo_pais" id="country">
                    <option value="+56">Chile</option>
                    <option value="+52">México</option>
                    <option value="+1">Estados Unidos</option>
                    <option value="+1">Canadá</option>
                    <option value="+54">Argentina</option>
                    <option value="+55">Brasil</option>
                    <option value="+57">Colombia</option>
                    <option value="+51">Perú</option>
                    <option value="+58">Venezuela</option>
                    <option value="+593">Ecuador</option>
                    <option value="+591">Bolivia</option>
                    <option value="+598">Uruguay</option>
                    <option value="+595">Paraguay</option>
                    <option value="+506">Costa Rica</option>
                    <option value="+507">Panamá</option>
                    <option value="+502">Guatemala</option>
                    <option value="+503">El Salvador</option>
                    <option value="+504">Honduras</option>
                    <option value="+505">Nicaragua</option>
                    <option value="+53">Cuba</option>
                    <option value="+1809">República Dominicana</option>
                    <option value="+1876">Jamaica</option>

                    <option value="+34">España</option>
                    <option value="+33">Francia</option>
                    <option value="+49">Alemania</option>
                    <option value="+39">Italia</option>
                    <option value="+44">Reino Unido</option>
                    <option value="+351">Portugal</option>
                    <option value="+31">Países Bajos</option>
                    <option value="+32">Bélgica</option>
                    <option value="+41">Suiza</option>
                    <option value="+43">Austria</option>
                    <option value="+45">Dinamarca</option>
                    <option value="+46">Suecia</option>
                    <option value="+47">Noruega</option>
                    <option value="+48">Polonia</option>
                    <option value="+30">Grecia</option>

                    <option value="+7">Rusia</option>
                    <option value="+90">Turquía</option>
                    <option value="+81">Japón</option>
                    <option value="+82">Corea del Sur</option>
                    <option value="+86">China</option>
                    <option value="+91">India</option>
                    <option value="+62">Indonesia</option>
                    <option value="+63">Filipinas</option>
                    <option value="+66">Tailandia</option>
                    <option value="+84">Vietnam</option>
                    <option value="+65">Singapur</option>
                    <option value="+60">Malasia</option>

                    <option value="+61">Australia</option>
                    <option value="+64">Nueva Zelanda</option>

                    <option value="+27">Sudáfrica</option>
                    <option value="+20">Egipto</option>
                    <option value="+212">Marruecos</option>
                    <option value="+234">Nigeria</option>
                    <option value="+254">Kenia</option>
                </select>
                <input type="tel" name="telefono" id="phone" placeholder="{{ __('messages.Contacto_Telefono')  }}" required=True inputmode="numeric">
            </div>
            <input type="text" placeholder="{{ __('messages.Contacto_Email') }}" name="email" required=True>
            <textarea placeholder="{{ __('messages.Contacto_Mensaje') }}" name="mensaje" required=True></textarea>
            <!-- Aquí va el reCAPTCHA -->
             <div class="recaptcha-wrapper">
                <div class="g-recaptcha" data-sitekey="6Ld8MlIsAAAAAF2TbGGkaGRg-EM40GF9ZjrDh3TR"></div> 
            </div>
            <p id="recaptcha-error" class="recaptcha-error">
                Debes confirmar que no eres un robot
            </p>
            <input type="submit" value="{{ __('messages.Contacto_Enviar') }}">
        </form>
        <!-- Script de Google --> 
         <script src="https://www.google.com/recaptcha/api.js" async defer></script> 
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
            <a href="https://wa.me/56932442452" class="btn__form btn__form__whatssap"><i class="fa-brands fa-whatsapp"></i> {{ __('messages.Contacto_Enviar_Mensaje') }}</a>
            <a href="tel:+56322186995" class="btn__form btn__form__call"><i class="fa fa-phone" aria-hidden="true"></i> {{ __('messages.Contacto_Llamar') }}</a>
        </div>
    </div>
</div>
<script>
    //No se logro colocar en un script aparte, produce error, dejar este script aqui.
    function scaleRecaptcha() {
        const recaptcha = document.querySelector('.g-recaptcha');
        const wrapper = document.querySelector('.recaptcha-wrapper');

        if (!recaptcha || !wrapper) return;

        const wrapperWidth = wrapper.offsetWidth;
        const recaptchaWidth = 304; // ancho fijo de Google reCAPTCHA

        const scale = wrapperWidth < recaptchaWidth ? wrapperWidth / recaptchaWidth : 1;
        recaptcha.style.transform = `scale(${scale})`;
    }

    window.addEventListener('load', scaleRecaptcha);
    window.addEventListener('resize', scaleRecaptcha);
</script>