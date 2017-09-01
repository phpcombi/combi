<?php

namespace App\ControllerGroups;

use Combi\{
    Helper as helper,
    Abort as abort,
    Core as core
};

use App as inner;

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
