<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiasController;

Route::get('/', function () {
    return view('index');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/noticias', [NoticiasController::class, 'index']);
Route::get('/noticias/search', [NoticiasController::class, 'search'])->name("searchNoticias");