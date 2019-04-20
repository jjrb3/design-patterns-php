<?php

class Support
{
    private $username;

    function __construct($username)
    {
        $this->username = $username;
    }

    public function sendMessage(string $title, string $message, string $phoneNumber = '')
    {
        if('' === $phoneNumber) {
            return $this->sendPublic($title, $message);
        } else {
            return $this->sendPrivate($title, $message, $phoneNumber);
        }
    }

    protected function sendPublic(string $title, string $message)
    {
        // El mensaje se publicaría en el tablón de soporte (público)
        // Emplearía una clase especial PublishBoard
    }

    protected function sendPrivate(string $title, string $message, string $phoneNumber)
    {
        // El mensaje se enviaría al backend del soporte (privado)
        // Emplearía una clase especial PublishBackend
    }
}