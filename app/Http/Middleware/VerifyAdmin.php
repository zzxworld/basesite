<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class VerifyAdmin
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (! Auth::user()->isAdmin) {
            return redirect('/home');
        }

        return $next($request);
    }
}
