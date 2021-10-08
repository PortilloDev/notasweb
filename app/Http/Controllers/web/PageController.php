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
        request()->session()->put('post', $slug);

        $post = Post::where('slug', $slug)->first();
        $similar_posts = $this->_getSimilarPost();
        return view('web.post', compact('post', 'similar_posts'));
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

    public function asside(){
       
        $similar_posts = $this->_getSimilarPost();
        
        return view('template.asside', compact('similar_posts'));
    }


    private function _getSimilarPost() 
    {
        $current_slug = request()->session()->get('post');
        $other_posts = Post::where('status','2')->where('slug', '!=', $current_slug)->paginate(3);
        return $other_posts;
    }
}
