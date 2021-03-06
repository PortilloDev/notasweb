<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdministrationTasksController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DocumentationController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\LayoutController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\TecnologyController;
use App\Http\Controllers\Admin\ToolController;

Route::get('', [AdminController::class, 'index'])->name('home');

Route::resource('roles', RoleController::class)->names('roles');
Route::resource('users', UserController::class)->only('index', 'edit', 'update')->names('users');
Route::resource('roles', RoleController::class)->names('roles');
Route::resource('categories', CategoryController::class)->names('categories');
Route::resource('tags', TagController::class)->names('tags');
Route::resource('posts', PostController::class)->names('posts');
Route::resource('experiences', ExperienceController::class)->names('experiences');
Route::resource('skills', SkillController::class)->names('skills');
Route::resource('tecnologies', TecnologyController::class)->names('tecnologies');
Route::resource('tools', ToolController::class)->names('tools');
Route::resource('documentations', DocumentationController::class)->names('documentations');
Route::resource('layouts', LayoutController::class)->names('layouts');

Route::get('previsualizacion', [AdministrationTasksController::class, 'previsualizacion'])->name('previsualizacion');
Route::get('logs', [AdministrationTasksController::class, 'logs'])->name('logs');

