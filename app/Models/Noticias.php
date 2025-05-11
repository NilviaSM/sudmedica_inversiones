<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    protected $fillable = [
        'titulo',
        'contenido',
        'titulo_ingles',
        'contenido_ingles',
        'image_path',
    ];
}
