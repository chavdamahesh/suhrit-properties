<?php
/**
 * File LaravelController.php
 *
 * @author Tuan Duong <bacduong@gmail.com>
 * @package Laravue
 * @version 1.0
 */

namespace App\Http\Controllers;

use App\Http\Models\Property;
use App\Http\Models\Location;
use App\Http\Models\Block;

use App;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Http\Traits\PropertyTrait;

/**
 * Class LaravueController
 *
 * @package App\Http\Controllers
 */
class IndexController extends Controller
{
    use PropertyTrait;
    /**
     * Entry point for Laravue Dashboard
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //to get that session variable
        $session = new Session();
        $sitelocale = $session->get('sitelocale');
    	$featured = $this->getProperties(true);
        // print_r($featured->toArray());die();
    	$allProperties = $this->getProperties();
        $locations = Location::all(['id', 'name'])->toArray();
        $blocks = Block::all();
        return view('pages.home', compact('featured', 'allProperties', 'locations', 'blocks', 'sitelocale'));
    }


        public function show()
    {
        //to get that session variable
        $session = new Session();
        $sitelocale = $session->get('sitelocale');
        $featured = $this->getProperties(true);
        $allProperties = $this->getProperties();
        $locations = Location::all(['id', 'name'])->toArray();
        $blocks = Block::all();
        return view('home-2.view', compact('featured', 'allProperties', 'locations', 'blocks', 'sitelocale'));
    }
}
