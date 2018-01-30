<?php

namespace App\Http\Controllers;

// modelos
use App\Evento;
use App\Testimonio;
use \TCG\Voyager\Models\Page;

class PageController extends Controller
{
    public function show()
    {
        $slug = request()->segment(1);
        $page = \TCG\Voyager\Models\Page::where('slug', $slug)
            ->firstOrFail();

        return $this->view('show-page', [
            'page' => $page,
        ]);
    }
}