<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:120'],
            'phone' => ['nullable', 'string', 'max:50'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        try {
            Mail::raw(
                "Nombre: {$data['name']}\n" .
                "Email: {$data['email']}\n" .
                "Teléfono: " . ($data['phone'] ?? '-') . "\n\n" .
                "Mensaje:\n{$data['message']}",
                function ($mail) use ($data) {
                    $mail->to('nicolasfigueredo@hotmail.com')
                         ->subject('Nueva consulta desde la web - Infonic')
                         ->replyTo($data['email'], $data['name']);
                }
            );

            return redirect('/#contacto')->with('success', 'Tu consulta fue enviada correctamente.');
        } catch (\Exception $e) {
            \Log::error('Mail error: ' . $e->getMessage());
            return redirect('/#contacto')->withInput()->with('error', 'Hubo un problema al enviar el mensaje. Por favor intentá de nuevo o contactanos por WhatsApp.');
        }
    }
}