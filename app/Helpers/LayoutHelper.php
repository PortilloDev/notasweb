<?php 

namespace App\Helpers;

use App\Models\Layout;

class LayoutHelper 
{
    public static function getHeaderText()
    {
        $layout = Layout::first();
        return $layout;
    }

}