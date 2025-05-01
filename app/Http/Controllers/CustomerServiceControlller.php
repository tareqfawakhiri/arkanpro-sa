<?php

namespace App\Http\Controllers;

use App\Models\CustomerService;
use App\Models\Quotation;
use Illuminate\Http\Request;

class CustomerServiceControlller extends Controller
{
    function index()
    {
        return view('sections.customer-service');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'message' => 'required'
        ]);

        CustomerService::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'message' => $request->message,
        ]);
        return back()->with('success', 'Your message has been sent!');
    }
}
