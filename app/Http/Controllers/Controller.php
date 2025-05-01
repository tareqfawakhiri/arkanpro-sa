<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function language(Request $request)
    {
        session()->put('locale', $request->lang);
        App::setLocale($request->lang);


        $lang = resource_path('lang/' . session()->get('locale'));
        Cache::forget('translations');
        Cache::rememberForever('translations', function () use ($lang) {
            return collect(File::allFiles($lang))->flatMap(function ($file) {
                return [
                    $translation = $file->getBasename('.php') => trans($translation),
                ];
            })->toJson();
        });

        return redirect()->back();
    }

    function theme(Request $request)
    {
        session()->put('theme', $request->theme);

        return redirect()->back();
    }

    function quroosh()
    {

        $section = Service::where('slug', 'quroosh')
            ->with('features')
            ->first();


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


        return view('sections.quroosh', compact('section', 'pricing'));
    }
}
