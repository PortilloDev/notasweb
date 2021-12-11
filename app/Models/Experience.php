<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Experience extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title','body', 'slug'
    ];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    public function skills() {
        return $this->belongsToMany('App\Models\Skill');
    }
    public function tecnologies() {
        return $this->belongsToMany('App\Models\Tecnology');
    }
    
    public function tools() {
        return $this->belongsToMany('App\Models\Tool');
    }

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
