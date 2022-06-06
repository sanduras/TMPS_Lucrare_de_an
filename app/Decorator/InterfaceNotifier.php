<?php

declare(strict_types=1);


namespace app\Decorator;

interface InterfaceNotifier {
    public function send(string $message): string;
}
