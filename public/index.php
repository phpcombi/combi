<?php

use Combi\{
    Helper as helper,
    Abort as abort,
    Core as core
};

require __DIR__.'/../vendor/autoload.php';

core::up('app', require __DIR__.'/../env.php');

