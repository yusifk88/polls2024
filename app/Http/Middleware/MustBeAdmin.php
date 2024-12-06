<?php

namespace App\Http\Middleware;

use App\Models\Account;
use App\Services\AuthService;
use App\Services\ResponseService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MustBeAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (AuthService::currentAccount()->user_level!=Account::USER_LEVEL_ADMIN){
            return ResponseService::FailedResponse("You don't have permission to access this page", null,Response::HTTP_FORBIDDEN);
        }

        return $next($request);
    }
}
