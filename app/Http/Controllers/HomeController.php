<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('sections.home');
    }

    public function aboutus()
    {
        return view('sections.aboutus');
    }
}
