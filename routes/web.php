<?php

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
