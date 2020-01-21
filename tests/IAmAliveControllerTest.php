<?php


namespace App\Tests;

use Liip\FunctionalTestBundle\Test\WebTestCase;

class IAmAliveControllerTest extends WebTestCase
{
    /** @test */
    public function itReturnsA200StatusCode()
    {
        $client = $this->createClient();
        $client->request(
            'GET',
            '/adapter/tickets/i-am-alive'
        );
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}