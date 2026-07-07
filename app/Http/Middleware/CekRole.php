<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!in_array(session('role'), $roles)) {
            return redirect('/dashboard');
        }

        return $next($request);
    }
}