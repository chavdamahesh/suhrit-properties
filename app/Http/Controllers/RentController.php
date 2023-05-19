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
use App\Http\Models\Contact;
use App\Http\Traits\PropertyTrait;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Mail\GetQuoteMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Symfony\Component\HttpFoundation\Session\Session;
/**
 * Class LaravueController
 *
 * @package App\Http\Controllers
 */
class RentController extends Controller
{
    use PropertyTrait;

    public function index(Request $request)
    {
        $locations = [];
        $session = new Session();
        $sitelocale = $session->get('sitelocale');
        $searchParams = $request->all();

        $properties = $this->getPropertyList('rent');
    
        foreach($properties as $k => $property){

            if(isset($property->location_id)){  
                $locations[] = isset($property->location->name)?$property->location->name:'';

            }
        };

        $blocks = Block::where('group', 'properties')->orderBy('order_by','ASC')->get();
        $types = array(
                    // '*' => __('All'),
                    'r1000' => '0 - 1000₹',
                    'r1000-2000' => '1000₹ - 2000₹',
                    'r2000' => '2000+₹',
                );
        $page_title_key = 'p_title_rent';
        $properties_for = 'Rent';
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
        /*echo '<pre>';
        print_r($property);
        echo '</pre>';
        exit;*/
        return view('properties.view', compact('property', 'sitelocale', 'blocks'));
    }

    public function get_quote(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'message' => 'required',
            'phone' => 'required|max:10',
            'email' => 'required|email',
        ]);

        Contact::create($request->all());  
        $ContactDetails = Contact::latest()->first();
        Mail::to($ContactDetails->email)->send(new GetQuoteMail($ContactDetails));
        return redirect()->back()
                         ->with(['success' => 'We recieved your email. we will contact you shortly.']);
    }
}
