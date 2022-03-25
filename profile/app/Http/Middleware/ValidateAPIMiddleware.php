<?php

namespace App\Http\Middleware;

use App\Models\Service;
use Closure;
use Illuminate\Http\Request;

class ValidateAPIMiddleware
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
        $tokenValid = Service::where('auth_key', $request->header('auth_key'))
            ->where('version', $request->header('api-version'))->exists();

        if (!$tokenValid) {
            return response()->json('Unauthorized', 401);
        }

        return $next($request);
    }
}
