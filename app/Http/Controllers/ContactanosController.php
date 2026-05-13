<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use App\Mail\ContactanosReturnMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class ContactanosController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nombre'   => 'required|string',
                'codigo_pais' => 'required|string',
                'telefono' => 'required|numeric',
                'email'    => 'required|email',
                'mensaje'  => 'required|string',
                'g-recaptcha-response' => 'required|string',
            ]);

            $recaptcha = $request->input('g-recaptcha-response');
            $secret = config('services.recaptcha.secret');

            if (empty($secret)) {
                Log::error('RECAPTCHA_SECRET_KEY no está configurada en el .env');

                return back()->withErrors([
                    'error' => 'No se pudo validar reCAPTCHA. Intenta más tarde.'
                ])->withInput();
            }

            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => $secret,
                'response' => $recaptcha,
                'remoteip' => $request->ip(),
            ]);

            $data = $response->json();

            Log::info('Respuesta reCAPTCHA', [
                'recaptcha_response' => $data,
                'ip' => $request->ip(),
            ]);

            if (!$response->successful()) {
                Log::error('Error consultando servicio de reCAPTCHA', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);

                return back()->withErrors([
                    'error' => 'No se pudo validar reCAPTCHA. Intenta nuevamente.'
                ])->withInput();
            }

            if (!isset($data['success']) || $data['success'] !== true) {
                return back()->withErrors([
                    'error' => 'Verificación reCAPTCHA fallida. Intenta de nuevo.'
                ])->withInput();
            }

            Mail::to('contactanos@sudmedica.com')
                ->send(new ContactanosMailable($request->all()));

            Mail::to($request->input('email'))
                ->send(new ContactanosReturnMailable());

            return back()->with('info', '¡Mensaje enviado con éxito!');

        } catch (TransportExceptionInterface $e) {
            report($e);

            return back()->withErrors([
                'error' => 'No se pudo enviar el correo. Intenta más tarde.'
            ])->withInput();

        } catch (\Throwable $e) {
            report($e);

            return back()->withErrors([
                'error' => 'Ocurrió un error inesperado.'
            ])->withInput();
        }
    }
}