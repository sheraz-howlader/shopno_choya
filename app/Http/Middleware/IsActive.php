<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

class IsActive
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->status == 1) {
            return $next( $request );
        }

        return redirect()->route('inactive.message');
    }
}
