<?php
/**
 * File UserController.php
 *
 * @author Tuan Duong <bacduong@gmail.com>
 * @package Laravue
 * @version 1.0
 */

namespace App\Http\Controllers\Api;

use App\Http\Models\CountryList;

/**
 * Class UserController
 *
 * @package App\Http\Controllers\Api
 */
class CountryListController extends BaseController
{
    /**
     * Display a list of countries.
     */
    public function index()
    {
        $country = CountryList::select(['id','name'])->get();
        return $country->toArray();
    }

}
