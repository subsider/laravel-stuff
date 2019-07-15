<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class SetTurbolinksHeader
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
        /** @var Response $response */
        $response = $next($request);

        return $response->header('Turbolinks-Location', $request->route()->uri());
    }
}
