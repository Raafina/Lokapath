<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Models\Post;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Constraint\Count;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {
    $posts = Post::latest()->get();
    return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(6)->withQueryString()]);
});

Route::get('/authors/{author:username}', function (Author $author) {
    return view('posts', ['title' => Count($author->posts) . ' Post by ' . $author->name, 'posts' => $author->posts]);
});                                                                                    // put on public function at models

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title' =>   'Article in ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/post/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Detail Blog', 'post' => $post]);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);



Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
})->middleware('auth');
