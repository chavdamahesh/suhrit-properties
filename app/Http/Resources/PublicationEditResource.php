<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Models\CountryList;
use App\Http\Models\PublicationTypeList;

class PublicationEditResource extends JsonResource
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
                'title' => $this->title,
                'type' => $this->type,
                'countries' => CountryResource::collection($this->countries),
            ],
            'option_lists' => [
                'countries' => CountryListCollection::collection(CountryList::select(['id','name'])->get()->toArray()),
                'types' => PublicationTypeListCollection::collection(PublicationTypeList::select(['id','name'])->get()->toArray())
            ]
        ];
    }
}
