<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    function index()
    {
        return view('sections.contact-us');
    }

    function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Mail::to('your@email.com')->send(new ContactMail($request->all()));

        return back()->with('success', 'Your message has been sent!');
    }
}
