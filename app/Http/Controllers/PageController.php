<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use App\Models\Service;
use TCG\Voyager\Models\Page;

class PageController extends Controller
{
    function index($slug)
    {
        return $section = Service::where('slug', $slug)
            ->with('features')
            ->first();

        $title = str_replace('-', '_', $section->title);

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


            return view('sections.service-details', compact('section', 'pricing'));
    }


    function page($slug)
    {
        $section = Page::where('slug', $slug)
            ->firstOrFail();
        return view('sections.page.index', compact('section'));
    }
}
