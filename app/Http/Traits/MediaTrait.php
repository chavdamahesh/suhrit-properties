<?php // ./app/Traits/Datatable.php

namespace App\Http\Traits;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Http\Models\Property;

use Storage;
use DB;

trait MediaTrait {

    public function saveImages($property){
        foreach(request()->get('images') as $fileInfo){
            if(empty($fileInfo)) continue;
            if(!isset($fileInfo['id']) || !$fileInfo['id'] || strpos($fileInfo['id'], '000-') > -1){
                $image = $fileInfo['name'];
                $tempPath = storage_path() . '/app/public/temp/' . $image;

                $file_data = file_get_contents($fileInfo['path']);
                Storage::put('public/temp/' . $image, $file_data);

                $media = $property
                ->addMedia($tempPath)
                ->preservingOriginal()
                ->toMediaCollection('properties');

                $media->custom_properties = [
                    'alt_text' => isset($fileInfo['alttext'])?$fileInfo['alttext']:'',
                    'credit' => isset($fileInfo['credit'])?$fileInfo['credit']:'',
                ];
                $media->save();
                $ids[] = $media->id;
            }else{
                $media = $property->getMedia('properties')->find($fileInfo['id']);
                if($media){
                    $media->custom_properties = [
                        'alt_text' => isset($fileInfo['alttext'])?$fileInfo['alttext']:'',
                        'credit' => isset($fileInfo['credit'])?$fileInfo['credit']:'',
                    ];
                    $media->save();
                    $ids[] = $media->id;
                }
            }
        }

        if(!empty($ids)){
            Media::setNewOrder($ids, 1);
        }        
    }
}
