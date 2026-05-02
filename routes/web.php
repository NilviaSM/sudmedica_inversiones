<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\ContactanosController;
use App\Mail\ContactanosMailable;
use App\Http\Middleware\SetLocale;

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
| RUTA PRINCIPAL FUERA DEL MIDDLEWARE
|--------------------------------------------------------------------------
| Esto permite comprobar si el 404 lo está provocando SetLocale.
*/
Route::get('/', function () {
    return view('index');
});

/*
|--------------------------------------------------------------------------
| RUTAS CON MIDDLEWARE DE IDIOMA
|--------------------------------------------------------------------------
*/
Route::middleware([SetLocale::class])->group(function () {

    Route::get('/nosotros', function () {
        return view('nosotros');
    });

    Route::get('/documentos', function () {
        return view('documentos');
    });

    Route::get('/resumen', function () {
        return view('resumen');
    })->name('resumen');

    Route::get('/sustentabilidad', function () {
        return view('sustentabilidad');
    });

    Route::get('/contacto', function () {
        return view('contacto');
    });

    Route::get('/noticias', [NoticiasController::class, 'index'])->name('noticias.index');
});

Route::get('/documentos/memoria25', function () {
    $filePath = public_path('documents/SUDMEDICA_MEMORIA_2025.pdf');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download($filePath, 'SUDMEDICA_MEMORIA_2025.pdf', ['Content-Type' => 'application/pdf']);
})->name('memoria2025Pdf');

Route::get('/documentos/memoria', function () {
    $filePath = public_path('documents/MEMORIA_2024_10.04.pdf');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download($filePath, 'MEMORIA_2024_10.04.pdf', ['Content-Type' => 'application/pdf']);
})->name('memoriaPdf');

Route::get('/documentos/jearmsi2025', function () {
    $filePath = public_path('documents/JEA_RMSI_2025.pdf');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download($filePath, 'JEA_RMSI_2025.pdf', ['Content-Type' => 'application/pdf']);
})->name('jearmsi2025');

Route::get('/documentos/jearmsi', function () {
    $filePath = public_path('documents/JEA_RMSI.pdf');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download($filePath, 'JEA_RMSI.pdf', ['Content-Type' => 'application/pdf']);
})->name('jearmsi');

Route::get('/documentos/tasacion_urbana', function () {
    $filePath = public_path('documents/tasacion_urbana.pdf');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download($filePath, 'tasacion_urbana.pdf', ['Content-Type' => 'application/pdf']);
})->name('tasacion_urbana');

Route::get('/documentos/Reporte_Partes_Relacionadas', function () {
    $filePath = public_path('documents/Reporte_Partes_Relacionadas_NCG501_Sem1_2025.xls');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download(
        $filePath,
        'Reporte_Partes_Relacionadas_NCG501_Sem1_2025.xls',
        ['Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet']
    );
})->name('Reporte_Partes_Relacionadas');

Route::get('/documentos/memoria2023', function () {
    $filePath = public_path('documents/MEMORIA_2023.pdf');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download($filePath, 'MEMORIA_2023.pdf', ['Content-Type' => 'application/pdf']);
})->name('memoria2023Pdf');

Route::get('/documentos/consolidadoPdf2025-2024', function () {
    $filePath = public_path('documents/EEFF_Consolidado_SudMedica_2023-2022.pdf');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download($filePath, 'EEFF_Consolidado_SudMedica_2023-2022.pdf', ['Content-Type' => 'application/pdf']);
})->name('consolidadoPdf2025-2024');

Route::get('/documentos/consolidado', function () {
    $filePath = public_path('documents/EEFF_Consolidado_SudMedica_2023-2022.pdf');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download($filePath, 'EEFF_Consolidado_SudMedica_2023-2022.pdf', ['Content-Type' => 'application/pdf']);
})->name('consolidadoPdf');

Route::get('/documentos/reporte_operaciones', function () {
    $filePath = public_path('documents/REPORTE_DE_OPERACIONES_CON_PARTES_RELACIONADAS_II_2024.xlsx');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download(
        $filePath,
        'REPORTE_DE_OPERACIONES_CON_PARTES_RELACIONADAS_II_2024.xlsx',
        ['Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet']
    );
})->name('operacionesxlsx');

Route::get('/documentos/citacion_jea', function () {
    $filePath = public_path('documents/CITACIÓN_JEA_17012026.pdf');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download($filePath, 'CITACIÓN_JEA_17012026.pdf', ['Content-Type' => 'application/pdf']);
})->name('citacionjea');

Route::get('/documentos/poder_ja', function () {
    $filePath = public_path('documents/Poder_JA.docx');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download(
        $filePath,
        'PODER_JA.docx',
        ['Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document']
    );
})->name('poderjadocx');

Route::get('/documentos/hecho_esencial_14', function () {
    $filePath = public_path('documents/Hecho_Esencial_No_14.pdf');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download($filePath, 'Hecho_Esencial_No_14.pdf', ['Content-Type' => 'application/pdf']);
})->name('hechoesencial14');

Route::get('/documentos/reporte_2025', function () {
    $filePath = public_path('documents/reporte_2025.xlsx');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download(
        $filePath,
        'reporte_2025.xlsx',
        ['Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet']
    );
})->name('reporte_2025');

Route::get('/contactanos', function () {
    Mail::to('contacto@sudmedica.com')->send(new ContactanosMailable);
    return 'Mensaje enviado';
});

Route::post('/contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

Route::get('/noticias/add', [NoticiasController::class, 'store_form'])->name('noticias.store');
Route::post('/noticias/add', [NoticiasController::class, 'store'])->name('noticias.store');
Route::get('/noticias/search', [NoticiasController::class, 'search'])->name('searchNoticias');