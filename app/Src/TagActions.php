<?php

namespace App\Src;

use App\Models\Tag;
use App\Traits\Validates;

class TagActions
{

    use Validates;

    public function getTags()
    {
     $tags = Tag::all();

     if ( ! $this->existData($tags)) {
        $tags = [];

     }

      return  $tags;
    }


    public function getTag(string $slug):tag
    {

     $tag = Tag::where('slug', $slug)->first();
     
     if ( ! $this->existRegister($tag)) {
        $tag = [];

     }

      return  $tag;

    }


    public function tagsOfPublishedPosts($post_tag)
    {
        $tags =  Tag::whereIn('id', $post_tag)->get();

        if ( ! $this->existData($tags)) {
            $tags = [];

         }

          return  $tags;
    }

}
