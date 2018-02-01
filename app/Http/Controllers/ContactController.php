<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\Contact;


class ContactController extends Controller
{
    public function show()
    {
        return $this->view('contact');
    }

    public function send(Request $request)
    {
        $respuesta = Mail::to('alejmendez.87@gmail.com')
            ->send(new Contact([
                'name'    => $request->name,
                'email'   => $request->email,
                'message' => $request->message,
            ]));
        dd($respuesta);
        return [
            'error'   => true,
            'message' => 'Error, correo electrónico no enviado.'
        ];

        return [
            'success' => true,
            'message' => 'Gracias. Tu mensaje ha sido enviado.'
        ];
    }
}