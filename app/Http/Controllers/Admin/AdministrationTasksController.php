<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Log;
use App\Models\Post;

class AdministrationTasksController extends Controller
{
    public function previsualizacion()
    {
        $posts = Post::all();
        return view('admin.task.previsualizacion', compact('posts'));
    }

    public function logs()
    {
        $logs = Log::paginate(25);
        $posts = Post::where('status', 1)->orderBy('visits','desc')->get();
        return view('admin.task.logs', compact('logs','posts'));
    }
}
