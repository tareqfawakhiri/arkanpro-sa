<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Page;

class PageController extends Controller
{
    function index($slug)
    {
        $section = Page::where('slug', $slug)
            ->firstOrFail();
        return view('sections.page', compact('section'));
    }
}
