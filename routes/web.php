<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('Home.index', ['title' => 'Home']);
})->middleware('auth');
Route::get('/about', function () {
    return view('About.index', [
        'title' => 'About',
    ]);
})->middleware('auth');

Route::get('/post', [PostController::class, 'index'])->middleware('auth');

Route::get('/post/{post:slug}', [PostController::class, 'show'])->middleware('auth');

Route::get('/categories', function () {
    return view('Category.index', [
        'title' => 'Categories',
        'categories' => Category::all()
    ]);
})->middleware('auth');

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('Category.show', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name,
    ]);
})->middleware('auth');

Route::get('/authors/{author:username}', function (User $author) {
    return view('Post.index', [
        'title' => 'User Post',
        'posts' => $author->posts
    ]);
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
