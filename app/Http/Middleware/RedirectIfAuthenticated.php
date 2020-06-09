<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Session;
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
            if(auth()->user()->level == 'TU' && auth()->user()->active == 1) {
                return redirect('/admin');
            }
            else if(auth()->user()->level == 'PEGAWAI' && auth()->user()->active == 1) {
                return redirect('/');
            }
            else if(auth()->user()->level == 'ADMIN' && auth()->user()->active == 1) {
                return redirect('/it');
            }
            else {
                Auth::logout();
                Session::flush();
                return redirect(url('login'))->withInput()->with('not_active','Akun anda belum aktif, Hubungi admin untuk aktivasi');
            }
        }
        return $next($request);
    }
}
