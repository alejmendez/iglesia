<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

use SEOMeta;
use OpenGraph;
use Twitter;
## or
use SEO;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, SEOToolsTrait;

    protected $use_seo = false;

    protected function view($vista, Array $variables = [])
	{
		if (!$this->use_seo) {
			$this->_seo();
        }

        /*
        $variables = array_merge([
			'controller' => $this,
			'usuario' => auth()->user()
        ], $variables);
        */

		return view($vista, $variables);
    }

    public function _seo($seo = []) {
		$this->use_seo = true;
		$url = url()->full();

		$_seo = [
			'title'       => config('seotools.meta.defaults.title'),
			'description' => config('seotools.meta.defaults.description'),
			'keywords'    => config('seotools.meta.defaults.keywords'),
			'image'       => url('public/img/modules/pagina/bg/10.jpg'),
			'url'         => $url,
		];

		$seo = array_merge($_seo, $seo);
		$seo['keywords'] = implode(', ', $seo['keywords']);

		$this->seo()->setTitle($seo['title']);
        $this->seo()->setDescription($seo['description']);

		SEOMeta::setKeywords($seo['keywords']);

        $this->seo()->opengraph()->setUrl($seo['url']);
		$this->seo()->opengraph()->setSiteName('Maria Campora Portafolio');
		//$this->seo()->opengraph()->addProperty('type', 'articles');
        $this->seo()->opengraph()->addImage($seo['image']);

		$this->seo()->twitter()->setSite(config('seotools.twitter.defaults.site'));
		$this->seo()->twitter()->addImage($seo['image']);
	}
}
