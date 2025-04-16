<?php

namespace App\Http\Controllers;
use App\Models\Noticias;

class NoticiasController extends Controller
{
    public function index(){
        $noticias = Noticias::all()->first();
        return view("noticias", compact('noticias'));
    }
}
