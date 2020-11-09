<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
class ApiToken
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
        $token = request("_token");
        $user = User::where("remember_token",$token)->get();
        
        if(count($user) < 1 || empty($token))
            return response()->json(["cod"=>403,"mensaje"=>"Sin acceso a los datos"]);
        return $next($request);
    }
}
