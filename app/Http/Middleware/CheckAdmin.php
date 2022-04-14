<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->user()->admin) {
            return redirect()->route('home');
        }
        return $next($request);
    }
}
