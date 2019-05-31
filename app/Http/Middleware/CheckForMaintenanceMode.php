<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as Middleware;

class CheckForMaintenanceMode extends Middleware
{

    protected $request;
    protected $app;
 
    public function __construct(Application $app, Request $request)
    {
        $this->app = $app;
        $this->request = $request;
    }

    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array
     */
    protected $except = [
        //
    ];

    public function handle($request, Closure $next)
    {
        if ($this->app->isDownForMaintenance())
        {
        	return response()->make(view('errors.503'), 500);
        }
 
        return $next($request);
    }
}
