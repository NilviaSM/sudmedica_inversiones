<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\ContactanosController;
use App\Mail\ContactanosMailable;
use App\Http\Middleware\SetLocale;

/*
|--------------------------------------------------------------------------
| Helpers de descarga
|--------------------------------------------------------------------------
*/

if (!function_exists('descargarDocumento')) {
    function descargarDocumento(string $path, string $downloadName, string $contentType)
    {
        $filePath = public_path($path);

        if (!file_exists($filePath)) {
            abort(404, 'El archivo no existe.');
        }

        return response()->download($filePath, $downloadName, [
            'Content-Type' => $contentType,
        ]);
    }
}

/*
|--------------------------------------------------------------------------
| Cambio de idioma
|--------------------------------------------------------------------------
*/

Route::get('/change-language/{locale}', function (string $locale) {
    if (!in_array($locale, ['en', 'es'])) {
        abort(400);
    }

    session(['locale' => $locale]);
    App::setLocale($locale);

    return redirect()->back();
})->name('change-language');

/*
|--------------------------------------------------------------------------
| Ruta principal
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('index');
})->name('inicio');

/*
|--------------------------------------------------------------------------
| Rutas con middleware de idioma
|--------------------------------------------------------------------------
*/

Route::middleware([SetLocale::class])->group(function () {
    Route::get('/nosotros', function () {
        return view('nosotros');
    })->name('nosotros');

    Route::get('/documentos', function () {
        return view('documentos');
    })->name('documentos');

    Route::get('/resumen', function () {
        return view('resumen');
    })->name('resumen');

    Route::get('/sustentabilidad', function () {
        return view('sustentabilidad');
    })->name('sustentabilidad');

    Route::get('/contacto', function () {
        return view('contacto');
    })->name('contacto');

    Route::get('/noticias', [NoticiasController::class, 'index'])->name('noticias.index');
});

/*
|--------------------------------------------------------------------------
| Documentos - Estados Financieros Anuales
|--------------------------------------------------------------------------
*/

Route::get('/documentos/consolidadoPdf2025-2024', function () {
    return descargarDocumento(
        'documents/EEFF_Consolidado_SudMedica_2023-2022.pdf',
        'EEFF_Consolidado_SudMedica_2023-2022.pdf',
        'application/pdf'
    );
})->name('consolidadoPdf2025-2024');

Route::get('/documentos/consolidado', function () {
    return descargarDocumento(
        'documents/EEFF_Consolidado_SudMedica_2023-2022.pdf',
        'EEFF_Consolidado_SudMedica_2023-2022.pdf',
        'application/pdf'
    );
})->name('consolidadoPdf');

/*
|--------------------------------------------------------------------------
| Documentos - Memorias Anuales
|--------------------------------------------------------------------------
*/

Route::get('/documentos/memoria25', function () {
    return descargarDocumento(
        'documents/SUDMEDICA_MEMORIA_2025.pdf',
        'SUDMEDICA_MEMORIA_2025.pdf',
        'application/pdf'
    );
})->name('memoria2025Pdf');

Route::get('/documentos/memoria', function () {
    return descargarDocumento(
        'documents/MEMORIA_2024_10.04.pdf',
        'MEMORIA_2024_10.04.pdf',
        'application/pdf'
    );
})->name('memoriaPdf');

Route::get('/documentos/memoria2023', function () {
    return descargarDocumento(
        'documents/MEMORIA_2023.pdf',
        'MEMORIA_2023.pdf',
        'application/pdf'
    );
})->name('memoria2023Pdf');

/*
|--------------------------------------------------------------------------
| Documentos - Actas / Juntas de Accionistas
|--------------------------------------------------------------------------
*/

Route::get('/documentos/jearmsi2025', function () {
    return descargarDocumento(
        'documents/JEA_RMSI_2025.pdf',
        'JEA_RMSI_2025.pdf',
        'application/pdf'
    );
})->name('jearmsi2025');

Route::get('/documentos/jearmsi', function () {
    return descargarDocumento(
        'documents/JEA_RMSI.pdf',
        'JEA_RMSI.pdf',
        'application/pdf'
    );
})->name('jearmsi');

Route::get('/documentos/citacion_jea', function () {
    return descargarDocumento(
        'documents/CITACIÓN_JEA_17012026.pdf',
        'CITACIÓN_JEA_17012026.pdf',
        'application/pdf'
    );
})->name('citacionjea');

Route::get('/documentos/poder_ja', function () {
    return descargarDocumento(
        'documents/Poder_JA.docx',
        'PODER_JA.docx',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
    );
})->name('poderjadocx');

Route::get('/documentos/citacion-joa-052026', function () {
    return descargarDocumento(
        'documents/CITACION-JOA052026.pdf',
        'CITACION-JOA052026.pdf',
        'application/pdf'
    );
})->name('citacionJOA052026');

Route::get('/documentos/public/documents/REPORTE_OPERACIONES_CON_PARTES_RELACIONADAS_1ER_SEMESTRE_2026', function () {
    return descargarDocumento(
        'documents/public/documents/REPORTE_OPERACIONES_CON_PARTES_RELACIONADAS_1ER_SEMESTRE_2026.xlsx.',
        'public/documents/REPORTE_OPERACIONES_CON_PARTES_RELACIONADAS_1ER_SEMESTRE_2026.xlsx',
        'application/xlsx'
    );
})->name('REPORTE_OPERACIONES_CON_PARTES_RELACIONADAS_1ER_SEMESTRE_2026');

Route::get('/documentos/poder-joa-16052026', function () {
    return descargarDocumento(
        'documents/PODER _JOA_16052026.pdf',
        'PODER _JOA_16052026.pdf',
        'application/pdf'
    );
})->name('poderJOA16052026');

