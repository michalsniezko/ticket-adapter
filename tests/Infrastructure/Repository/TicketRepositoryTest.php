<?php

namespace App\Tests\Infrastructure\Repository;

use App\Domain\Entity\Ticket;
use App\Tests\PrivatePropertyManipulator;
use PHPUnit\Framework\TestCase;

// Only test the repository, everything that is not a valueobject will get mocked
class TicketRepositoryTest extends TestCase
{
    use PrivatePropertyManipulator;

    /**
     * @test
     * get a comment, create repository, test first that it is empty, then save the comment and check if it has a ticket in it
     */
    public function itSavesATicketToDatabase()
    {
        // In DDD a repository is your connection in and out of the database, if I want to save anything to my DB
        // regarding tickets, I have to use repository class throughout the application

        $ticket = $this->getTicket();
        $repository = new TicketRepository();

        $this->assertEquals(0, $repository->findAll());
        $repository->save($ticket);
        $this->assertEquals(1, $repository->findAll());
        $ticketFromRepository = $repository->findById(1);
        $this->assertEquals('hey there', $this->getByReflection($ticketFromRepository, 'message'));
        $this->assertEquals('some user id', $this->getByReflection($ticketFromRepository, 'userId'));
        $this->assertEquals('some task id', $this->getByReflection($ticketFromRepository, 'taskId'));
    }

    private function getTicket()
    {
        $ticket = new Ticket();
        $this->setByReflection($ticket, 'message', 'hey there');
        $this->setByReflection($ticket, 'userId', 'some user id');
        $this->setByReflection($ticket, 'taskId', 'some task id');

        return $ticket;
    }
}