<?php

namespace App\Play;

class Provider
{
    public $sender;
    public $logger;

    public function __construct(Sender $sender, Logger $logger) {
        $this->sender   = $sender;
        $this->logger   = $logger;
    }

    public function send() {
        var_dump($this->sender);
        var_dump($this->logger);
    }
}
