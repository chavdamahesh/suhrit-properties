<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Models\CountryList;
use App\Http\Models\PublicationTypeList;

class PropertyEditResource extends JsonResource
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
            'data' => [
                'id' => $this->id,
                'name' => $this->name,
                'contract' => $this->contract,
                'type' => $this->type,
                'images' => $this->images,
                'locations' => LocationResource::collection($this->locations),
            ],
            'option_lists' => [
                'countries' => CountryListCollection::collection(CountryList::select(['id','name'])->get()->toArray()),
                // 'types' => PublicationTypeListCollection::collection(PublicationTypeList::select(['id','name'])->get()->toArray())
            ]
        ];
    }
}
