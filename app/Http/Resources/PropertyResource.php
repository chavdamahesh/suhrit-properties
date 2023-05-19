<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PropertyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        //dd($this->publicationCountries);
        return [
            // 'id' => $this->id,
            // 'name' => $this->name,
            // 'contract' => $this->contract,
            // 'price' => $this->price,
            // 'active' => $this->active,
            // 'featured' => $this->featured,
            $this->resource
        ];
    }
}
