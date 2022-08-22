<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Config;
use DB;
use Artisan;

class CheckDBMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $db = 'icreatea_'.str_replace(".icreateagency.com","",$request->url);

        \Illuminate\Support\Facades\Config::set('database.connections.mysql.database', $db);
    
        return $next($request);
    }
}
