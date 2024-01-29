<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        //return $request->expectsJson() ? null : route('login');
        if (! $request->expectsJson()) {
            session()->flash('access-error', "Morate biti prijavljeni da biste pristupili ovoj stranici.Molimo da se ulogujete");
            return route('user.login');
        }
    }
}
