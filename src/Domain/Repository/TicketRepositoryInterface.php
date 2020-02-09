<?php

namespace App\Domain\Repository;

use App\Domain\Entity\Ticket;

interface TicketRepositoryInterface
{
    public function save(Ticket $ticket);
}