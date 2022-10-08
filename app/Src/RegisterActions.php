<?php

namespace App\Src;

use App\Models\Post;
use App\Helpers\LogHelper;


class RegisterActions
{
    public function register_session(Post $post) :void
    {
        $post = [
            'name' => $post->name,
            'slug' => $post->slug,
        ];
        request()->session()->put('post', $post);
    }

    public function registerLog($model) :void
    {
        $session = request()->session()->get('_token');
        LogHelper::register_view($model, $session);
    }

    public function register_visit(Post $post) :void
    {
        $post->visits = $post->visits + 1;
        $post->save();
    }
}
