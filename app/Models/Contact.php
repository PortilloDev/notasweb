<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lastName',
        'email',
        'subject',
        'body',
        'legal',
    ];

    public function setLegalAttribute($value)
    {
        if($value == 'on')
            $this->attributes['legal'] = true;
    }
}
