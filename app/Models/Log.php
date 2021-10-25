<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id', 'url_current', 'url_previous'
    ];
    

    public function post() {
        return $this->belongsTo('App\Models\Post');
    }
}
