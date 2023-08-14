<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SignIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user())
        {
            $model = User::where('id', Auth::user()->id)->first();
            switch ($model->role_id) {
                case 0:
                    return redirect()->route('super.admin.dashboard');
                    break;
                case 1:
                    return redirect()->route('admin.dashboard');
                    break;
                case 2:
                    return redirect()->route('manager.dashboard');
                    break;
                case 3:

                    return redirect()->route('hr.dashboard');
                    break;
                case 4:
                    return redirect()->route('vendor.dashboard');
                    break;
                default:

                    return redirect()->route('employee.dashboard');
                    break;
            }

        }
        else
        {
            return $next($request);
        }

    }

}
