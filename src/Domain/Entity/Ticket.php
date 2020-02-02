<?php

namespace App\Domain\Entity;

class Ticket
{
    private $message;
    private $userId;
    private $taskId;

    public function getMessage()
    {
        return $this->message;
    }
}