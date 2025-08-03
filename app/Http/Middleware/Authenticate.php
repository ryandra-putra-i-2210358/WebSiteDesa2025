<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        // Kalau request bukan JSON (biasanya browser)
        if (! $request->expectsJson()) {

            // Jika URL mengandung /admin, redirect ke halaman /
            if ($request->is('admin/*')) {
                return '/';
            }

            // Selain itu, redirect ke login
            return route('login');
        }
    }

}
