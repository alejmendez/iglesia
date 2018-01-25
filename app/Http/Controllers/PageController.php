<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return $this->view('index');
    }

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