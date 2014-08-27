<?php

namespace Affiliate\WebservicesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ListingAdminPayReqControllerTest extends WebTestCase
{
    public function testListingadminpayreq()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ListingAdminPayReq');
    }

}
