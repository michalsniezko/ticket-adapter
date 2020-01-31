<?php

namespace App\Application;

use App\Domain\Entity\Ticket;
use App\Domain\ValueObject\TicketUpsertedEvent;
use JMS\Serializer\SerializerInterface;

class AddTicketToDataStoreHandler
{
    /**
     * @var SerializerInterface
     */
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function handle(TicketUpsertedEvent $event)
    {
        // $event is a value object
        $data = $event->getData();

        // in order to deserialize our object from json we need to first serialize it towards json
        $ticket = $this->serializer->deserialize(
            $this->serializer->serialize($data, 'json'),
            Ticket::class,
            'json'
        );


    }
}