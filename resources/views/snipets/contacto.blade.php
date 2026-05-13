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
                    <option value="+56">🇨🇱 Chile (+56)</option>
                    <option value="+52">🇲🇽 México (+52)</option>
                    <option value="+1">🇺🇸 Estados Unidos (+1)</option>
                    <option value="+1">🇨🇦 Canadá (+1)</option>
                    <option value="+54">🇦🇷 Argentina (+54)</option>
                    <option value="+55">🇧🇷 Brasil (+55)</option>
                    <option value="+57">🇨🇴 Colombia (+57)</option>
                    <option value="+51">🇵🇪 Perú (+51)</option>
                    <option value="+58">🇻🇪 Venezuela (+58)</option>
                    <option value="+593">🇪🇨 Ecuador (+593)</option>
                    <option value="+591">🇧🇴 Bolivia (+591)</option>
                    <option value="+598">🇺🇾 Uruguay (+598)</option>
                    <option value="+595">🇵🇾 Paraguay (+595)</option>
                    <option value="+506">🇨🇷 Costa Rica (+506)</option>
                    <option value="+507">🇵🇦 Panamá (+507)</option>
                    <option value="+502">🇬🇹 Guatemala (+502)</option>
                    <option value="+503">🇸🇻 El Salvador (+503)</option>
                    <option value="+504">🇭🇳 Honduras (+504)</option>
                    <option value="+505">🇳🇮 Nicaragua (+505)</option>
                    <option value="+53">🇨🇺 Cuba (+53)</option>
                    <option value="+1809">🇩🇴 República Dominicana (+1)</option>
                    <option value="+1876">🇯🇲 Jamaica (+1)</option>

                    <option value="+34">🇪🇸 España (+34)</option>
                    <option value="+33">🇫🇷 Francia (+33)</option>
                    <option value="+49">🇩🇪 Alemania (+49)</option>
                    <option value="+39">🇮🇹 Italia (+39)</option>
                    <option value="+44">🇬🇧 Reino Unido (+44)</option>
                    <option value="+351">🇵🇹 Portugal (+351)</option>

                    <option value="+81">🇯🇵 Japón (+81)</option>
                    <option value="+82">🇰🇷 Corea del Sur (+82)</option>
                    <option value="+86">🇨🇳 China (+86)</option>
                    <option value="+91">🇮🇳 India (+91)</option>

                    <option value="+61">🇦🇺 Australia (+61)</option>
                    <option value="+64">🇳🇿 Nueva Zelanda (+64)</option>

                    <option value="+27">🇿🇦 Sudáfrica (+27)</option>
                </select>
                <input type="tel" name="telefono" id="phone" placeholder="{{ __('messages.Contacto_Telefono')  }}" required=True inputmode="numeric">
            </div>
            <input type="text" placeholder="{{ __('messages.Contacto_Email') }}" name="email" required=True>
            <textarea placeholder="{{ __('messages.Contacto_Mensaje') }}" name="mensaje" required=True></textarea>
            
             <!-- <p style="color:red; font-weight:bold;">TEST RECAPTCHA</p> -->

            <div class="recaptcha-wrapper">
                <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site') }}"></div>
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