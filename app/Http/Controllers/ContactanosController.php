<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use App\Mail\ContactanosReturnMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class ContactanosController extends Controller
{
    public function store(Request $request)
    {
        try {

            $request->validate([
                'nombre'   => 'required|string',
                'telefono' => 'required|string',
                'email'    => 'required|email',
                'mensaje'  => 'required|string',
            ]);

            Mail::to('contacto@sudmedica.com')
                ->send(new ContactanosMailable($request->all()));

            Mail::to($request->email)
                ->send(new ContactanosReturnMailable());

            return back()->with('info', '¡Mensaje enviado con éxito!');

        } catch (TransportExceptionInterface $e) {
            report($e);
            // 🚨 Error SMTP (credenciales, servidor, conexión)
            return back()->withErrors([
                'error' => 'No se pudo enviar el correo. Intenta más tarde.'
            ]);

        } catch (\Throwable $e) {
            // 🚨 Cualquier otro error (PHP, Laravel, lógica)
            report($e); // 👈 guarda el error en logs
            return back()->withErrors([
                'error' => 'Ocurrió un error inesperado.'
            ]);
        }
    }
}

