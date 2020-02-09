<?php

namespace App\Infrastructure\Repository;

use App\Domain\Entity\Ticket;
use App\Domain\Repository\TicketRepositoryInterface;

// as long as our implementation conforms to the interface, tests will never fail
class TicketRepository implements TicketRepositoryInterface
{
    public function save(Ticket $ticket)
    {

    }
}