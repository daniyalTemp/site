<?php

namespace App\Http\Middleware;

use App\Models\config;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class init
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $config = config::all();
        if (count($config) == 0 &&  $request->route()->uri == 'init'){
            return $next($request);
        }
       if (count($config) == 0 ){
            return  redirect()->route('Init');
        }

        if ($request->route()->uri == 'register' ||$request->route()->uri == 'init'){
            if (count($config) == 0 ){
                return  redirect()->route('Init');
            }

            abort(401);
        }

        return $next($request);
    }
}
