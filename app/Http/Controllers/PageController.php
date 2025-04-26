<?php

namespace App\Http\Controllers;

use App\Models\Service;

class PageController extends Controller
{
    function index($title)
    {
        $section = Service::where('title', $title)
            ->with('features')
            ->first();

        $title = str_replace('', '_', $section->title);
        if (view()->exists('sections.page.' . $title))
            return view('sections.page.' . $title, compact('section'));
        else
            return view('sections.page.index', compact('section'));
    }

}
