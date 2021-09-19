<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;

Route::get('', [AdminController::class, 'index'])->name('home');

Route::resource('roles', RoleController::class)->names('roles');
Route::resource('users', UserController::class)->only('index', 'edit', 'update')->names('users');
Route::resource('roles', RoleController::class)->names('roles');
Route::resource('categories', CategoryController::class)->names('categories');
Route::resource('tags', TagController::class)->names('tags');
Route::resource('posts', PostController::class)->names('posts');
