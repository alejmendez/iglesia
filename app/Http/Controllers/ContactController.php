<?php

namespace App\Http\Controllers;


class ContactController extends Controller
{
    public function show()
    {
        if (request()->ajax()) {
            return [
                'error'   => true,
                'message' => 'Error, correo electrónico no enviado.'
            ];

            return [
                'success' => true,
                'message' => 'Gracias. Tu mensaje ha sido enviado.'
            ];
        }

        return $this->view('contact');
    }
}