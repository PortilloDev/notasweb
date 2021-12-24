<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'body'
    ];

    
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
    
    public function posts() {
        return $this->hasMany('App\Models\Post');
    }


}
