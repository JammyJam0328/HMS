<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BranchAdmin
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
        if (!auth()->user()->role == 'branch-admin') {
           abort(403, 'Unauthorized action.');
        }
        return $next($request);
    }
}