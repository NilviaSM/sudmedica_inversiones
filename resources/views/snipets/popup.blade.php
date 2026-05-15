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

            {{-- DEBUG VISUAL --}}
            <div class="popup-debug">
                BOTONES ACTIVOS
            </div>

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