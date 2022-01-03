<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;

class AdministrationTasksController extends Controller
{
    public function previsualizacion()
    {
        $posts = Post::all();
        return view('admin.task.previsualizacion', compact('posts'));
    }
}
