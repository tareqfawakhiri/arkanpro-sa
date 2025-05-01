<?php

namespace App\Http\Controllers;

class ServicesController extends Controller
{
    function index()
    {
        dd('xx xxx');
        return view('sections.services');
    }

    function details()
    {
        dd('xx xxx');
        return view('sections.service-details');
    }
}
