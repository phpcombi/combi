<?php

namespace App;

use Combi\{
    Helper as helper,
    Abort as abort,
    Core as core
};

$app = Package::instance();

$app->view = new \Combi\Web\View(new \Combi\Web\View\Twig(
    $app->path('src', 'views'), $app->path('tmp', 'view.cache')
));

$app->router = core::rt()->web->createRouter();