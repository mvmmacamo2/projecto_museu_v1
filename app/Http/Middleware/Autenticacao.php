<?php

namespace App\Http\Middleware;

use Closure;
use Auth; 

class Autenticacao
{

    public function handle($request, Closure $next)
    {
        if(Auth::check())
            return $next($request);
        return redirect('/login');
    }
}
