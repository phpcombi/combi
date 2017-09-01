<?php

namespace App\Middlewares;

use Combi\{
    Helper as helper,
    Abort as abort,
    Core as core
};

use App as inner;

use Combi\Web\{
    Request,
    Response,
    Middleware
};

class Auth extends Middleware
{
    public function handle(callable $next, Request $request): Response {
        helper::debug('middleware auth');
        return $next($request);
    }
}
