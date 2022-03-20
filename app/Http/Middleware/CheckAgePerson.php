<?php

namespace App\Http\Middleware;

use Closure;

class CheckAgePerson
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $age = 15;
        if ($age <= 18) {
            dd('Permission fail!');
        }

        return $next($request);
    }
}
