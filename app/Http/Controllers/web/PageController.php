<?php

namespace App\Http\Controllers\web;

use App\Src\TagActions;
use App\Src\PostActions;
use App\Src\CategoryActions;
use App\Src\DocumentationActions;
use App\Src\RegisterActions;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    const DRAFT = "1";
    protected $postActions;
    protected $tagActions;
    protected $categoryActions;
    protected $documentActions;
    protected $registerActions;

    public function __construct()
    {
        $this->postActions = new PostActions();
        $this->tagActions = new TagActions();
        $this->categoryActions = new CategoryActions();
        $this->documentActions = new DocumentationActions();
        $this->registerActions = new RegisterActions();
    }


    public function blog()
    {

        $tags = $this->tagActions->getTags();
        $posts = $this->postActions->getPosts();

        $this->registerActions->registerLog($posts[0]);

        return view('web.blog.posts', compact('posts', 'tags'));
    }

    public function post($slug)
    {
        $post =$this->postActions->getPost($slug);

        if ($post->status === self::DRAFT) {
            return redirect()->back();
        }

        try {
            $this->registerActions->register_visit($post);
            $this->registerActions->register_session($post);
            $this->registerActions->registerLog($post);

            $similar_posts = $this->postActions->_getSimilarPost($post);
        }catch(\Exception $exception) {

            Log::warning('PageController::post->info: ' . $exception->getMessage());
            return redirect()->back();

        }

        return view('web.blog.post', compact('post', 'similar_posts'));
    }

    public function category($slug)
    {
        try {

            $category =  $this->categoryActions->getCategory($slug);
            $posts = $this->postActions->_getSimilarPost($category->id);
            $isCategory = true;

        }catch(\Exception $exception) {
            Log::warning('PageController::category->info: ' . $exception->getMessage());
            return redirect()->back();

        }


        return view('web.blog.categories', compact('posts', 'isCategory', 'category'));
    }

    public function tag($slug)
    {
        try {

            $post_tag = $this->postActions->getRelationPostsByTags();
            $tags = $this->tagActions->tagsOfPublishedPosts($post_tag);
            $tag = $this->tagActions->getTag($slug);
            $posts = $this->postActions->getPostsByTags($slug);
            $isTag = true;

        }catch(\Exception $exception) {

            Log::warning('PageController::tag->info: ' . $exception->getMessage());
            return redirect()->back();

        }
        return view('web.blog.tags', compact('posts', 'isTag', 'tag', 'tags'));
    }

    public function documentation()
    {
        $documentations = $this->documentActions->getDocumentations();
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

}
