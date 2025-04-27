<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Quotation;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $partners = Partner::orderByDesc('created_at')->get();
        $clients = Client::orderByDesc('created_at')->get();
        $slider = Slider::where('status', 'published')->orderByDesc('created_at')->get();
        $isHome = true;
        $service = Service::where('status', 'ACTIVE')
            ->where('add_to_home_page_banner', 'YES')
            ->orderBy('created_at', 'desc')
            ->first();
        $testimonials = Testimonial::orderByDesc('created_at')->get();

        $posts = Post::with(['category', 'author'])
            ->where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->get();

        $services = Service::where('title', '<>', 'quroosh')
            ->with('features')
            ->first();

        return view('sections.home', compact('partners', 'clients', 'slider', 'isHome', 'service', 'testimonials', 'posts', 'services'));
    }

    public function aboutus()
    {
        return view('sections.aboutus');
    }

    public function quotation(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'type' => 'required'
        ]);

        Quotation::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'type' => $request->type,
        ]);
        return back()->with('success', 'Your message has been sent!');
    }
}
