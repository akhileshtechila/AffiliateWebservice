<?php

namespace Affiliate\WebservicesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DealControllerTest extends WebTestCase
{
    public function testDeal()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Deal');
    }

}
