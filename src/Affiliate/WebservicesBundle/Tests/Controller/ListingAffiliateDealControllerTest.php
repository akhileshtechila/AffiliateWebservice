<?php

namespace Affiliate\WebservicesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ListingAffiliateDealControllerTest extends WebTestCase
{
    public function testListingaffiliatedeal()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ListingAffiliateDeal');
    }

}
