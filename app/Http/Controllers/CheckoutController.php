<?php

namespace App\Http\Controllers;

use App\Models\Pricing;

class CheckoutController extends Controller
{

    function details($slug)
    {
        $pricing = Pricing::where('slug', $slug)
            ->firstOrFail();


            $pricing->pricing_check = Pricing::select('pricing_checklist.title', 'pricing_checklist.title_ar')
                ->leftJoin('pricing_check', 'pricing.id', '=', 'pricing_check.pricing_id')
                ->leftJoin('pricing_checklist', 'pricing_checklist.id', '=', 'pricing_check.pricing_checklist_id')
                ->WHERE('pricing.id', $pricing->id)
                ->orderBy('pricing_checklist.order')
                ->get();


            $pricing->pricing_uncheck = Pricing::select('pricing_checklist.title', 'pricing_checklist.title_ar')
                ->leftJoin('pricing_uncheck', 'pricing.id', '=', 'pricing_uncheck.pricing_id')
                ->leftJoin('pricing_checklist', 'pricing_checklist.id', '=', 'pricing_uncheck.pricing_checklist_id')
                ->WHERE('pricing.id', $pricing->id)
                ->orderBy('pricing_checklist.order')
                ->get();



        return view('sections.pricing-details', compact('pricing'));
    }
}
