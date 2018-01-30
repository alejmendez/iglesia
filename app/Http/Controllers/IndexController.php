<?php

namespace App\Http\Controllers;

// modelos
use App\Evento;
use App\Testimonio;
use App\Post;

class IndexController extends Controller
{
    public function show()
    {
        $eventos     = Evento::take(3)->get();
        $posts       = Post::published()->take(3)->get();
        $testimonios = Testimonio::take(3)->get();

        return $this->view('index', [
            'eventos'     => $eventos,
            'posts'       => $posts,
            'testimonios' => $testimonios
        ]);
    }
}