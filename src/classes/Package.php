<?php

namespace App;

use Combi\Core;

class Package extends Core\Package
{
    public function bootstrap(): bool {
        return true;
    }
}
