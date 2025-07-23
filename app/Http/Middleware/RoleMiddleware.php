<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $user = auth()->user();

        foreach ($roles as $role) {
            if ($role === 'super_admin' && $user->isSuperAdmin()) {
                return $next($request);
            }
            if ($role === 'admin' && $user->isAdmin()) {
                return $next($request);
            }
            if ($role === 'user' && $user->isUser()) {
                return $next($request);
            }
        }

        abort(403, 'Unauthorized');
    }
}
