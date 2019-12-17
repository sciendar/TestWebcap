<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        if(Auth::user() !== null)
        {
            if(Auth::user()->role == 2)
            {
                return $next($request);
            }
            return redirect(route('contacts'))->with('error','Если Вы очень сильно хотите попасть в админку - напишите нам об этом ;)');
        }

        return $next($request);
    }
}
