<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Pricing;

class PageController extends Controller
{
    function index($title)
    {
        $section = Service::where('title', $title)
            ->with('features')
            ->first();

        $title = str_replace('', '_', $section->title);

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

        if (view()->exists('sections.page.' . $title))
            return view('sections.page.' . $title, compact('section', 'pricing'));
        else
            return view('sections.page.index', compact('section', 'pricing'));
    }

}
