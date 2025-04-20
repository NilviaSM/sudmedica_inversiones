<?php

namespace App\Http\Controllers;
use App\Models\Noticias;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function index(){
        $noticias = Noticias::all()->first();
        return view("noticias", compact('noticias'));
    }

    public function search(Request $request){
        $q = $request->get("q");
        $querys = Noticias::where("titulo", "LIKE","%".$q."%")->get();
        $data = [];
        foreach($querys as $query){
            $data[] = [
                "label" => $query->titulo,
                "contenido" => $query->contenido,
                "image_path" => $query->image_path
            ];
        }
        return $data;
    }
}
