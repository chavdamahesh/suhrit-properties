<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App;
use Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmail;
use App\Http\Models\Property;
use App\Http\Models\Block;
use App\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Session\Session;

class UserController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function createPersonalDetails(Request $request)
    {  

        $session = new Session();
        $sitelocale = $session->get('sitelocale'); 
        $blocks = Block::where('group', 'Postads')->orderBy('order_by','ASC')->get();
        return view('register.user-view',compact('blocks','sitelocale')); 

    }


    public function storePersonalDetails(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required|max:10|unique:registrations,phone',
            'email' => 'required|email',
        ]);

        $session = new Session();
        $session->set('personal_details',[
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect('/property-details');
    }

    public function createPropertyDetails(Request $request)
    {
        $session = new Session();

        if(!$session->has('personal_details')){
            return redirect('/personal-details');
        }

        $sitelocale = $session->get('sitelocale'); 
        $blocks = Block::where('group', 'register')->orderBy('order_by','ASC')->get();
        return view('register.view', compact('blocks','sitelocale'));
    }

    public function storePropertyDetails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'property_name' => 'required',
            'short_desc' => 'required',
            'key_feature_1' => 'required',
            'key_feature_2' => 'required',
            'key_feature_3' => 'required',
            'price' => 'required',
            'floor' => 'required',
            'place' => 'required',
            'total_area_int' =>'required',
            'total_area_ext' =>'required',
            'year_built' => 'required',
            'garage_no' => 'required',
            'no_bath' => 'required',
            'no_bedrooms' => 'required',
            'orientation' => 'required',
            'garden_terrace_orientation' => 'required',
            'charges' => 'required',
            'energy_efficiency' => 'required',
            'year_reno' => 'required',
            'no_outdoor_parking_spots'  => 'required',
            'kitchen_type' => 'required',
            // 'image_upload' => 'required',
            // 'image_upload.*' => 'mimes:png,jpg,jpeg|max:1048',
        ]);

        if ($validator->fails()) {
            return redirect('property-details')->withErrors($validator)->withInput();
        }
        
        // $request->image_upload = json_encode($imgdata);
        $session = new Session();
        $propertyData = [
            'first_name' => $session->get('personal_details')['first_name'],
            'last_name' =>  $session->get('personal_details')['last_name'],
            'phone' => $session->get('personal_details')['phone'],
            'email' => $session->get('personal_details')['email'],
            'property_name' => $request->property_name,
            'short_desc' => $request->short_desc,
            'key_feature_1' => $request->key_feature_1,
            'key_feature_2' => $request->key_feature_2,
            'key_feature_3' => $request->key_feature_3,
            'contract' => $request->contract,
            'type'=> $request->type,
            'price' => $request->price,
            'floor' => $request->floor,
            'place' => $request->place,
            'lift' => isset($request->lift) ? 1 : 0,
            'garage' => isset($request->garage) ? 1 : 0,
            'garden' => isset($request->garden) ? 1 : 0,
            'parking' => isset($request->parking) ? 1 : 0,
            'terrase' => isset($request->terrase) ? 1 : 0,
            'security_door' => isset($request->security_door) ? 1 : 0,
            'double_glazing' => isset($request->double_glazing) ? 1 : 0,
            'total_area_int'=> $request->total_area_int,
            'total_area_ext'=> $request->total_area_ext,
            'year_built' => $request->year_built,
            'image_upload' => '',
            'garage_no'=> $request->garage_no,
            'no_bath' => $request->no_bath,
            'no_bedrooms' => $request->no_bedrooms,
            'orientation' => $request->orientation,
            'garden_terrace_orientation' => $request->garden_terrace_orientation,
            'charges' => $request->charges,
            'energy_efficiency' => $request->energy_efficiency,
            'year_reno' => $request->year_reno,
            'no_outdoor_parking_spots'  => $request->no_outdoor_parking_spots,
            'kitchen_type' => $request->kitchen_type,
        ];

        $property = new Property();
        $property->create($propertyData);
        $propertyDetails = Property::latest()->first();

        if($request->hasfile('image_upload')){
            foreach ($request->file('image_upload') as $file) {
                $file->getClientOriginalName();
                $destinationPath = storage_path() . '/app/public/temp/' ;
                $file->move($destinationPath,$file->getClientOriginalName());
                $image = $file->getClientOriginalName();
                $tempPath = storage_path() . '/app/public/temp/' . $file->getClientOriginalName();
                $file_data = file_get_contents($tempPath);
                Storage::put('public/temp/' . $image, $file_data);
                $media = $propertyDetails
                ->addMedia($tempPath)
                ->preservingOriginal()
                ->toMediaCollection('properties');
                $media->save();
            }
        }

        Mail::to($propertyDetails->email)->send(new sendEmail($propertyDetails));

        return back()->with('success','Registered Successfully!');
        
    }

}
