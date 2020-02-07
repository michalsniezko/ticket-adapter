<?php

namespace App\Tests\Infrastructure\Repository;

use App\Domain\Entity\Ticket;
use PHPUnit\Framework\TestCase;

// Only test the repository, everything that is not a valueobject will get mocked
class TicketRepositoryTest extends TestCase
{
    /** @test */
    public function itSavesATicketToDatabase()
    {
        // In DDD a repository is your connection in and out of the database, if I want to save anything to my DB
        // regarding tickets, I have to use repository class throughout the application

        $ticket = $this->getTicket();

    }

    private function getTicket()
    {
        return new Ticket();
    }
}