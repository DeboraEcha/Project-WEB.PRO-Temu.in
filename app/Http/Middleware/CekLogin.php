<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekLogin
{
    public function handle(Request $request, Closure $next)
    {
        if (!session('id_pengguna')) {
            return redirect('/login');
        }

        return $next($request);
    }
}