<?php


namespace App\Tests\Application;


use App\Application\AddTicketToDataStoreHandler;
use App\Domain\ValueObject\TicketUpsertedEvent;
use JMS\Serializer\SerializerInterface;
use Liip\FunctionalTestBundle\Test\WebTestCase;

class AddTicketToDataStoreHandlerTest extends WebTestCase
{
    /** @test */
    public function itHandlesATicket()
    {
        // get text from request.json, process it through the code and expect response back that is in response.json
        $request = file_get_contents(__DIR__ . '/AddTicketToDataStoreHandlerTest/request.json');

        /**
         * @var SerializerInterface $serializer
         */
        $serializer = self::bootKernel()->getContainer()->get('jms_serializer');

        $event = $serializer->deserialize($request, TicketUpsertedEvent::class, 'json');

        $handler = new AddTicketToDataStoreHandler($serializer);
        $handler->handle($event);

        $repository = $this->getContainer()->get('Test.App\Infrastructure\TicketRepository');

        $this->assertEquals(1, $repository->findAll());
    }
}