<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdministrationTasksController extends Controller
{
    public function previsualizacion()
    {
        return view('admin.task.previsualizacion');
    }
}
