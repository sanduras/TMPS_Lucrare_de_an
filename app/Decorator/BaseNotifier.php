<?php

declare(strict_types=1);

namespace App\Decorator;

class BaseNotifier implements InterfaceNotifier{
    public function send(string $message): string
    {
        return $message ;
    }
}