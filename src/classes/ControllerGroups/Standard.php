<?php

namespace App\ControllerGroups;

use Combi\{
    Helper as helper,
    Abort as abort,
    Runtime as rt
};

use Combi\Web\{
    Controller
};
use App\Middlewares;

abstract class Standard extends Controller
{
    protected function middlewares() {
        $this->addMiddlewares(new Middlewares\Auth(), new Middlewares\HeaderX());
    }
}
