<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{

    public function blog(){
       
        $posts = Post::where('status','2')->paginate(3);
        
        return view('web.posts', compact('posts'));
    }

    public function post($slug){

        $post = Post::where('slug', $slug)->first();

        return view('web.post', compact('post'));
    }


    public function category($slug){

        $category = Category::where('slug', $slug)->pluck('id')->first();
        $posts = Post::where('category_id', $category)
                ->orderBy('id', 'DESC')->where('status', '2')
                ->paginate(3);
        return view('web.posts', compact('posts'));

    }

    public function tag($slug){

        $posts = Post::whereHas('tags', function($query) use($slug){
            $query->where('slug', $slug);

        })->orderBy('id', 'DESC')->where('status', '2')
                ->paginate(3);
        return view('web.posts', compact('posts'));

    }
}
