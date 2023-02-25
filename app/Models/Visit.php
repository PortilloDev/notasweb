<?php

namespace App\Models;

class Visit
{
    public string $id;
    public function __construct(array $attributes = [])
    {
        $this->id = now()->format('Y-m-d H:i:s');
    }

}
