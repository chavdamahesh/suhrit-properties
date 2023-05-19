<?php

namespace App\Http\Middleware;

use Symfony\Component\HttpFoundation\Session\Session;

use Closure;
use Config;
use App;

class Locale
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
        $session = new Session();
        $locale = $session->get('sitelocale');

        if(!$locale){
            $locale = Config::get('app.locale');
        }

        App::setLocale($locale);
        return $next($request);
    }
}