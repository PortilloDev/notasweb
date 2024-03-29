<?php

use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\web\PageController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', 'blog');

Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/entrada/{slug}', [PageController::class, 'post'] )->name('post');
Route::get('/categoria/{slug}', [PageController::class, 'category'])->name('category');
Route::get('/etiqueta/{slug}', [PageController::class, 'tag'])->name('tag');

Route::get('/perfil', [PageController::class, 'perfil'])->name('perfil');

Route::group(['prefix' => '/blog'], function () {
    Route::get('/documentacion', [PageController::class, 'documentation'])->name('documentation');
    Route::get('/contacto', [ContactController::class, 'index'])->name('contact');
    Route::post('/contacto/enviado', [ContactController::class, 'sent'])->name('contact.sent');
    Route::get('/politica-privacidad', [PageController::class, 'politica'])->name('politica');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
