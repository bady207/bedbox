<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsUser
{
    public function handle(Request $request, Closure $next)
    {
        // Pastikan user sudah login dan bukan admin
        if (Auth::check() && Auth::user()->role === 'user') {
            return $next($request);
        }

        // Redirect atau tampilkan error jika bukan user
        return redirect('/');  // Atau halaman lain yang sesuai
    }
}

        return $next($request);
    }
}
