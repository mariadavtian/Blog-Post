<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PlaylistController;

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
Route::get('/', [WelcomeController::class,'index'])->name('welcome.index');
Route::get('/blog/single-blog-post', [BlogController::class,'show'])->name('single-blog-post.show');
Route::get('/blog', [BlogController::class,'index'])->name('blog.index');
Route::get('/contact', [ContactController::class,'index'])->name('contact.index');
Route::get('/playlists', [PlaylistController::class,'index'])->name('playlist.index');
Route::get('/about', function(){
    return view('about');
})->name('about');
Route::get('/blog/create', [BlogController::class,'create'])->name('blog.create');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
