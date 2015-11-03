<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

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
        if($request->has("lang"))
        {
            $locale = $request->get("lang");
        }
        else
        {
            switch($request->server("HTTP_HOST"))
            {
                case "mosaiqo.dev" : 
                case "es.mosaiqo.dev" : 
                case "www.mosaiqo.dev" : 
                case "mosaiqo.es" : 
                case "www.mosaiqo.es" : 
                    $locale = "es"; break;
                case "mosaiqo.de" : 
                case "www.mosaiqo.de" : 
                case "de.mosaiqo.com" : 
                    $locale = "de"; break;
                case "mosaiqo.cat" : 
                case "www.mosaiqo.cat" : 
                case "cat.mosaiqo.com" : 
                    $locale = "ca"; break;
                case "mosaiqo.com" : 
                case "www.mosaiqo.com" : 
                case "en.mosaiqo.com" : 
                default            : 
                    $locale = "en"; 
            }    
        }
        $locales = ["es" => "http://mosaiqo.es", "en" => "http://mosaiqo.com", "ca" => "http://mosaiqo.cat",/*"de" => "http://mosaiqo.de"*/];
        $languages = ["es" => "Español", "en" => "English", "ca" => "Catalá",/*"de" => "Deutsch"*/];
        
        View::share("languages", $languages);
        View::share("locales", $locales);
        View::share("alternate", $locale);

        App::setLocale($locale);
        return $next($request);
    }
}
