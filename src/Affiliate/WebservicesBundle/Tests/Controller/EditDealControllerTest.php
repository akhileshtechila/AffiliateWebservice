<?php

namespace Affiliate\WebservicesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EditDealControllerTest extends WebTestCase
{
    public function testEditdeal()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/EditDeal');
    }

}
