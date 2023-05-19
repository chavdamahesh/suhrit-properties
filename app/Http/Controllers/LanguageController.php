<?php
/**
 * File LaravelController.php
 *
 * @author Tuan Duong <bacduong@gmail.com>
 * @package Laravue
 * @version 1.0
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use URL;

class LanguageController extends Controller
{
	public function setLocale($locale='en'){
	    if (!in_array($locale, ['en', 'fr'])){
	        $locale = 'en';
	    }

		//to set a session variable use
		$session = new Session();
		$session->set('sitelocale', $locale);

	    //print Session::get('locale');
	    //exit;
	    return redirect(url(URL::previous()));
    }
}