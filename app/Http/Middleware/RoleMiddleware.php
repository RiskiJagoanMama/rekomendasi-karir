<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {

        // CEK APAKAH USER SUDAH LOGIN
        if (!auth()->check()) {
            return redirect('/login');
        }

        // CEK ROLE USER
        if (auth()->user()->role != $role) {

            // JIKA ROLE TIDAK SESUAI
            abort(403);

        }

        return $next($request);
    }
}