/*
|--------------------------------------------------------------------------
| Documentos - Candidatos Directorio
|--------------------------------------------------------------------------
| Archivos físicos esperados en:
| public/documents/
|--------------------------------------------------------------------------
*/

Route::get('/documentos/candidatos-directorio/cv-raul-medina', function () {
    return descargarDocumento(
        'documents/CV_RAUL_MEDINA.pdf',
        'CV - Raul Medina.pdf',
        'application/pdf'
    );
})->name('cvRaulMedina');

Route::get('/documentos/candidatos-directorio/cv-fernando-aravena', function () {
    return descargarDocumento(
        'documents/CV_FERNANDO_ARAVENA.pdf',
        'CV - Fernando Aravena.pdf',
        'application/pdf'
    );
})->name('cvFernandoAravena');

Route::get('/documentos/candidatos-directorio/cv-gerson-garces', function () {
    return descargarDocumento(
        'documents/CV_GERSON_GARCES.pdf',
        'CV - Gerson Garces.pdf',
        'application/pdf'
    );
})->name('cvGersonGarces');

Route::get('/documentos/candidatos-directorio/cv-angel-trujillo', function () {
    return descargarDocumento(
        'documents/CV_ANGEL_TRUJILLO.pdf',
        'CV - Angel Trujillo.pdf',
        'application/pdf'
    );
})->name('cvAngelTrujillo');

Route::get('/documentos/candidatos-directorio/cv-alvaro-bonich', function () {
    return descargarDocumento(
        'documents/CV_ALVARO_BONICH.pdf',
        'CV - Alvaro Bonich.pdf',
        'application/pdf'
    );
})->name('cvAlvaroBonich');

Route::get('/documentos/candidatos-directorio/cv-fernando-aguilar', function () {
    return descargarDocumento(
        'documents/CV_FERNANDO_AGUILAR.pdf',
        'CV - Fernando Aguilar.pdf',
        'application/pdf'
    );
})->name('cvFernandoAguilar');

/*
|--------------------------------------------------------------------------
| Compatibilidad - URLs antiguas/directas de candidatos
|--------------------------------------------------------------------------
| Esto evita 404 si quedó algún enlace con:
| /documentos/candidatos-directorio/CV_RAUL_MEDINA.pdf
|--------------------------------------------------------------------------
*/

Route::get('/documentos/candidatos-directorio/CV_RAUL_MEDINA.pdf', function () {
    return redirect()->route('cvRaulMedina');
});

Route::get('/documentos/candidatos-directorio/CV_FERNANDO_ARAVENA.pdf', function () {
    return redirect()->route('cvFernandoAravena');
});

Route::get('/documentos/candidatos-directorio/CV_GERSON_GARCES.pdf', function () {
    return redirect()->route('cvGersonGarces');
});

Route::get('/documentos/candidatos-directorio/CV_ANGEL_TRUJILLO.pdf', function () {
    return redirect()->route('cvAngelTrujillo');
});

Route::get('/documentos/candidatos-directorio/CV_ALVARO_BONICH.pdf', function () {
    return redirect()->route('cvAlvaroBonich');
});

Route::get('/documentos/candidatos-directorio/CV_FERNANDO_AGUILAR.pdf', function () {
    return redirect()->route('cvFernandoAguilar');
});

/*
|--------------------------------------------------------------------------
| Documentos - Otros
|--------------------------------------------------------------------------
*/

Route::get('/documentos/tasacion_urbana', function () {
    return descargarDocumento(
        'documents/tasacion_urbana.pdf',
        'tasacion_urbana.pdf',
        'application/pdf'
    );
})->name('tasacion_urbana');

Route::get('/documentos/hecho_esencial_14', function () {
    return descargarDocumento(
        'documents/Hecho_Esencial_No_14.pdf',
        'Hecho_Esencial_No_14.pdf',
        'application/pdf'
    );
})->name('hechoesencial14');

Route::get('/documentos/Reporte_Partes_Relacionadas', function () {
    return descargarDocumento(
        'documents/Reporte_Partes_Relacionadas_NCG501_Sem1_2025.xls',
        'Reporte_Partes_Relacionadas_NCG501_Sem1_2025.xls',
        'application/vnd.ms-excel'
    );
})->name('Reporte_Partes_Relacionadas');

Route::get('/documentos/reporte_operaciones', function () {
    return descargarDocumento(
        'documents/REPORTE_DE_OPERACIONES_CON_PARTES_RELACIONADAS_II_2024.xlsx',
        'REPORTE_DE_OPERACIONES_CON_PARTES_RELACIONADAS_II_2024.xlsx',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
    );
})->name('operacionesxlsx');

Route::get('/documentos/reporte_2025', function () {
    return descargarDocumento(
        'documents/reporte_2025.xlsx',
        'reporte_2025.xlsx',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
    );
})->name('reporte_2025');

/*
|--------------------------------------------------------------------------
| Contacto
|--------------------------------------------------------------------------
*/

Route::get('/contactanos', function () {
    Mail::to('contacto@sudmedica.com')->send(new ContactanosMailable);
    return 'Mensaje enviado';
});

Route::post('/contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

/*
|--------------------------------------------------------------------------
| Noticias
|--------------------------------------------------------------------------
*/

Route::get('/noticias/add', [NoticiasController::class, 'store_form'])->name('noticias.store.form');
Route::post('/noticias/add', [NoticiasController::class, 'store'])->name('noticias.store');
Route::get('/noticias/search', [NoticiasController::class, 'search'])->name('searchNoticias');