<?php

namespace App\Play;

class Logger
{
    public $path;

    public function __construct(string $path) {
        $this->path = $path;
    }
}
