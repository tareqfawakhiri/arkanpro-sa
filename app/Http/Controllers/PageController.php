<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Page;

class PageController extends Controller
{
    function index($slug)
    {
        $page = Page::where('slug', $slug)->first();
        if (view()->exists('sections.page.' . $slug))
            return view('sections.page.' . $slug, compact('page'));
        else
            return view('sections.page.index', compact('page'));
    }

}
