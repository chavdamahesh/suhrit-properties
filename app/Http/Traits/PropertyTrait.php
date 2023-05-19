<?php // ./app/Traits/Datatable.php

namespace App\Http\Traits;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

use App\Http\Models\Property;

use App\Mail\ContactUsMail;
use App\Mail\GetQuoteMail;

use Storage;
use DB;

trait PropertyTrait {

    public function getProperties($is_featured = null){
        $queryProperties = Property::with(['media'])->where('active', '=', 1);
        
        if($is_featured) {
            $queryProperties->where('featured', '=', 1);
        }

        $properties = $queryProperties->get();

        /*echo '<pre>';
        print_r($properties);
        echo '</pre>';
        exit;*/

        /*if(!empty($properties)){
            foreach($properties as $key => $p){
                $files = [];
                $property = Property::where('id', $p->id)->first();
                $property->media = $property->getMedia('properties')->sortBy('order_column');
                foreach($property->media as $media){
                    $files[] = [
                        'id' => $media->id,
                        'name' => $media->file_name,
                        'path' => $media->getFullUrl()
                    ];
                }

                $properties[$key]->media = $files;
            }
        }*/

        return $properties;
    }

    public function getPropertyList($rentOrSale){
        $properties = Property::where('active',1)
            ->where('contract', $rentOrSale)
            ->orderBy("featured","desc")
            ->orderBy("id", "desc")
            ->with(['images'])
            ->with(['location'])
            ->get();

        $locations = [];

        foreach($properties as $k => $property){
          $property->media = $property->getMedia('properties')->sortBy('order_column');
        };

        return $properties;
    }

    public function getPropertyDetails($id){
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
        return $property;
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
