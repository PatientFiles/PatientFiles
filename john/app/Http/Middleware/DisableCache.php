<?php 
namespace App\Http\Middleware;

use Closure;
//use Illuminate\Contracts\Routing\Console\\Middleware;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

class DisableCache {

    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ( ! $response instanceof SymfonyResponse)
        {
            $response = new Response($response);
        }

        /**
         *   add headers to use pragma no-cache 
         */
        $response->header('Pragma', 'no-cache');
        $response->header('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');
        $response->header('Cache-Control', 'no-cache, must-revalidate, no-store, max-age=0, private');

        return $response;
    }
}