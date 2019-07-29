<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthenticateMiddleware
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
        if(Auth::check())
        {
            if($request->User()->userType=='Admin')
            {
               return $next($request);
            }
             return redirect('/');    
        }
        return redirect('/login');
    }
}
