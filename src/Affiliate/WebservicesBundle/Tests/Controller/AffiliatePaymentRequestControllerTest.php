<?php

namespace Affiliate\WebservicesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AffiliatePaymentRequestControllerTest extends WebTestCase
{
    public function testAffiliatepaymentrequest()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AffiliatePaymentRequest');
    }

}
