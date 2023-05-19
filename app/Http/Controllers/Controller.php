<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Symfony\Component\HttpFoundation\Session\Session;

use App\Http\Models\Content;
use App\Http\Traits\PropertyTrait;

use Illuminate\Routing\Controller 
as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use PropertyTrait;
//
    public function __construct(){
        $session = new Session();
        $sitelocale = $session->get('sitelocale')?$session->get('sitelocale'):'en';
        $translations = Content::all();

        $contentTranslations = [];
        foreach($translations as $tran){ 
            $contentTranslations[$tran->content_key] = $tran->getAttribute('title:'.$sitelocale);
        }

        $rent_count = count($this->getPropertyList('rent'));
        $sale_count = count($this->getPropertyList('sale'));

        View::share('translations', $contentTranslations);
        View::share('rent_count', $rent_count);
        View::share('sale_count', $sale_count);
    }
}
