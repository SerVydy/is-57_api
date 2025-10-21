<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Abort
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        info($response->getStatusCode());
        if($response->getStatusCode() == 404){
            return response()->json([
                "message" => "Not Found",
                "status" => 404,
            ]);
        };
        return $next($request);
    }
}
