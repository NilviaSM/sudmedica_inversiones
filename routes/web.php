<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\ContactanosController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\App;
use App\Http\Middleware\SetLocale;


Route::get('/change-language/{locale}', function (string $locale) {
    if (!in_array($locale, ['en', 'es'])) {
        abort(400);
    }

    // Guardar el idioma en la sesión
    session(['locale' => $locale]);

    // Establecer el idioma para la solicitud actual
    App::setLocale($locale);

    // Redirigir a la página anterior
    return redirect()->back();
})->name('change-language');

Route::middleware([SetLocale::class])->group(function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/nosotros', function () {
        return view('nosotros');
    });

    Route::get('/noticias', function () {
        return view('noticias.index');
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

Route::get('/documentos/memoria', function () {
    $filePath = public_path('documents/MEMORIA_2024_10.04.pdf');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download($filePath, "MEMORIA_2024_10.04.pdf", ['Content-Type'=>'application/pdf']);
})->name("memoriaPdf");

Route::get('/documentos/jearmsi2025', function () {
    $filePath = public_path('documents/JEA_RMSI_2025.pdf');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download($filePath, "JEA_RMSI_2025.pdf", ['Content-Type'=>'application/pdf']);
})->name("jearmsi2025");

Route::get('/documentos/jearmsi', function () {
    $filePath = public_path('documents/JEA_RMSI.pdf');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download($filePath, "JEA_RMSI.pdf", ['Content-Type'=>'application/pdf']);
})->name("jearmsi");



Route::get('/documentos/Reporte_Partes_Relacionadas', function () {
    $filePath = public_path('documents/Reporte_Partes_Relacionadas_NCG501_Sem1_2025.xls');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download($filePath, "Reporte_Partes_Relacionadas_NCG501_Sem1_2025.xls", ['Content-Type'=>'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet']);
})->name("Reporte_Partes_Relacionadas");






Route::get('/documentos/memoria2023', function () {
    $filePath = public_path('documents/MEMORIA_2023.pdf');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download($filePath, "MEMORIA_2023.pdf", ['Content-Type'=>'application/pdf']);
})->name("memoria2023Pdf");

Route::get('/documentos/consolidado', function () {
    $filePath = public_path('documents/EEFF_Consolidado_SudMedica_2023-2022.pdf');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download($filePath, "EEFF_Consolidado_SudMedica_2023-2022.pdf", ['Content-Type'=>'application/pdf']);
})->name("consolidadoPdf");


Route::get('/documentos/reporte_operaciones', function () {
    $filePath = public_path('documents/REPORTE_DE_OPERACIONES_CON_PARTES_RELACIONADAS_II_2024.xlsx');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download($filePath, "REPORTE_DE_OPERACIONES_CON_PARTES_RELACIONADAS_II_2024.xlsx", ['Content-Type'=>'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet']);
})->name("operacionesxlsx");

Route::get('/contactanos', function(){
    Mail::to('contacto@sudmedica.com')->send(new ContactanosMailable);
    return "Mensaje enviado";
});

Route::post('/contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');


Route::get('/noticias/add', [NoticiasController::class, 'store_form'])->name('noticias.store');
Route::post('/noticias/add', [NoticiasController::class, 'store'])->name('noticias.store');
Route::get('/noticias/search', [NoticiasController::class, 'search'])->name("searchNoticias");
