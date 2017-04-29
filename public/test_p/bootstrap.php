<?php

namespace Test\P;

class Package extends \Combi\Core\Package {

}

$package = Package::instance(__DIR__);

combi()->register($package);
