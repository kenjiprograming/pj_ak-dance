<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BasicAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $username = config('user.basicauth.username');
        $password = config('user.basicauth.password');

        if ($request->getUser() === $username && $request->getPassword() === $password) {
            return $next($request);
        }

        abort(401, "Basic認証のIDPWを入力してください。", [
            header('WWW-Authenticate: Basic realm="Private Page"'),
            header('Content-Type: text/plain; charset=utf-8')
        ]);
    }
}
