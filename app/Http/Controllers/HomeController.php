<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Pricing;
use App\Models\Product;
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
        $partners = Partner::orderBy('order')->get();
        $clients = Client::orderBy('created_at')->get();

        $slider = Slider::where('status', 'published')
            ->orderBy('order')
            ->get();

        $isHome = true;
        $service = Service::where('status', 'ACTIVE')
            ->where('add_to_home_page_banner', 'YES')
            ->orderBy('order')
            ->first();

        $testimonials = Testimonial::orderByDesc('created_at')->get();

        $posts = Post::with(['category', 'author'])
            ->where('status', 'published')
            ->orderBy('order')
            ->get();

        $services = Service::where('status', 'PUBLISHED')
            ->orderBy('order')
            ->get();

        $section = Service::where('slug', 'quroosh')
            ->with('features')
            ->firstOrFail();

        $products = Product::where('status', 'ACTIVE')
            ->orderBy('order')
            ->get();
        $pricing = Pricing::orderBy('order')->get();
        $i = 0;
        foreach ($pricing as $plane) {
            $pricing[$i]->pricing_check = Pricing::select('pricing_checklist.title', 'pricing_checklist.title_ar')
                ->leftJoin('pricing_check', 'pricing.id', '=', 'pricing_check.pricing_id')
                ->leftJoin('pricing_checklist', 'pricing_checklist.id', '=', 'pricing_check.pricing_checklist_id')
                ->WHERE('pricing.id', $plane->id)
                ->orderBy('pricing_checklist.order')
                ->get();


            $pricing[$i]->pricing_uncheck = Pricing::select('pricing_checklist.title', 'pricing_checklist.title_ar')
                ->leftJoin('pricing_uncheck', 'pricing.id', '=', 'pricing_uncheck.pricing_id')
                ->leftJoin('pricing_checklist', 'pricing_checklist.id', '=', 'pricing_uncheck.pricing_checklist_id')
                ->WHERE('pricing.id', $plane->id)
                ->orderBy('pricing_checklist.order')
                ->get();
            $i++;
        }
        return view('sections.home', compact('partners', 'clients', 'slider', 'isHome', 'service', 'testimonials', 'posts', 'services', 'products', 'pricing', 'section'));
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
        return back()->with('success', trans('general.message-sent'));
    }
}
