<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsUser
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->admin) {
            return redirect()->route('admin.users.index');
        }
        return $next($request);
    }
}
