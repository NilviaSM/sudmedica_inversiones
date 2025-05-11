<?php

namespace App\Http\Controllers;
use App\Models\Noticias;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale(); // Obtener el idioma actual

        if ($locale === 'en') {
            // Mostrar los campos en inglés
            $noticias = Noticias::select('titulo_ingles as titulo', 'contenido_ingles as contenido', 'image_path')
                ->latest()
                ->first();
        } else {
            // Mostrar los campos en el idioma por defecto
            $noticias = Noticias::select('titulo', 'contenido', 'image_path')
                ->latest()
                ->first();
        }

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

    public function store_form(){
        return view("noticias_add");
    }

    public function store(Request $request){
    // Validar los datos del formulario
    $validatedData = $request->validate([
        'titulo' => 'required|string|max:255',
        'contenido' => 'required|string',
        'titulo_ingles' => 'required|string|max:255', 
        'contenido_ingles' => 'required|string',
        'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validar que sea una imagen
    ]);

    // Subir la imagen al almacenamiento público
    $imageName = time() . '_' . $request->file('image_path')->getClientOriginalName(); // Generar un nombre único
    $request->file('image_path')->move(public_path('img/noticias'), $imageName);

    // Crear una nueva noticia
    $noticia = Noticias::create([
        'titulo' => $validatedData['titulo'],
        'contenido' => $validatedData['contenido'],
        'titulo_ingles' => $validatedData['titulo_ingles'],
        'contenido_ingles' => $validatedData['contenido_ingles'],
        'image_path' => 'img/noticias/' . $imageName, // Guardar la ruta relativa en la base de datos
    ]);

    // Redirigir con un mensaje de éxito
    return redirect()->route('noticias.index')->with('success', 'Noticia creada exitosamente.');
}
}
