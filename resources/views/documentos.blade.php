<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contacto.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3a008cc3c3.js" crossorigin="anonymous"></script>
    <title>Documentos - Sudmédica</title>
    <style>
        .documentos__container--dropdown { overflow: visible; }
        .boton-dropdown {
            width: 100%; border: none; cursor: pointer; font-family: inherit;
            display: flex; justify-content: center; align-items: center; gap: 8px;
        }
        .dropdown-arrow { transition: transform .2s ease; }
        .boton-dropdown.activo .dropdown-arrow { transform: rotate(180deg); }
        .dropdown-documentos {
            display: none; width: 100%; margin-top: 8px; background: #fff;
            border-radius: 12px; overflow: hidden; position: relative; z-index: 10;
            box-shadow: 0 6px 14px rgba(0,0,0,.25);
            max-height: 440px; overflow-y: auto;
        }
        .dropdown-documentos.activo { display: block; }
        .dropdown-grupo {
            padding: 10px 14px; background: #004080; color: #fff;
            font-weight: 900; font-size: 13px;
        }
        .dropdown-documentos a {
            display: block; padding: 12px 14px; background: #fff;
            color: #004080; text-decoration: none; font-weight: 700;
            font-size: 14px; line-height: 1.4;
            border-bottom: 1px solid rgba(0,64,128,.15);
        }
        .dropdown-documentos a:hover,
        .dropdown-documentos a:focus-visible { background: #8cc63f; color: #003b73; }
        .documentos__texto__titulo { overflow-wrap: anywhere; }
    </style>
</head>
<body>
    @include('snipets.navbar')

    <div class="documentos">
        <!-- {-- ESTADOS FINANCIEROS CONSOLIDADOS --} -->
        <picture class="documentos__container documentos__container--dropdown">
            <img src="{{ asset('img/sudmedica_docs.png') }}" alt="Estados Financieros Consolidados" class="documentos__img">
            <div class="documentos__texto">
                <h1 class="documentos__texto__titulo">Estados Financieros Consolidados</h1>
                <button type="button" class="boton__documentos boton-dropdown"
                        aria-expanded="false" aria-controls="grupoDocumentos0"
                        data-dropdown-target="grupoDocumentos0">
                    Ver documentos <span class="dropdown-arrow" aria-hidden="true">▼</span>
                </button>
                <div class="dropdown-documentos" id="grupoDocumentos0">
                    <div class="dropdown-grupo">Año 2026</div>
                    <a href="{{ route('eeffJunioDiciembre2026') }}">Junio - diciembre 2026</a>
                    <a href="{{ route('eeffMarzoDiciembre2026') }}">Marzo - diciembre 2026</a>
                    <div class="dropdown-grupo">Documentos anuales</div>
                    <a href="{{ route('consolidadoPdf2025-2024') }}">EEFF 2025 - 2024 (verificar archivo)</a>
                    <a href="{{ route('consolidadoPdf') }}">EEFF 2023 - 2022</a>
                </div>
            </div>
        </picture>

        <!-- {-- MEMORIAS ANUALES --} -->
        <picture class="documentos__container documentos__container--dropdown">
            <img src="{{ asset('img/sudmedica_docs.png') }}" alt="Memorias Anuales" class="documentos__img">
            <div class="documentos__texto">
                <h1 class="documentos__texto__titulo">Memorias Anuales</h1>
                <button type="button" class="boton__documentos boton-dropdown"
                        aria-expanded="false" aria-controls="grupoDocumentos1"
                        data-dropdown-target="grupoDocumentos1">
                    Ver documentos <span class="dropdown-arrow" aria-hidden="true">▼</span>
                </button>
                <div class="dropdown-documentos" id="grupoDocumentos1">
                    <div class="dropdown-grupo">Memorias publicadas</div>
                    <a href="{{ route('memoria2025Pdf') }}">Memoria 2025</a>
                    <a href="{{ route('memoriaPdf') }}">Memoria 2024</a>
                    <a href="{{ route('memoria2023Pdf') }}">Memoria 2023</a>
                </div>
            </div>
        </picture>

        <!-- {-- ACTAS Y JUNTAS DE ACCIONISTAS --} -->
        <picture class="documentos__container documentos__container--dropdown">
            <img src="{{ asset('img/sudmedica_docs.png') }}" alt="Actas y Juntas de Accionistas" class="documentos__img">
            <div class="documentos__texto">
                <h1 class="documentos__texto__titulo">Actas y Juntas de Accionistas</h1>
                <button type="button" class="boton__documentos boton-dropdown"
                        aria-expanded="false" aria-controls="grupoDocumentos2"
                        data-dropdown-target="grupoDocumentos2">
                    Ver documentos <span class="dropdown-arrow" aria-hidden="true">▼</span>
                </button>
                <div class="dropdown-documentos" id="grupoDocumentos2">
                    <div class="dropdown-grupo">2026</div>
                    <a href="{{ route('jeaSudmedica10112026') }}">JEA Sudmédica S.A. - 10 noviembre 2026</a>
                    <a href="{{ route('citacionjea') }}">Citación JEA - enero 2026</a>
                    <a href="{{ route('citacionJOA052026') }}">Citación JOA - mayo 2026</a>
                    <a href="{{ route('poderJOA16052026') }}">Poder JOA - mayo 2026</a>
                    <div class="dropdown-grupo">Actas y formularios</div>
                    <a href="{{ route('jearmsi2025') }}">JEA RMSI 2025</a>
                    <a href="{{ route('jearmsi') }}">JEA RMSI</a>
                    <a href="{{ route('poderjadocx') }}">Poder Junta de Accionistas (Word)</a>
                </div>
            </div>
        </picture>

        <!-- {-- REPORTES Y HECHOS ESENCIALES --} -->
        <picture class="documentos__container documentos__container--dropdown">
            <img src="{{ asset('img/sudmedica_docs.png') }}" alt="Reportes y Hechos Esenciales" class="documentos__img">
            <div class="documentos__texto">
                <h1 class="documentos__texto__titulo">Reportes y Hechos Esenciales</h1>
                <button type="button" class="boton__documentos boton-dropdown"
                        aria-expanded="false" aria-controls="grupoDocumentos3"
                        data-dropdown-target="grupoDocumentos3">
                    Ver documentos <span class="dropdown-arrow" aria-hidden="true">▼</span>
                </button>
                <div class="dropdown-documentos" id="grupoDocumentos3">
                    <div class="dropdown-grupo">2026</div>
                    <a href="{{ route('REPORTE_OPERACIONES_CON_PARTES_RELACIONADAS_1ER_SEMESTRE_2026') }}">Operaciones con partes relacionadas - 1.er semestre 2026</a>
                    <div class="dropdown-grupo">2025</div>
                    <a href="{{ route('Reporte_Partes_Relacionadas') }}">Reporte partes relacionadas NCG501 - 1.er semestre 2025</a>
                    <a href="{{ route('reporte_2025') }}">Reporte 2025</a>
                    <div class="dropdown-grupo">2024</div>
                    <a href="{{ route('operacionesxlsx') }}">Operaciones con partes relacionadas - 2.º semestre 2024</a>
                    <div class="dropdown-grupo">Otros</div>
                    <a href="{{ route('hechoesencial14') }}">Hecho esencial N.º 14</a>
                </div>
            </div>
        </picture>

        <!-- {-- CANDIDATOS DIRECTORIO --} -->
        <picture class="documentos__container documentos__container--dropdown">
            <img src="{{ asset('img/sudmedica_docs.png') }}" alt="Candidatos Directorio" class="documentos__img">
            <div class="documentos__texto">
                <h1 class="documentos__texto__titulo">Candidatos Directorio</h1>
                <button type="button" class="boton__documentos boton-dropdown"
                        aria-expanded="false" aria-controls="grupoDocumentos4"
                        data-dropdown-target="grupoDocumentos4">
                    Ver documentos <span class="dropdown-arrow" aria-hidden="true">▼</span>
                </button>
                <div class="dropdown-documentos" id="grupoDocumentos4">
                    <div class="dropdown-grupo">Postulantes</div>
                    <a href="{{ route('cvRaulMedina') }}">CV - Raúl Medina</a>
                    <a href="{{ route('cvFernandoAravena') }}">CV - Fernando Aravena</a>
                    <a href="{{ route('cvGersonGarces') }}">CV - Gerson Garcés</a>
                    <a href="{{ route('cvAngelTrujillo') }}">CV - Ángel Trujillo</a>
                    <a href="{{ route('cvAlvaroBonich') }}">CV - Álvaro Bonich</a>
                    <a href="{{ route('cvFernandoAguilar') }}">CV - Fernando Aguilar</a>
                </div>
            </div>
        </picture>

        <!-- {-- OTROS DOCUMENTOS --} -->
        <picture class="documentos__container documentos__container--dropdown">
            <img src="{{ asset('img/sudmedica_docs.png') }}" alt="Otros Documentos" class="documentos__img">
            <div class="documentos__texto">
                <h1 class="documentos__texto__titulo">Otros Documentos</h1>
                <button type="button" class="boton__documentos boton-dropdown"
                        aria-expanded="false" aria-controls="grupoDocumentos5"
                        data-dropdown-target="grupoDocumentos5">
                    Ver documentos <span class="dropdown-arrow" aria-hidden="true">▼</span>
                </button>
                <div class="dropdown-documentos" id="grupoDocumentos5">
                    <div class="dropdown-grupo">Documentos</div>
                    <a href="{{ route('precioRecomiendaValorSudmedica') }}">Precio recomienda valor - Sudmédica</a>
                    <a href="{{ route('tasacion_urbana') }}">Tasación urbana</a>
                </div>
            </div>
        </picture>

    </div>

    @include('snipets.contacto')
    @include('volver_inicio')

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/contacto.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('[data-dropdown-target]').forEach(function (boton) {
                const dropdown = documUUUU(ent.getEleme8pppppppppppppppppppppppppppppppppppppppppppppppgfpuuuuuuuuuuoentById(boton.dataset.dropdownTarget);
                if (!dropdown) return;

                boton.addEventListener('click', function () {
                    const abierto = dropdown.classList.toggle('activo');
                    boton.classList.toggle('activo', abierto);
                    boton.setAttribute('aria-expanded', String(abierto));
                });
            });
        });
    </script>
</body>
</html>
