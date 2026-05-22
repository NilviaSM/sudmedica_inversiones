<div id="popup_onload" class="popup">
    <div class="popup-content" role="dialog" aria-modal="true">

        <button id="popup_onload_btn_close"
                class="close"
                aria-label="Cerrar">
            &times;
        </button>

        <img src="{{ asset('img/popup.jpeg') }}"
             alt="Junta de Accionistas"
             class="popup-img">

        <div class="popup-actions">

            <a href="{{ route('citacionJOA052026') }}"
               class="btn btn-overlay">
                DESCARGAR CITACIÓN
            </a>

            <a href="{{ route('poderJOA16052026') }}"
               class="btn btn-overlay-2">
                DESCARGAR PODER JOA
            </a>

            <a href="{{ route('documentos') }}"
               class="btn btn-overlay btn-postulantes">
                POSTULANTES DIRECTORIO
            </a>

        </div>

    </div>
</div>

<style>
/* =========================================================
   POPUP JUNTA ACCIONISTAS
========================================================= */

.popup {
    display: none;
    position: fixed;
    inset: 0;
    z-index: 1000;

    background: rgba(0, 0, 0, 0.6);

    align-items: center;
    justify-content: center;

    padding: 20px 12px;
}

#popup_onload .popup-content {
    position: relative;

    width: min(92vw, 520px);
    height: min(90vh, 650px);

    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;

    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.35);
}

#popup_onload .popup-img {
    position: absolute;
    inset: 0;

    width: 100%;
    height: 100%;

    object-fit: cover;
    object-position: center;

    display: block;

    z-index: 1;
}

#popup_onload .close {
    position: absolute;
    top: 12px;
    right: 12px;

    z-index: 10001;

    width: 38px;
    height: 38px;

    border: none;
    border-radius: 50%;

    background: rgba(255, 255, 255, 0.95);
    color: #000000;

    font-size: 26px;
    line-height: 1;

    cursor: pointer;
}

#popup_onload .popup-actions {
    position: absolute !important;

    left: 0 !important;
    right: 0 !important;
    bottom: 145px !important;

    z-index: 9999 !important;

    display: flex !important;
    flex-direction: column !important;
    gap: 10px !important;

    width: 100% !important;
    padding: 0 38px !important;

    opacity: 1 !important;
    visibility: visible !important;
}

#popup_onload .popup-actions a,
#popup_onload .popup-actions .btn,
#popup_onload .btn-overlay,
#popup_onload .btn-overlay-2,
#popup_onload .btn-postulantes {
    position: relative !important;

    top: auto !important;
    right: auto !important;
    bottom: auto !important;
    left: auto !important;

    transform: none !important;
    margin: 0 !important;

    display: flex !important;
    align-items: center !important;
    justify-content: center !important;

    width: 100% !important;
    min-height: 46px !important;

    background: #8DC63F !important;
    color: #ffffff !important;

    border: none !important;
    border-radius: 8px !important;

    font-size: 13px !important;
    font-weight: 700 !important;

    text-align: center !important;
    text-decoration: none !important;

    z-index: 10000 !important;

    opacity: 1 !important;
    visibility: visible !important;

    box-shadow: 0 8px 18px rgba(0, 0, 0, 0.22) !important;
}


/* =========================================================
   MOBILE
========================================================= */

@media screen and (max-width: 768px) {

    #popup_onload {
        padding: 10px !important;

        align-items: center !important;
        justify-content: center !important;

        overflow-y: auto !important;
    }

    #popup_onload .popup-content {
        width: min(94vw, 420px) !important;
        height: min(88vh, 620px) !important;

        border-radius: 14px !important;
    }

    #popup_onload .close {
        top: 10px !important;
        right: 10px !important;

        width: 34px !important;
        height: 34px !important;

        font-size: 23px !important;
    }

    #popup_onload .popup-actions {
        bottom: 118px !important;

        padding: 0 24px !important;
        gap: 8px !important;
    }

    #popup_onload .popup-actions a,
    #popup_onload .popup-actions .btn,
    #popup_onload .btn-overlay,
    #popup_onload .btn-overlay-2,
    #popup_onload .btn-postulantes {
        min-height: 40px !important;

        font-size: 11px !important;
        padding: 8px 6px !important;
    }
}


/* =========================================================
   IPHONE / PANTALLAS ANGOSTAS
========================================================= */

@media screen and (max-width: 390px) {

    #popup_onload .popup-content {
        width: 94vw !important;
        height: 88vh !important;
    }

    #popup_onload .popup-actions {
        bottom: 105px !important;

        padding: 0 18px !important;
        gap: 7px !important;
    }

    #popup_onload .popup-actions a,
    #popup_onload .popup-actions .btn,
    #popup_onload .btn-overlay,
    #popup_onload .btn-overlay-2,
    #popup_onload .btn-postulantes {
        min-height: 38px !important;

        font-size: 10.5px !important;
        padding: 7px 6px !important;
    }
}
</style>