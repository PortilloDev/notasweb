<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;
class Post extends Model
{
    use HasFactory;
    
    const PUBLISHED = 2;
    const DRAFT = 1;


    protected $fillable = [
        'user_id', 'category_id', 'name', 'slug', 'excerpt', 'body', 'status', 'file'
    ];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function tags() {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
