<?php

namespace Affiliate\WebservicesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EditAffiliateDealControllerTest extends WebTestCase
{
    public function testEditaffiliatedeal()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/EditAffiliateDeal');
    }

}
