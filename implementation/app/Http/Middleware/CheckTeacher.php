<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use function Faker\Provider\pt_BR\check_digit;

class CheckTeacher
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
        if (Auth::check() && Auth::user()->isTeacher()){
            return $next($request);
        }

        return redirect('/');
    }
}
