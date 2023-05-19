<?php
/**
 * File PropertyUploadController.php
 *
 * @author Tuan Duong <bacduong@gmail.com>
 * @package Laravue
 * @version 1.0
 */
namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Laravue\JsonResponse;
use App\Http\Resources\PermissionResource;
use App\Http\Models\Image;
use App\Http\Models\Property;
use App\Http\Resources\ImageResource;
/**
 * Class PropertyUploadController
 *
 * @package App\Http\Controllers\Api
 */
class PropertyUploadController extends BaseController
{

    /**
     * Store a publication file in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Property $property, Request $request)
    {
        return response(['success' => true,
            'data' => [
                'file' => 'data:image/png;base64,'.base64_encode($request->file('file')->get()),
                'name' => $request->file('file')->getClientOriginalName(),
            ]
        ], 200);
    }

    public function saveImage(Request $request)
    {
        $params = $request->all();
        $image = Image::create([
            'id_properties' => $params['id_properties'],
            'image' => $params['image'],
            'thumb_image' => $params['thumb_image'],
            'sort_order' => 0,
            ]);

        $image->save();

        return response(['success' => true, 'message' => 'Your publicaiton has been saved.', 'data' => new ImageResource($image)], 200);
    }

    public function getImages(Request $request){
        $params = $request->all();
        $images = Image::select([DB::raw("CONCAT('/storage/',image) AS url"), 'id as name'])
        ->where('id_properties','=',$params['id_properties'])
        ->orderBy("sort_order", "asc")
        ->get();
        return response(['success' => true, 'message' => 'success', 'data' => $images], 200);
    }

    public function deleteImage($model, $id, Request $request){        
        $params = $request->all();
        if(!strpos($params['id'], '000-') || strpos($params['id'], '000-') == -1){
            //$media = Property::find($id)->getMedia('properties')->find($params['id'])->delete();
            DB::table('media')->delete($params['id']);
        }
        return response(['success' => true, 'message' => 'deleted'], 200);
    }

    public function saveImageOrder(Request $request)
    {
        $params = $request->all();

        $idOrder = 1;
        foreach($params as $img){
            $propertyImage = Image::firstOrFail()
            ->where('id', $img['name'])->get()[0];

            $propertyImage->sort_order = $idOrder;
            $propertyImage->save();
            $idOrder++;
        }

        return response(['success' => true, 'message' => 'Images order saved.', 'data' => []], 200);
    }    
}
