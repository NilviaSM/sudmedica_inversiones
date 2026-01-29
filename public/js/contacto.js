document.addEventListener("DOMContentLoaded", (event) => {
    const form = document.getElementById("contact-form");
    const loadingPopup = document.getElementById("loading-popup");
    const recaptchaError = document.getElementById("recaptcha-error");
    const popup = document.getElementById("custom-popup");
    const closeButton = document.getElementById("popup-close");
    const phoneRules = {
        "+56": 9,   // Chile
        "+52": 10,  // México
        "+1": 10,   // USA / Canadá
        "+54": 10,  // Argentina
        "+55": 11,  // Brasil
        "+57": 10,  // Colombia
        "+51": 9,   // Perú
        "+58": 10,  // Venezuela
        "+593": 9,  // Ecuador
        "+591": 8,  // Bolivia
        "+598": 8,  // Uruguay
        "+595": 9,  // Paraguay
        "+506": 8,  // Costa Rica
        "+507": 8,  // Panamá
        "+502": 8,  // Guatemala
        "+503": 8,  // El Salvador
        "+504": 8,  // Honduras
        "+505": 8,  // Nicaragua
        "+53": 8,   // Cuba
        "+34": 9,   // España
        "+33": 9,   // Francia
        "+49": 10,  // Alemania (variable, usamos mínimo común)
        "+44": 10,  // Reino Unido
        "+351": 9,  // Portugal
    };
    const phoneInput = document.getElementById("phone");
    const countrySelect = document.getElementById("country");

    if (form) {
        form.addEventListener("submit", (event) => {

            const countryCode = countrySelect.value;
            const requiredLength = phoneRules[countryCode] || 8;
            const phone = phoneInput.value;

            if (phone.length !== requiredLength) {
                event.preventDefault();
                alert(`El número debe tener ${requiredLength} dígitos`);
                phoneInput.focus();
                return;
            }

            const recaptchaResponse = grecaptcha.getResponse();

            if (!recaptchaResponse) {
                event.preventDefault();           // bloquea envío
                recaptchaError.style.display = "block";
                return;
            }

            // ✅ CAPTCHA resuelto → permitir envío
            recaptchaError.style.display = "none";


            // Muestra el popup de carga
            loadingPopup.classList.add("show");
            
        });
        
    }

    if (popup) {
        
        // Mostrar el popup automáticamente si existe
        popup.classList.add("show");

        // Cerrar el popup al hacer clic en el botón
        closeButton.addEventListener("click", () => {
            popup.classList.remove("show");
        });
    }

    function enforcePhoneRules() {
        const countryCode = countrySelect.value;
        const maxLength = phoneRules[countryCode] || 15;

        // solo números
        phoneInput.value = phoneInput.value.replace(/\D/g, "");

        // limitar longitud
        if (phoneInput.value.length > maxLength) {
            phoneInput.value = phoneInput.value.slice(0, maxLength);
        }

        phoneInput.setAttribute("maxlength", maxLength);
    }


    phoneInput.addEventListener("input", enforcePhoneRules);
    countrySelect.addEventListener("change", () => {
        phoneInput.value = "";
        enforcePhoneRules();
    });
    
})