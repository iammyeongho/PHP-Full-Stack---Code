<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Utils\TokenUtil;

class MyTokenAuth
{
    protected $tokenDI;

    /**
     * AuthController 생성자
     * 
     * @param MyTokenAuth $tokenUtil 토큰 유틸 DI
     */

    public function __construct(TokenUtil $tokenUtil) {
        // 의존성 주입
        $this->tokenDI = $tokenUtil;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $this->tokenDI->chkToken($request->bearerToken());
        return $next($request);
    }
}
