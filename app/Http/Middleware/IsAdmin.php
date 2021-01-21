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
        $user = Auth::user();
        
        $role = $user->type;

        if(!$user){
            return redirect('/admin/login');
        }

        if($role != 'admin'){
            return redirect('/');
        }else{
            
            return $next($request);
            
        }
        
        
    }
}
