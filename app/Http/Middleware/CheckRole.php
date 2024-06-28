<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user->role == 'admin') {
            return $next($request);
        } elseif ($user->role == 'instructor') {
            return redirect('/instructor-dashboard');
        }

        return redirect('/');
    }
}
