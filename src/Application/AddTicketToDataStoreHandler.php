<?php


namespace App\Application;


use App\Domain\ValueObject\TicketUpsertedEvent;

class AddTicketToDataStoreHandler
{
    public function handle(TicketUpsertedEvent $event)
    {
        return true;
    }
}