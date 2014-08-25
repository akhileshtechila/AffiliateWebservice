<?php

namespace Affiliate\WebservicesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AffiliateDealControllerTest extends WebTestCase
{
    public function testAffiliatedeal()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AffiliateDeal');
    }

}
