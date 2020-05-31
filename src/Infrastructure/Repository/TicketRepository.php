<?php

namespace App\Infrastructure\Repository;

use App\Domain\Entity\Ticket;
use App\Domain\Repository\TicketRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping;

// as long as our implementation conforms to the interface, tests will never fail
class TicketRepository extends EntityRepository implements TicketRepositoryInterface
{
    public function save(Ticket $ticket)
    {
        $this->_em->persist($ticket);
        $this->_em->flush($ticket);
    }
}