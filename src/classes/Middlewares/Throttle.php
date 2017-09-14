<?php

namespace App\Middlewares;

use Combi\{
    Helper as helper,
    Abort as abort,
    Runtime as rt
};


use Combi\Web\{
    Request,
    Response,
    Middleware
};

class Throttle extends Middleware
{
    public function handle(callable $next, Request $request): Response {
        helper::debug('middleware throttle');
        return $next($request);
    }
}
