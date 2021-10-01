<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all(['name','id']);
        $users = User::all(['name','id']);
        $tags = Tag::all(['id', 'name']);
        return view('admin.post.create', compact('categories', 'users', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        
        $request->validate([
            'name' => 'required|string',
            'slug' => 'required|string',
            'user_id' => 'required',
            'category_id' => 'required',
            'excerpt' => 'required|string',
            'body' => 'required|string',
            'status' => 'required|integer',
        ]);
        $data = $request->except('_token', 'tags');
        $archivo = $request->file('file');
        if($archivo){
            $nombre_imagen = $archivo->getClientOriginalName();
            $archivo->move('image', $nombre_imagen);
            $data['file'] = $nombre_imagen;
        }
        $post = Post::create($data);

        $post->tags()->attach($request->tags);
        return redirect()->route('admin.posts.index')->with('info', 'Post creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all(['name','id']);
        $users = User::all(['name','id']);
        $tags = Tag::all(['id', 'name']);
        return view('admin.post.edit', compact('categories', 'users', 'tags','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'name' => 'required|string',
            'slug' => 'required|string',
            'user_id' => 'required',
            'category_id' => 'required',
            'excerpt' => 'required|string',
            'body' => 'required|string',
            'status' => 'required|integer',
        ]);
        $entrada = $request->all();
         //IMAGE
         $archivo = $request->file('file');

         if($archivo){
             $nombre_imagen = $archivo->getClientOriginalName();
             $archivo->move('image', $nombre_imagen);
             $entrada['file'] = $nombre_imagen;
         }

         $post->fill($entrada)->save();

        //TAGS
        $post->tags()->sync($request->get('tags'));
        return redirect()->route('admin.posts.edit', compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('info','Post eliminado correctamente');
    }
}
