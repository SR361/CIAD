<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Hospital
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // use EmailSendTrait;

    public function handle($request, Closure $next)
    {
        if (!Auth::guest()) {
            if (Auth::user()->role == User::ROLE_HOSPITAL) {
                return $next($request);
            } else {
                return redirect()->route('signpage');
            }
        } else {
            return redirect()->route('signpage')->withError(__('app/messsages.please_login_to_access_page'));
        }
    }
}
