<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleBasedRedirect
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->role === 'reader') {
                return redirect()->route('articles.index');
            }

            if (Auth::user()->role === 'editor') {
                return redirect()->route('editor.index');
            }
        }
        return $next($request);
    }
}
