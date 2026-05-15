<div id="popup_onload" class="popup">
    <div class="popup-content" role="dialog" aria-modal="true">

        <div class="popup-body">

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
</div>
<style>
  /* =========================================================
   DEBUG + FIX MOBILE
========================================================= */

.popup-debug {
    background: red;
    color: white;
    font-size: 18px;
    font-weight: bold;
    padding: 14px;
    margin-top: 10px;
    margin-bottom: 10px;
    border-radius: 8px;
    text-align: center;
}

.popup-actions {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

@media screen and (max-width: 768px) {

    #popup_onload {
        overflow-y: auto !important;
        padding: 16px 0 !important;
        align-items: flex-start !important;
    }

    #popup_onload .popup-content {
        width: 92vw !important;
        max-width: 92vw !important;

        height: auto !important;
        max-height: none !important;

        overflow: visible !important;

        padding: 12px !important;

        margin-top: 10px !important;
        margin-bottom: 20px !important;
    }

    #popup_onload .popup-body {
        overflow: visible !important;
        height: auto !important;
    }

    #popup_onload .popup-img {
        width: 100% !important;
        height: auto !important;

        max-height: 24vh !important;

        object-fit: contain !important;

        margin-bottom: 10px !important;
    }

    #popup_onload .popup-actions {
        display: flex !important;
        flex-direction: column !important;

        width: 100% !important;

        position: relative !important;

        z-index: 999999 !important;
    }

    #popup_onload .popup-actions .btn {
        display: flex !important;

        align-items: center !important;
        justify-content: center !important;

        width: 100% !important;

        background: #37b821 !important;
        color: #ffffff !important;

        padding: 12px 10px !important;

        border-radius: 8px !important;

        font-size: 12px !important;
        font-weight: 700 !important;

        text-decoration: none !important;

        position: relative !important;

        z-index: 999999 !important;
    }
}
</style>