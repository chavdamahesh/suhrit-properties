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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\Session\Session;
/**
 * Class LaravueController
 *
 * @package App\Http\Controllers
 */
class ServicesController extends Controller
{

    public function show(Request $request)
    {
        $session = new Session();
        $sitelocale = $session->get('sitelocale');
        $blocks = Block::where('group', 'services')->orderBy('order_by','ASC')->get();
        return view('services.view', compact('sitelocale', 'blocks'));

    }

}
