<?php

namespace App;

use Combi\{
    Helper as helper,
    Abort as abort,
    Runtime as rt
};

$app = Package::instance();

$router = $app->router;

$router->addPsr4(__DIR__.'/classes/Controllers', 'App\\Controllers');

// You can custom define route like this:

// use FastRoute\RouteCollector;
// $router->addCustom(function(RouteCollector $r) {
//     $r->addRoute('GET', '/custom', [Controllers\User::class, 'getList']);
// });

