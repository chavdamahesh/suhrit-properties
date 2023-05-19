<?php
/**
 * File LocationListController.php
 *
 * @author Tuan Duong <bacduong@gmail.com>
 * @package Laravue
 * @version 1.0
 */

namespace App\Http\Controllers\Api;

use App\Http\Models\LocationList;

/**
 * Class LocationListController
 *
 * @package App\Http\Controllers\Api
 */
class LocationListController extends BaseController
{
    /**
     * Display a list of countries.
     */
    public function index()
    {
    	$locationlist = [];
        $locations = LocationList::select(['id','name'])->get();
        foreach ($locations as $key => $location) {
        	$locationlist[$location->id] = $location;
        }
        return $locationlist;
    }

}
