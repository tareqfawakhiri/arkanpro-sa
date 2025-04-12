<?php

namespace App\Http\Controllers;

class BlogControlller extends Controller
{
    function index()
    {
        return view('sections.blog');
    }

    function details()
    {
        return view('sections.blog-details');
    }
}
