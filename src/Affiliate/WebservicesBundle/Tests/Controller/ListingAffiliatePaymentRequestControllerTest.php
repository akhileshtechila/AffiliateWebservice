<?php

namespace Affiliate\WebservicesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ListingAffiliatePaymentRequestControllerTest extends WebTestCase
{
    public function testListingaffiliatepaymentrequest()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ListingAffiliatePaymentRequest');
    }

}
