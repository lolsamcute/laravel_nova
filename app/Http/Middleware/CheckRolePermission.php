<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

 use Illuminate\Support\Facades\Auth;

class CheckRolePermission
{

   


    public function handle($request, Closure $next, $role, $permission = null)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        if (!Auth::user()->hasRole($role)) {
            abort(403, 'Unauthorized action.');
        }

        if ($permission !== null && !Auth::user()->can($permission)) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }

}
