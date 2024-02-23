<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ThrottleRequests extends \Illuminate\Routing\Middleware\ThrottleRequests
{

    public function handle($request, Closure $next, $maxAttempts = 60, $decayMinutes = 1, $prefix = '')
    {
        if ($request->has('mytoken')) {
            return $next($request);
        }
        return parent::handle($request, $next, $maxAttempts, $decayMinutes, $prefix);
    }
}
