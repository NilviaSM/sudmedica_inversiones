<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiasController;

Route::get('/', function () {
    return view('index');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/documentos', function () {
    return view('documentos');
});

Route::get('/contacto', function () {
    return view('contacto');
});


Route::get('/documentos/memoria', function () {
    $filePath = public_path('documents/Lorem_Ipsum.pdf');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download($filePath, "memoria.pdf", ['Content-Type'=>'application/pdf']);
})->name("memoriaPdf");

Route::get('/documentos/consolidado', function () {
    $filePath = public_path('documents/Lorem_Ipsum.pdf');
    if (!file_exists($filePath)) {
        abort(404, 'El archivo no existe.');
    }

    return response()->download($filePath, "EEFF_consolidado.pdf", ['Content-Type'=>'application/pdf']);
})->name("consolidadoPdf");

Route::get('/noticias', [NoticiasController::class, 'index']);
Route::get('/noticias/search', [NoticiasController::class, 'search'])->name("searchNoticias");