  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contacto.css') }}">
    <link rel="stylesheet" href="{{ asset('css/resumen.css') }}"> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3a008cc3c3.js" crossorigin="anonymous"></script>

    <title>Sudmédica</title>
  </head>

  <body class="page-resumen-ncg501">
    @include("snipets.navbar")

    <div class="documentos">
      <div class="documentos__container">
        <img src="{{ asset('img/sudmedica_docs2.png') }}" alt="" class="documentos__img">

        <div class="resumen__texto">
          <!-- IZQUIERDA -->
          <div class="resumen_textos">
            <p class="resumen__tag">RESUMEN NCG501</p>

            {{-- Deje el título “limpio” para que traducciones no dupliquen (NCG501) --}}
            <h1 class="resumen__titulo">
              {{ __('messages.Resumen_transacciones') }}
            </h1>
          </div>

          <!-- DERECHA -->
          <div class="resumen-ncg501__links" aria-label="Descargas NCG501">
            <div class="resumen-ncg501__row">
              <span class="resumen-ncg501__periodo">Segundo Semestre 2025</span>
              <a class="resumen-ncg501__download" href="{{ route('reporte_2025') }}">
                Descargar
              </a>
            </div>

            <div class="resumen-ncg501__row">
              <span class="resumen-ncg501__periodo">Primer Semestre 2025</span>
              <a class="resumen-ncg501__download" href="{{ route('Reporte_Partes_Relacionadas') }}">
                Descargar
              </a>
            </div>
           <div class="resumen-ncg501__row">
          <span class="resumen-ncg501__periodo">Primer Semestre 2026</span>

          <a
            class="resumen-ncg501__download"
            href="{{ asset('documents/REPORTE_OPERACIONES_CON_PARTES_RELACIONADAS_1ER_SEMESTRE_2026.xlsx') }}"
            download
          >
            Descargar
          </a>
        </div>
          </div>
        </div>
      </div>
    </div>

    @include('snipets.contacto')
    @include('volver_inicio')

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/contacto.js') }}"></script>
  </body>
  </html>
