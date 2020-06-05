<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
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
        if (Auth::guard($guard)->check()) {
            if(auth()->user()->level == 'TU') {
                return redirect('/manage/dashboard');
            }
            if(auth()->user()->level == 'PEGAWAI' && auth()->user()->status == 'ACTIVE') {
                return redirect('/guru');
            }
            if(auth()->user()->level == 'ADMIN' && auth()->user()->status != 'ACTIVE'){
                Auth::logout();
                Session::flush();
                return redirect(url('login'))->withInput()->with('not_active','Akun anda belum aktif, Hubungi admin untuk aktivasi');
            }
        }
        return $next($request);
        // if (Auth::guard($guard)->check()) {
        //     return redirect(RouteServiceProvider::HOME);
        // }

        // return $next($request);
    }
}
