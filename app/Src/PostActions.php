<?php

namespace App\Src;

use App\Models\Post;
use App\Traits\Validates;
use Illuminate\Support\Facades\DB;

class PostActions
{

    use Validates;

    const PUBLISHED = '2';
    public function getPosts()
    {

        $posts =  Post::where('status', self::PUBLISHED)
                        ->latest()
                        ->paginate(4);

        if ( ! $this->existData($posts)) {
            $posts = [];

        }

        return $posts;
    }


    public function getPost(string $slug) :Post
    {
      $post =  Post::where('slug', 'like', $slug)->first();

        if ( ! $this->existRegister($post)) {
            $post = [];

        }
      
        return $post;
    }

    public function getPostByCategory(int $category_id)
    {
        $posts =  Post::where('category_id', $category_id)
                ->orderBy('id', 'DESC')->where('status', self::PUBLISHED)
                ->get();

        if ( ! $this->existData($posts)) {
            $posts = [];

        }

        return $posts;
    }

    public function getRelationPostsByTags()
    {
        return DB::table('post_tag')->pluck('tag_id', 'tag_id');
    }

    public function getPostsByTags(string $slug)
    {

        $posts =Post::whereHas('tags', function ($query) use ($slug) {
                        $query->where('slug', $slug);
                    })->orderBy('id', 'DESC')
                    ->where('status', self::PUBLISHED)
                    ->get();

        if ( ! $this->existData($posts)) {
            $posts = [];
        }

        return $posts;
    }

    public function _getSimilarPost($post)
    {
        $similarPost = Post::with('category')->where('status',  self::PUBLISHED)
                                             ->where('id', '!=', $post->id)
                                             ->inRandomOrder()
                                             ->limit(2)
                                             ->get();

        if ( ! $this->existData($similarPost)) {
             $similarPost = [];
        }

        return $similarPost;
    }
}
