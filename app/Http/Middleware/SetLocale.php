<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
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
        switch($request->server("HTTP_HOST"))
        {
            case "mosaiqo.dev" : $locale = "es"; break;
            case "mosaiqo.es" : $locale = "es"; break;
            case "mosaiqo.de" : $locale = "de"; break;
            case "mosaiqo.cat" : $locale = "cat"; break;
            case "mosaiqo.com" : 
            default            : 
                $locale = "en"; 
        }

        App::setLocale($locale);
        return $next($request);
    }
}
