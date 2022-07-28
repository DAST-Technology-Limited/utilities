<?php

namespace App\Http\Middleware;

use App\Http\Controllers\PlatformTokenController;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Exception\SuspiciousOperationException;

class TokenAuth
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
          
        $ptoken = new PlatformTokenController();
        if(!isset($request->token)||!$ptoken->isValidToken($request->token)){
            
            // dd($request->token);
            return response(array("status"=>false, "message"=>"Incorrect Token"), 401);
        }
        
        return $next($request);
    }
}
