<?php

namespace App\Http\Controllers;

class ServicesController extends Controller
{
    function index()
    {
        return view('sections.services');
    }

    function details()
    {
        return view('sections.service-details');
    }
}
