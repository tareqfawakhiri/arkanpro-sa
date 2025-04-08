<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;

use Closure;

class LanguageManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        } else {
            session()->put('locale', 'en');
            App::setLocale('en');
        }
        $this->new_cache();
        return $next($request);
    }


    function new_cache()
    {
        $lang = resource_path('lang/' . session()->get('locale'));
        Cache::forget('translations');
        Cache::rememberForever('translations', function () use ($lang) {
            return collect(File::allFiles($lang))->flatMap(function ($file) {
                return [
                    $translation = $file->getBasename('.php') => trans($translation),
                ];
            })->toJson();
        });
    }
}
