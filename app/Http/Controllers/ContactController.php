<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Laat het formulier zien
    public function showForm()
    {
        return view('contact');
    }

    // Verwerk het formulier
    public function sendContact(Request $request)
    {
        // Validatie
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:50',
            'phone' => 'nullable|string|max:10',
            'message' => 'required|string',
        ]);

        $data['phone'] = $data['phone'] ?? 'Niet opgegeven';

        // Verstuur e-mail
        Mail::raw(
            "Naam: {$data['name']}\nE-mail: {$data['email']}\nTelefoon: {$data['phone']}\n\nBericht:\n{$data['message']}",
            function ($message) use ($data) {
//                andere mail verandere dit test
                $message->to('wesselvanos2004@gmail.com')
                    ->subject("Nieuw contactformulier bericht van {$data['name']}")
                    ->replyTo($data['email']);
            }
        );

        // Terug naar contactpagina met alert
        return redirect()->route('contact.form')->with('success', 'Het is gelukt!');
    }
}
