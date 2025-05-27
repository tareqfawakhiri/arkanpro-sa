<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\CustomerMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PartnerController extends Controller
{
    function index()
    {
        return view('sections.partner');
    }

    function send(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Mail::to('sales@arkanpro.com.sa')->send(new CustomerMail($request->all()));

        return back()->with('success', trans('general.message-sent'));
    }
}
