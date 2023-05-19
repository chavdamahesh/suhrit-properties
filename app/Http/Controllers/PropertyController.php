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
use App\Http\Models\Property;
use App\Mail\ContactUsMail;
use App\Mail\GetQuoteMail;
use App\Http\Models\Block;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\Session\Session;
/**
 * Class LaravueController
 *
 * @package App\Http\Controllers
 */
class PropertyController extends Controller
{

    public function index(Request $request)
    {
        $session = new Session();
        $sitelocale = $session->get('sitelocale');

        $searchParams = $request->all();
        $properties = Property::where('active',1)->orderBy("id", "desc")->with(['images'])	->with(['location'])->get();
        $locations = [];
        //die();
        foreach($properties as $k => $property){
          if(isset($property->location))
            $locations[] = isset($property->location->name)?$property->location->name:'';

          $property->media = $property->getMedia('properties')->sortBy('order_column');
/*          foreach($property->media as $media){
              $properties[$k]->media[] = [
                  'id' => $media->id,
                  'name' => $media->file_name
                  //'path' => $media->getFullUrl()
              ];
            }
*/
        };

        $blocks = Block::where('group', 'properties')->orderBy('order_by','ASC')->get();
        return view('properties.index', compact('properties','locations', 'sitelocale', 'blocks'));

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

      	$property = Property::firstOrFail()
      	->where('id', $id)
      	->with(['location'])
      	->first();

        $property->media = $property->getMedia('properties')->sortBy('order_column');
        foreach($property->media as $media){
            $files[] = [
                'id' => $media->id,
                'name' => $media->file_name,
                'path' => $media->getFullUrl()
            ];
        }
        $property->media = $files;

        $blocks = Block::all();
        return view('properties.view', compact('property', 'sitelocale', 'blocks'));
    }

    public function imageThumb(Request $request){
        if(file_exists(storage_path().'/app/public/properties/'.$request->get("p"))){
            $img = Image::make(storage_path().'/app/public/properties/'.$request->get("p"))->resize($request->get("width"), $request->get("height"));
        }else{
            $img = Image::make(storage_path().'/app/public/properties/AlexGuest.jpg')->resize($request->get("width"), $request->get("height"));
        }

        return $img->response('jpg');
    }

    public function contact(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;
        $property_id = $request->property_id;

        if($name != '' && $email != '' && $phone != '' && $message != '') {
            if($property_id != '') {
                $property = Property::find($property_id);
            }
            $super_users = User::select(['firstname', 'lastname', 'email'])
                                ->where('role', '=', 'super_user')
                                ->get();

            $mailData = [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'message' => $message
            ];
            foreach($super_users as $key => $super_user){
                Mail::to($super_user->email, $super_user->firstname.' '.$super_user->lastname)->send(new GetQuoteMail($mailData));
            }
        }
    }

    public function contactus(Request $request)
    {
        if(isset($request->message) && $request->message != '') {
            $mailData = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message
            ];

            $super_users = User::select(['firstname', 'lastname', 'email'])
                                ->where('role', '=', 'super_user')
                                ->get();

            foreach($super_users as $key => $super_user){
                Mail::to($super_user->email, $super_user->firstname.' '.$super_user->lastname)->send(new ContactUsMail($mailData));
            }
        }
    }
}
