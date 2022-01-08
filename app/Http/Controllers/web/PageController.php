<?php

namespace App\Http\Controllers\web;

use App\Helpers\LogHelper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Documentation;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{

    public function blog()
    {
        $posts = null;
        $tags = Tag::all();
        $posts = Post::where('status', '2')
            ->latest()
            ->paginate(4);
        $this->__registerLog($posts[0]);
        return view('web.blog.posts', compact('posts', 'tags'));
    }

    public function post($slug)
    {
        $post = Post::where('slug','like' ,$slug)->first();
        $this->__register_visit($post);
        $this->__register_session($post);
        $this->__registerLog($post);

        $similar_posts = $this->_getSimilarPost($post);
        return view('web.blog.post', compact('post', 'similar_posts'));
    }


    public function category($slug)
    {

        $category = Category::where('slug', $slug)->first();
        $posts = Post::where('category_id', $category->id)
            ->orderBy('id', 'DESC')->where('status', '2')
            ->get();
        $isCategory = true;

        return view('web.blog.categories', compact('posts', 'isCategory', 'category'));
    }

    public function tag($slug)
    {
        $tag = Tag::where('slug', $slug)->first();
        $posts = Post::whereHas('tags', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->orderBy('id', 'DESC')
        ->where('status', '2')
        ->get();
        $isTag = true;
        return view('web.blog.tags', compact('posts', 'isTag', 'tag'));
    }

    public function documentation()
    {
        $documentations = Documentation::all();
        $this->__registerLog($documentations[0]);
        return view('web.document.home', compact('documentations'));
    }

    public function politica() 
    {
        return view('web.politicas.politicas');
    }

    public function perfil() 
    {
        return view('web.profile.index');
    }
    
    public function asside()
    {

        $similar_posts = $this->_getSimilarPost();

        return view('template.asside', compact('similar_posts'));
    }


    private function _getSimilarPost($post)
    {
        $other_posts = Post::where('status', '2')->where('id', '!=', $post->id)->limit(2)->get();
        return $other_posts;
    }

    private function __register_session($post)
    {
        $post = [
            'name' => $post->name,
            'slug' => $post->slug,
        ];
        request()->session()->put('post', $post);
    }


    private function __registerLog($model)
    {
        $session = request()->session()->get('_token');
        LogHelper::register_view($model , $session);
    }

    private function __register_visit($post)
    {
        $post->visits = $post->visits + 1;
        $post->save();
    }
}
