<?php

namespace App\Http\Controllers;

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

    function change(Request $request)
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
}
