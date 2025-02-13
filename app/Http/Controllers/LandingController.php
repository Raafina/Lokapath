<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landing.home', ['title' => 'Lokapath | Home']);
    }

    public function about()
    {
        return view('landing.about', ['title' => 'Lokapath | About']);
    }

    public function contact()
    {
        return view('landing.contact', ['title' => 'Lokapath | Contact']);
    }

    public function posts()
    {
        $posts = Post::filter(request(['search', 'category', 'author']))
            ->latest()
            ->paginate(6)
            ->withQueryString();

        return view('landing.posts', [
            'title' => 'Lokapath | Blog',
            'posts' => $posts,
        ]);
    }

    public function postsBySlug(Post $post)
    {
        return view('landing.post', ['title' => $post->title, 'post' => $post]);
    }

    public function postsByUser(User $user)
    {
        return view('landing.posts', ['title' => Count($user->posts) . ' Post by ' . $user->name, 'posts' => $user->posts]);
    }                                                                           // put on public relation function at models

    public function postsByCategory(Category $category)
    {
        return view('landing.posts', ['title' =>   'Article in ' . $category->name, 'posts' => $category->posts]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
