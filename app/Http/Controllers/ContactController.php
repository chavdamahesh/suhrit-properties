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
use App\User;
use Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Models\Contact_Us;
use App\Http\Models\Enquiry;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Session\Session;
/**
 * Class LaravueController
 *
 * @package App\Http\Controllers
 */
class ContactController extends Controller
{

    public function show(Request $request)
    {
        $session = new Session();
        $sitelocale = $session->get('sitelocale');
        $blocks = Block::where('group', 'contact')->orderBy('order_by','ASC')->get();
        return view('contact.view', compact('sitelocale', 'blocks'));

    }

    public function storeContactDetails(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',

        ]);
        Contact_Us::create($request->all());
        $ContactDetails = Contact_Us::latest()->first();
        Mail::to($ContactDetails->email)->send(new ContactUsMail($ContactDetails));
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);

    }

}
