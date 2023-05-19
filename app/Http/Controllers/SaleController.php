<?php
/**
 * File LaravelController.php
 *
 * @author Tuan Duong <bacduong@gmail.com>
 * @package Laravue
 * @version 1.0
 */

namespace App\Http\Controllers;

use App;
use App\User;
use App\Http\Models\Block;
use App\Http\Traits\PropertyTrait;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Symfony\Component\HttpFoundation\Session\Session;
/**
 * Class LaravueController
 *
 * @package App\Http\Controllers
 */
class SaleController extends Controller
{
    use PropertyTrait;

    public function index(Request $request)
    {
        $locations = [];
        $session = new Session();
        $sitelocale = $session->get('sitelocale');

        $searchParams = $request->all();
        $properties = $this->getPropertyList('sale');
        foreach($properties as $k => $property){
            if(isset($property->location_id)){
                $locations[] = isset($property->location->name)?$property->location->name:'';

            }
        };

        $blocks = Block::where('group', 'properties')->orderBy('order_by','ASC')->get();
        $types = array(
                    // '*' => __('All'),
                    's300' => '0₹ - 30000₹',
                    's300-500' => '30000₹ - 50000₹',
                    's500-800' => '50000₹ - 80000₹',
                    's800' => '80000+₹',
                );
        $page_title_key = 'p_title';

        $properties_for = 'Sale';
        
        return view('properties.index', compact('properties','locations', 'sitelocale', 'blocks','types', 'page_title_key', 'properties_for'));

    }

    /**
     * Entry point for Laravue Dashboard
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($id = null)
    {
        $session = new Session();
        $sitelocale = $session->get('sitelocale');
      	$property = $this->getPropertyDetails($id);
        $blocks = Block::all();
        return view('properties.view', compact('property', 'sitelocale', 'blocks'));
    }
}
