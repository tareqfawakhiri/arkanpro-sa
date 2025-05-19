<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Pricing;

class ServicesController extends Controller
{
    function index()
    {
        //dd('xx xxx');
        return view('sections.services');
    }

    function details($slug)
    {
        $section = Service::where('slug', $slug)
            ->where('status', 'PUBLISHED')
            ->firstOrFail();

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

        return view('sections.services-details', compact('section', 'pricing'));
    }
}
