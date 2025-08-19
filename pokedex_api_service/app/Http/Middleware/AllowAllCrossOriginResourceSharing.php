<?php

namespace App\Http\Middleware;

use App\Constants\ApplicationConstants;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AllowAllCrossOriginResourceSharing
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $response->headers->add([ApplicationConstants::ACCESS_CONTROL_ALLOW_ORIGIN_HEADER_KEY => ApplicationConstants::ACCESS_CONTROL_ALLOW_ORIGIN_ALLOW_ALL]);

        return $response;
    }
}
