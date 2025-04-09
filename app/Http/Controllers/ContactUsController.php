<?php

namespace App\Http\Controllers;

class ContactUsController extends Controller
{
    function index()
    {
        return view('sections.contact-us');
    }

    function send()
    {
        dd('xxx');
    }
}
