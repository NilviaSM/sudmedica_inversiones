<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // Obtener el idioma de la sesión o usar el predeterminado
        $locale = session('locale', config('app.locale'));

        // Establecer el idioma
        App::setLocale($locale);

        return $next($request);
    }
}
