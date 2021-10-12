<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Documentation extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'url',
        'image',
    ];
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
