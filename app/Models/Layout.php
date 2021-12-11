<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'h1', 'paragraph', 'excerpt','description',
    ];

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
