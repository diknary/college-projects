<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Support\Facades\Redirect;

class Tamu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Session::has('NIM')) {
            return redirect::to('student-dashboard');
            }
        else if(Session::has('id') && Session::get('role') == 'staff'){
            return Redirect::to('staff-dashboard');
        }
        else if(Session::has('id') && Session::get('role') == 'pd'){
            return Redirect::to('supervisor-dashboard');
        }
        else if(Session::has('id') && Session::get('role') == 'admin'){
            return Redirect::to('admin-dashboard');
        }     
        return $next($request);
    }
}
