<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Partner;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\Pricing;
use App\Models\Quotation;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

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

        $portfolios = Portfolio::orderBy('created_at', 'desc')
            ->get();

        $pricing = Pricing::orderBy('created_at')->get();
        $i = 0;
        foreach ($pricing as $plane) {
            $pricing[$i]->pricing_check = Pricing::select('pricing_checklist.title', 'pricing_checklist.title_ar')
                ->leftJoin('pricing_check', 'pricing.id', '=', 'pricing_check.pricing_id')
                ->leftJoin('pricing_checklist', 'pricing_checklist.id', '=', 'pricing_check.pricing_checklist_id')
                ->WHERE('pricing.id', $plane->id)
                ->get();


            $pricing[$i]->pricing_uncheck = Pricing::select('pricing_checklist.title', 'pricing_checklist.title_ar')
                ->leftJoin('pricing_uncheck', 'pricing.id', '=', 'pricing_uncheck.pricing_id')
                ->leftJoin('pricing_checklist', 'pricing_checklist.id', '=', 'pricing_uncheck.pricing_checklist_id')
                ->WHERE('pricing.id', $plane->id)
                ->get();
            $i++;
        }
        return view('sections.home', compact('partners', 'clients', 'slider', 'isHome', 'service', 'testimonials', 'posts', 'services', 'portfolios', 'pricing'));
    }

    public function aboutus()
    {
        $page = Page::where('slug', 'about-us')->firstOrFail();
        return view('sections.aboutus', compact('page'));;
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
