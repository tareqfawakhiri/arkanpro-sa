<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    //
    function index($slug)
    {
        return view('sections.page.' . $slug);
    }

}
