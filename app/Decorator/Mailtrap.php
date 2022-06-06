<?php

declare(strict_types=1);


namespace App\Decorator;

class MailTrap extends NotifierDecorator {

public function send(string $message): string
{
    $message = parent::send($message);

    return " Display Mailtrap notification: {$message}";
}
}