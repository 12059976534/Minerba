<?php

namespace App\Http\Middleware;

use App\Helpers\GlobalHelper;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // return redirect(RouteServiceProvider::HOME);
                if(!Auth::user()->is_administrator)
                {
                    if(!Auth::user()->hasRole('personal')){
                        if(!GlobalHelper::isVerifiedCompany()){
                            return redirect('my-company/edit');
                        }

                        return redirect('dashboard');
                    }
                    
                    return redirect('profile');
                }
                    
                return redirect('admin');
            }
        }

        return $next($request);
    }
}
