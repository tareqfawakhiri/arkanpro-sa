<?php

namespace App\Http\Controllers;

//use TCG\Voyager\Models\Post;

use App\Models\Post;

class BlogControlller extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    function index()
    {
        $posts = Post::with(['category', 'author'])
            ->where('status', 'published')
            ->orderBy('order')
            ->paginate(12);
        return view('sections.blog', compact('posts'));
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    function details($slug)
    {
        $post = Post::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();
        return view('sections.blog-details', compact('post'));
    }
}
