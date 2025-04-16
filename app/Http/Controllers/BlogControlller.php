<?php

namespace App\Http\Controllers;

//use TCG\Voyager\Models\Post;

use App\Models\Post;

class BlogControlller extends Controller
{
    function index()
    {
          $posts = Post::with(['category', 'author'])
            ->where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->paginate(12);
        return view('sections.blog', compact('posts'));
    }

    function details($slug)
    {
        dd('xx xxx');
        return view('sections.blog-details', compact('post'));
    }
}
