<div id="popup_onload" class="popup">
  <div class="popup-content" role="dialog" aria-modal="true">
    <div class="popup-body">
      <button id="popup_onload_btn_close" class="close" aria-label="Cerrar">&times;</button>

      <img src="{{ asset('img/popup.jpeg') }}" alt="Junta de Accionistas" class="popup-img">

      <a href="{{ route('citacionJOA052026') }}" class="btn btn-overlay">
        <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" aria-hidden="true" focusable="false">
          <path d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z"/>
        </svg>
        DESCARGAR CITACIÓN
      </a>

      <a href="{{ route('poderJOA16052026') }}" class="btn btn-overlay-2">
        <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" aria-hidden="true" focusable="false">
          <path d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z"/>
        </svg>  
        DESCARGAR PODER JOA
      </a>
    </div>
  </div>
</div>