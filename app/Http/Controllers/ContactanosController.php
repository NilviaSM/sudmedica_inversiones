<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use App\Mail\ContactanosReturnMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;
use Swift_TransportException;


class ContactanosController extends Controller
{
    public function store(Request $request){
        try{

            $request->validate([
                'nombre' => 'required|string',
                'telefono' => 'required|string',
                'email' => 'required|email',
            ]);

            Mail::to("contacto@sudmedica.com")->send(new ContactanosMailable($request->all()));
            Mail::to($request['email'])->send(new ContactanosReturnMailable());
            session()->flash('info', '¡Mensaje enviado con éxito!');
            return redirect()->back();
        } 
        catch (Swift_TransportException $e) {
            // Captura errores relacionados con el transporte de correos
            return redirect()->back()->withErrors(['error' => 'No se pudo enviar el correo. Problema con el servidor de correo.']);
        } catch (\Exception $e) {
            // Captura cualquier otro error
            return redirect()->back()->withErrors(['error' => 'Ocurrió un error inesperado. Inténtalo nuevamente.']);
        }
        
    }
}
