<?php

namespace App\Src;

use App\Models\Category;
use App\Traits\Validates;

class CategoryActions
{
    use Validates;


    public function getCategory(string $slug) :Category
    {
        $category = Category::where('slug', $slug)->first();

        if( ! $this->existRegister($category)) {
            $category = [];
        }

        return $category;
    }

}
