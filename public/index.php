<?php

use Combi\{
    Helper as helper,
    Abort as abort,
    Runtime as rt
};

$loader = include __DIR__.'/../vendor/autoload.php';

rt::up('app', require __DIR__.'/../env.php');

rt::app()->runByCgi();

