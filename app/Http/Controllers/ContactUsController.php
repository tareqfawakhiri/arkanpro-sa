<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Models\Page;

class ContactUsController extends Controller
{
    function index()
    {
        $section = Page::where('slug', 'contact-us')->firstOrFail();
        return view('sections.contact-us', compact('section'));
    }

    function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Mail::to('sales@arkanpro.com.sa')->send(new ContactMail($request->all()));

        return back()->with('success', trans('general.message-sent'));
    }
}
