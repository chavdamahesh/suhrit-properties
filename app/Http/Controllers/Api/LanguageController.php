<?php
/**
 * File UserController.php
 *
 * @author Tuan Duong <bacduong@gmail.com>
 * @package Laravue
 * @version 1.0
 */

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Laravue\JsonResponse;
use App\Http\Resources\PermissionResource;


/**
 * Class UserController
 *
 * @package App\Http\Controllers\Api
 */
class LanguageController extends BaseController
{

    /**
     * Store a publication file in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('file')->store('avatars');
        return $path;
    }


}
