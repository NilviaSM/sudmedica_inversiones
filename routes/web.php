<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});
