<div id="popup_onload" class="popup">
  <div class="popup-content" role="dialog" aria-modal="true">
    <div class="popup-body">

      <button id="popup_onload_btn_close" class="close" aria-label="Cerrar">
        &times;
      </button>

      <img
        src="{{ asset('img/popup.jpeg') }}"
        alt="Junta de Accionistas"
        class="popup-img"
      >

      {{-- DESCARGAR CITACIÓN --}}
      <a href="{{ route('citacionJOA052026') }}" class="btn btn-overlay">
        <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" aria-hidden="true" focusable="false">
          <path d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z"/>
        </svg>

        <span>DESCARGAR CITACIÓN</span>
      </a>

      {{-- DESCARGAR PODER --}}
      <a href="{{ route('poderJOA16052026') }}" class="btn btn-overlay-2">
        <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" aria-hidden="true" focusable="false">
          <path d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z"/>
        </svg>

        <span>DESCARGAR PODER JOA</span>
      </a>

      {{-- POSTULANTES DIRECTORIO --}}
      <a href="{{ route('documentos') }}" class="btn btn-overlay btn-postulantes">
        <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" aria-hidden="true" focusable="false">
          <path d="M320-240h320v-80H320v80Zm0-160h320v-80H320v80ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520Z"/>
        </svg>

        <span>POSTULANTES DIRECTORIO</span>
      </a>

    </div>
  </div>
</div>