<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckProgramId
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
        if (!$request->hasHeader('Program_id')) {
            return response()->json(['message' => 'Program_id header is missing.'], 400);
        }

        return $next($request);
    }
}
