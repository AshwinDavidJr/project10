<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        $messages='You have No permission to access the page';
        session(['link' => url()->previous()]);
        if(Auth::User()->user_type=='Admin'){
            return $next($request);

        }
        elseif (Auth::User()->user_type=='Student'){
            return redirect(session('link'))->with('toast_error', 'You have no Permission to access this page');
        }



        return redirect(session('link'))->with('toast_error', 'You have no Permission to access this page');

    }
}
