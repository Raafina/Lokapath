<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostsController;
use App\Http\Controllers\LandingController;

// Landing
Route::get('/', [LandingController::class, 'posts']);
Route::get('/about', [LandingController::class, 'about']);
Route::get('/contact', [LandingController::class, 'contact']);
Route::get('/posts', [LandingController::class, 'posts']);
Route::get('/post/{post:slug}', [LandingController::class, 'postsBySlug']);
Route::get('/user?={user:username}', [LandingController::class, 'postByUser']);
Route::get('/categories?={category:slug}', [LandingController::class, 'postByCategory']);

// Auth
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// CMS
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/posts', [DashboardPostsController::class, 'index'])->middleware('auth');
Route::get('/dashboard/post/create', [DashboardPostsController::class, 'createPost'])->middleware('auth');
Route::get('/dashboard/post/createSlug', [DashboardPostsController::class, 'createSlug'])->middleware('auth');
Route::get('/dashboard/post/{post:slug}', [DashboardPostsController::class, 'show'])->middleware('auth');
Route::get('/dashboard/post/{post:slug}/edit', [DashboardPostsController::class, 'edit'])->middleware('auth');
Route::post('/dashboard/post/create', [DashboardPostsController::class, 'store'])->middleware('auth');
Route::delete('/dashboard/post/{post:slug}', [DashboardPostsController::class, 'destroy'])->middleware('auth');
Route::put('/dashboard/post/{post:slug}', [DashboardPostsController::class, 'update'])->middleware('auth');
