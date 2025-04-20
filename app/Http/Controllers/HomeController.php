<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Partner;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        $partners = Partner::orderByDesc('created_at')->get();
        $clients = Client::orderByDesc('created_at')->get();
        $slider = Slider::where('status', 'published')->orderByDesc('created_at')->get();
        $isHome = true;
        return view('sections.home', compact('partners', 'clients', 'slider', 'isHome'));
    }

    public function aboutus()
    {
        return view('sections.aboutus');
    }
}
