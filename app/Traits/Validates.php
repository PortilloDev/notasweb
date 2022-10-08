<?php

namespace App\Traits;

trait Validates
{
    public function existData($collection) :bool
    {
        $exist = false;

        if(count($collection)) {
            $exist = true;
        }

        return true;
    }

    public function existRegister($model) :bool
    {
        $register = false;

        if($model !== null) {
            $register = true;
        }

        return $register;
    }
}
