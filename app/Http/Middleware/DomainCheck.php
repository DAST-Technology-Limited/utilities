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

        $requestHost = parse_url($request->getHttpHost(),  PHP_URL_HOST);
        if(!app()->runningUnitTests()) {
            if(!in_array($requestHost,$allowedHosts)) {
                $requestInfo = [
                    'host' => $requestHost,
                    'ip' => $request->getClientIp(),
                    'url' => $request->getRequestUri(),
                    'agent' => $request->header('User-Agent'),
                ];
                
                return response(array("status"=>false, "message"=>"Unsupport request origin"), 401);

            }
        }

        return $next($request);
    }
}
