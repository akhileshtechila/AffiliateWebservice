<?php

namespace Affiliate\WebservicesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DealListingControllerTest extends WebTestCase
{
    public function testDeallisting()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/DealListing');
    }

}
