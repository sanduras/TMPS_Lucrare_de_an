<?php

declare(strict_types=1);



namespace App\Decorator;;




class NotifierDecorator implements InterfaceNotifier {
    private InterfaceNotifier $notifier;

    public function __construct(InterfaceNotifier $notifier)
    {
        $this->notifier = $notifier;
    }

    public function send(string $message): string
    {
        return $this->notifier->send($message);
    }
}
