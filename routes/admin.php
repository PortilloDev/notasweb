<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RoleController;

Route::get('', [AdminController::class, 'index'])->name('home');

Route::resource('roles', RoleController::class)->names('roles');