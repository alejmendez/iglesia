<?php

namespace App\Http\Controllers\Voyager;

use TCG\Voyager\Http\Controllers\VoyagerBreadController as BaseVoyagerBreadController;
use Illuminate\Http\Request;

class VoyagerBreadController extends BaseVoyagerBreadController
{
    public function insertUpdateData($request, $slug, $rows, $data)
    {
        $slug = $this->getSlug($request);
        $data = parent::insertUpdateData($request, $slug, $rows, $data);

        if ($slug == 'posts' && $request->tags) {
            $data->retag($request->tags);
        }

        return $data;
    }
}
