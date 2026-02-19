<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\ContactanosController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\App;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Idioma
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
| Vistas públicas (con locale)
|--------------------------------------------------------------------------
*/
Route::middleware([SetLocale::class])->group(function () {
    Route::get('/', fn () => view('index'));
    Route::get('/nosotros', fn () => view('nosotros'));

    // ✅ Evitar duplicidad: dejamos SOLO el controller
    Route::get('/noticias', [NoticiasController::class, 'index'])->name('noticias.index');

    Route::get('/documentos', fn () => view('documentos'));
    Route::get('/resumen', fn () => view('resumen'))->name('resumen');
    Route::get('/sustentabilidad', fn () => view('sustentabilidad'));
    Route::get('/contacto', fn () => view('contacto'));
});

/*
|--------------------------------------------------------------------------
| Descargas - Documentos (alineado a /public/documents)
|--------------------------------------------------------------------------
*/
Route::get('/documentos/memoria', function () {
    $filePath = public_path('documents/MEMORIA_2024_10.04.pdf');
    if (!file_exists($filePath)) abort(404, 'El archivo no existe.');

    return response()->download($filePath, 'MEMORIA_2024_10.04.pdf', [
        'Content-Type' => 'application/pdf'
    ]);
})->name('memoriaPdf');

Route::get('/documentos/jearmsi2025', function () {
    $filePath = public_path('documents/JEA_RMSI_2025.pdf');
    if (!file_exists($filePath)) abort(404, 'El archivo no existe.');

    return response()->download($filePath, 'JEA_RMSI_2025.pdf', [
        'Content-Type' => 'application/pdf'
    ]);
})->name('jearmsi2025');

Route::get('/documentos/jearmsi', function () {
    $filePath = public_path('documents/JEA_RMSI.pdf');
    if (!file_exists($filePath)) abort(404, 'El archivo no existe.');

    return response()->download($filePath, 'JEA_RMSI.pdf', [
        'Content-Type' => 'application/pdf'
    ]);
})->name('jearmsi');

Route::get('/documentos/tasacion_urbana', function () {
    $filePath = public_path('documents/tasacion_urbana.pdf');
    if (!file_exists($filePath)) abort(404, 'El archivo no existe.');

    return response()->download($filePath, 'tasacion_urbana.pdf', [
        'Content-Type' => 'application/pdf'
    ]);
})->name('tasacion_urbana');

/*
|--------------------------------------------------------------------------
| NCG501 - Sem1 (archivo real existente)
|--------------------------------------------------------------------------
*/
Route::get('/documentos/Reporte_Partes_Relacionadas', function () {
    $filePath = public_path('documents/Reporte_Partes_Relacionadas_NCG501_Sem1_2025.xls');
    if (!file_exists($filePath)) abort(404, 'El archivo no existe.');

    return response()->download(
        $filePath,
        'Reporte_Partes_Relacionadas_NCG501_Sem1_2025.xls',
        ['Content-Type' => 'application/vnd.ms-excel']
    );
})->name('Reporte_Partes_Relacionadas');

Route::get('/documentos/memoria2023', function () {
    $filePath = public_path('documents/MEMORIA_2023.pdf');
    if (!file_exists($filePath)) abort(404, 'El archivo no existe.');

    return response()->download($filePath, 'MEMORIA_2023.pdf', [
        'Content-Type' => 'application/pdf'
    ]);
})->name('memoria2023Pdf');

Route::get('/documentos/consolidado', function () {
    $filePath = public_path('documents/EEFF_Consolidado_SudMedica_2023-2022.pdf');
    if (!file_exists($filePath)) abort(404, 'El archivo no existe.');

    return response()->download($filePath, 'EEFF_Consolidado_SudMedica_2023-2022.pdf', [
        'Content-Type' => 'application/pdf'
    ]);
})->name('consolidadoPdf');

Route::get('/documentos/reporte_operaciones', function () {
    $filePath = public_path('documents/REPORTE_DE_OPERACIONES_CON_PARTES_RELACIONADAS_II_2024.xlsx');
    if (!file_exists($filePath)) abort(404, 'El archivo no existe.');

    return response()->download(
        $filePath,
        'REPORTE_DE_OPERACIONES_CON_PARTES_RELACIONADAS_II_2024.xlsx',
        ['Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet']
    );
})->name('operacionesxlsx');

