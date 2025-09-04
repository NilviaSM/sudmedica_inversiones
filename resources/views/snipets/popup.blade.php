<div id="popup" class="popup">
  <div class="popup-content">
    <span class="close">&times;</span>
   <img src="{{ asset('img/popup.png') }}" alt="Junta de Accionistas" style="max-width:100%; height:auto;">
    <div style="margin-top: 15px;">
      <a href="https://drive.google.com/drive/folders/1SdukobwxIrf-4ibvLR-W74YCKdQK2S5u?usp=sharing"
         class="btn">DESCARGAR INVITACIÓN Y PODER</a>
    </div>
  </div>
</div>

<style>
    .popup {
  display: none;
  position: fixed;
  z-index: 1000;
  left: 0; top: 0;
  width: 100%; height: 100%;
  background-color: rgba(0,0,0,0.6);
}
.popup-content {
  background: #fff;
  margin: 10% auto;
  padding: 20px;
  border-radius: 8px;
  width: 80%; max-width: 600px;
  text-align: center;
  position: relative;
}
.close {
  position: absolute;
  top: 10px; right: 20px;
  font-size: 28px;
  cursor: pointer;
}
.btn {
  display: inline-block;
  padding: 12px 20px;
  margin-top: 20px;
  background: #42b72a;
  color: #fff;
  border-radius: 5px;
  text-decoration: none;
  font-weight: bold;
}
.btn:hover { background: #369d22; }

</style>

<script>
  window.onload = function() {
    const popup = document.getElementById("popup");
    const closeBtn = document.querySelector(".popup .close");

    // Mostrar popup al cargar
    popup.style.display = "block";

    // Cerrar con X
    closeBtn.onclick = () => popup.style.display = "none";

    // Cerrar clic afuera
    window.onclick = (e) => {
      if (e.target === popup) popup.style.display = "none";
    };
  };
</script>
