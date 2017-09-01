<?php

use Combi\{
    Helper as helper,
    Abort as abort,
    Core as core
};
use App as inner;

$loader = include __DIR__.'/../vendor/autoload.php';

core::up('app', require __DIR__.'/../env.php');

inner::runByCgi();

