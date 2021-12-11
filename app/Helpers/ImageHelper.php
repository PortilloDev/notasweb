<?php

namespace App\Helpers;

use App\Models\Image;

class ImageHelper 
{
    public static function createImage($model, $url)
    {
        $alias = $model->getMorphClass();
        $image = new Image();
        $image::create([
            'url' => $url,
            'imageable_id' => $model->id,
            'imageable_type' => $alias,
        ]);
    }

    public static function updateImage($model, $url)
    {
        $alias = $model->getMorphClass();
        $image = Image::where('imageable_id', $model->id)
                        ->where('imageable_type', $alias)
                        ->first();
        if($image) {
            $image->url = $url;
            $image->save();
        } else {
            self::createImage($model, $url);
        }
    } 
}
