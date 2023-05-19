<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'id_properties' => $this->id_properties,
            'image' => $this->image,
            'user_id' => $this->user_id,
            'image_dir' => $this->image_dir,
            'thumb_image' => $this->thumb_image,
            'sort_order' => $this->sort_order,
        ];
    }
}
