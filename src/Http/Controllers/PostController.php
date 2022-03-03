<?php

namespace Skriptoff\Posts\Http\Controllers;

use Illuminate\Http\Request;
use Skriptoff\Posts\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts::index', [
            'posts' => $posts,
            'test' => config('posts.test'),
        ]);
    }
}
