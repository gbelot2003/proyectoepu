<?php

namespace App\Http\Middleware;

use Closure;

class EditorPermission
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
        if(!$request->user()->hasRole(['super', 'admin', 'editor'])){
            return redirect('home');
        }
        return $next($request);
    }
}
