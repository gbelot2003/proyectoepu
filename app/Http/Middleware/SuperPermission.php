<?php

namespace App\Http\Middleware;

use Closure;

class SuperPermission
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
        if(!$request->user()->hasRole(['super'])){
            return redirect('home');
        }
        return $next($request);
    }
}
