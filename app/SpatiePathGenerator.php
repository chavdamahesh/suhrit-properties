<?php
namespace App;

use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class SpatiePathGenerator implements PathGenerator
{
    public function getPath(Media $media) : string
    {
        if ($media->collection_name == 'properties') {
            return 'properties/';
        }else {
            return 'images/';
        }
        return $media->id;
    }

    public function getPathForConversions(Media $media) : string
    {
        return $this->getPath($media) . 'conversions/';
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getPath($media) . 'responsive/';
    }
}