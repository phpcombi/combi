<?php

namespace App;

$package = Package::instance(__DIR__);

combi()->register($package);

require __DIR__ . DIRECTORY_SEPARATOR . 'helpers.php';
