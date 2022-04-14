<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckApproved
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->user()->aproved_at) {
            return redirect()->route('approval');
        }
        return $next($request);
    }
}
