<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Exception\SuspiciousOperationException;

class DomainCheck
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
        $allowedHosts = explode(',', env('ALLOWED_DOMAINS'));
        $origin = request()->host();
        if(!(isset($origin) && in_array($origin, $allowedHosts))){
           
            return response(array("status"=>false, "message"=>"Unsupported host"), 401);

            }
   

        return $next($request);
    }
}
