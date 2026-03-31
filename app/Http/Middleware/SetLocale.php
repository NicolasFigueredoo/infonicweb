<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $supported = ['es', 'en', 'pt'];
        $locale = Session::get('locale', 'es');

        if (in_array($locale, $supported)) {
            App::setLocale($locale);
        }

        return $next($request);
    }
}
