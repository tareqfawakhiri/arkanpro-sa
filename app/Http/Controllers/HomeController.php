<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Partner;

class HomeController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        $clients = Client::all();
        $isHome = true;
        return view('sections.home', compact('partners', 'clients', 'isHome'));
    }

    public function aboutus()
    {
        return view('sections.aboutus');
    }
}
