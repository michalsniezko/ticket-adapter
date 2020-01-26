<?php


namespace App\Tests\Application;


use Liip\FunctionalTestBundle\Test\WebTestCase;

class AddTicketToDataStoreHandlerTest extends WebTestCase
{
    /** @test */
    public function itHandlesATicket()
    {
        // get text from request.json, process it through the code and expect response back that is in response.json
        $request = file_get_contents(__DIR__ . '/AddCommentToDataStoreHandlerTest/request.json');


    }
}