<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SuperAdmin
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

        if (!Auth::guest() )
        {
            if( Auth::user()->role == User::ROLE_SUPER_ADMIN)
            {
                return $next($request);
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect()->route('admin.login')->withError(__('app/messsages.please_login_to_access_page'));
        }


    }
}
