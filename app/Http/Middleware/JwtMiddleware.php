<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class JwtMiddleware
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
        try {
            // Check if the request contains a valid JWT token
            $token = JWTAuth::parseToken();
            if (!$token->check()) {
                throw new Exception('Unauthorized');
            }

            // Authenticate the user based on the token
            $user = $token->authenticate();
            if (!$user) {
                throw new Exception('User not found');
            }

            // Pass the authenticated user to the request
            $request->merge(['user' => $user]);
        } catch (Exception $e) {
            return response()->error($e->getMessage(), 401);
        }

        return $next($request);
    }
}