/*
|--------------------------------------------------------------------------
| CITACIÓN JEA (con acento en el nombre real del archivo)
|--------------------------------------------------------------------------
| ⚠️ Si en Linux/producción el acento da problemas, renombre el archivo sin acentos
|    y ajuste esta ruta. En Windows suele funcionar igual.
*/
Route::get('/documentos/citacion_jea', function () {
    $filePath = public_path('documents/CITACIÓN_JEA_17012026.pdf');
    if (!file_exists($filePath)) abort(404, 'El archivo no existe.');

    return response()->download(
        $filePath,
        'CITACIÓN_JEA_17012026.pdf',
        ['Content-Type' => 'application/pdf']
    );
})->name('citacionjea');

Route::get('/documentos/poder_ja', function () {
    $filePath = public_path('documents/Poder_JA.docx');
    if (!file_exists($filePath)) abort(404, 'El archivo no existe.');

    return response()->download(
        $filePath,
        'Poder_JA.docx',
        ['Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document']
    );
})->name('poderjadocx');

Route::get('/documentos/hecho_esencial_14', function () {
    $filePath = public_path('documents/Hecho_Esencial_No_14.pdf');
    if (!file_exists($filePath)) abort(404, 'El archivo no existe.');

    return response()->download($filePath, 'Hecho_Esencial_No_14.pdf', [
        'Content-Type' => 'application/pdf'
    ]);
})->name('hechoesencial14');

/*
|--------------------------------------------------------------------------
| "Reporte de Operaciones con Partes Relacionadas 2025"
|--------------------------------------------------------------------------
| ✅ según carpeta: reporte_2025.xlsx
*/
Route::get('/documentos/reporte_2025', function () {
    $filePath = public_path('documents/reporte_2025.xlsx');
    if (!file_exists($filePath)) abort(404, 'El archivo no existe.');

    return response()->download(
        $filePath,
        'reporte_2025.xlsx',
        ['Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet']
    );
})->name('reporte_2025');

/*
|--------------------------------------------------------------------------
| RESUMEN NCG501 (para la vista nueva)
|--------------------------------------------------------------------------
| - Primer Semestre 2025: archivo Sem1 real
| - Segundo Semestre 2025: mientras NO exista un archivo Sem2 en /documents,
|   apuntamos al archivo real disponible "reporte_2025.xlsx" para evitar 404.
|--------------------------------------------------------------------------
*/
Route::get('/resumen/ncg501/primer-semestre-2025', function () {
    $filePath = public_path('documents/Reporte_Partes_Relacionadas_NCG501_Sem1_2025.xls');
    if (!file_exists($filePath)) abort(404, 'El archivo no existe.');

    return response()->download(
        $filePath,
        'Reporte_Partes_Relacionadas_NCG501_Sem1_2025.xls',
        ['Content-Type' => 'application/vnd.ms-excel']
    );
})->name('resumen_ncg501_primer_semestre_2025');

Route::get('/resumen/ncg501/segundo-semestre-2025', function () {
    // ✅ Hoy: el único archivo 2025 disponible en /documents es "reporte_2025.xlsx"
    $filePath = public_path('documents/reporte_2025.xlsx');
    if (!file_exists($filePath)) abort(404, 'El archivo no existe.');

    return response()->download(
        $filePath,
        'reporte_2025.xlsx',
        ['Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet']
    );
})->name('resumen_ncg501_segundo_semestre_2025');

/*
|--------------------------------------------------------------------------
| Contacto
|--------------------------------------------------------------------------
*/
Route::get('/contactanos', function () {
    Mail::to('contacto@sudmedica.com')->send(new ContactanosMailable);
    return "Mensaje enviado";
});

Route::post('/contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

/*
|--------------------------------------------------------------------------
| Noticias - Admin/Search
|--------------------------------------------------------------------------
*/
Route::get('/noticias/add', [NoticiasController::class, 'store_form'])->name('noticias.store_form');
Route::post('/noticias/add', [NoticiasController::class, 'store'])->name('noticias.store');
Route::get('/noticias/search', [NoticiasController::class, 'search'])->name('searchNoticias');
