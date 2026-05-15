<div id="popup_onload" class="popup">
  <div class="popup-content" role="dialog" aria-modal="true">
    <div class="popup-body">

      <button id="popup_onload_btn_close" class="close" aria-label="Cerrar">&times;</button>

      <img src="{{ asset('img/popup.jpeg') }}" alt="Junta de Accionistas" class="popup-img">

      <div class="popup-actions">
        <a href="{{ route('citacionJOA052026') }}" class="btn btn-overlay">
          DESCARGAR CITACIÓN
        </a>

        <a href="{{ route('poderJOA16052026') }}" class="btn btn-overlay-2">
          DESCARGAR PODER JOA
        </a>

        <a href="{{ route('documentos') }}" class="btn btn-overlay btn-postulantes">
          POSTULANTES DIRECTORIO
        </a>
      </div>

    </div>
  </div>
</div>
<style>
 #popup_onload.popup {
    position: fixed;
    inset: 0;
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow-y: auto;
    padding: 20px;
    box-sizing: border-box;
}

#popup_onload .popup-content {
    width: 430px;
    max-width: calc(100vw - 32px);
    background: #ffffff;
    border-radius: 18px;
    padding: 20px;
    box-sizing: border-box;
}

#popup_onload .popup-body {
    position: relative;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

#popup_onload .popup-img {
    width: 100%;
    max-width: 360px;
    height: auto;
    display: block;
    margin: 0 auto 18px auto;
}

#popup_onload .popup-actions {
    width: 100%;
    max-width: 360px;
    display: flex;
    flex-direction: column;
    gap: 12px;
}

#popup_onload .btn-overlay,
#popup_onload .btn-overlay-2,
#popup_onload .btn-postulantes {
    width: 100%;
    min-height: 56px;
    padding: 12px 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #2fc21f;
    color: #ffffff !important;
    border-radius: 9px;
    border: none;
    font-size: 15px;
    font-weight: 700;
    text-align: center;
    text-decoration: none !important;
    box-shadow: 0 8px 18px rgba(0, 0, 0, 0.22);
    box-sizing: border-box;
}

#popup_onload .close {
    position: absolute;
    top: 14px;
    right: 14px;
    z-index: 10;
    width: 42px;
    height: 42px;
    border: none;
    border-radius: 50%;
    background: #ffffff;
    color: #222222;
    font-size: 32px;
    line-height: 1;
    cursor: pointer;
}

@media screen and (max-width: 768px) {
    #popup_onload.popup {
        align-items: flex-start;
        padding: 18px 12px;
    }

    #popup_onload .popup-content {
        width: 340px !important;
        max-width: calc(100vw - 32px) !important;
        padding: 16px !important;
        margin: 24px auto !important;
    }

    #popup_onload .popup-img {
        max-width: 280px !important;
        margin-bottom: 16px !important;
    }

    #popup_onload .popup-actions {
        max-width: 280px !important;
        gap: 10px !important;
    }

    #popup_onload .btn-overlay,
    #popup_onload .btn-overlay-2,
    #popup_onload .btn-postulantes {
        min-height: 52px !important;
        font-size: 13px !important;
        padding: 11px 8px !important;
    }

    #popup_onload .close {
        top: 12px !important;
        right: 12px !important;
        width: 38px !important;
        height: 38px !important;
        font-size: 30px !important;
    }
}
</style>