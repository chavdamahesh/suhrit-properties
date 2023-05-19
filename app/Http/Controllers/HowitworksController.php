<?php

namespace App\Http\Controllers;
use App;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Http\Models\Block;
use App\Http\Models\Property;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HowitworksController extends Controller
{
    public function show(Request $request)
    {
        $session = new Session();
        $sitelocale = $session->get('sitelocale');
        $blocks = Block::where('group', 'howitworks')->orderBy('order_by','ASC')->get();
        return view('how-it-works.view', compact('sitelocale', 'blocks'));

    }
}
