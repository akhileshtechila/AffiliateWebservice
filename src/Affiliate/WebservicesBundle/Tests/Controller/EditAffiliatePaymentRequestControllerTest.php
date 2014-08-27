<?php

namespace Affiliate\WebservicesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EditAffiliatePaymentRequestControllerTest extends WebTestCase
{
    public function testEditaffiliatepaymentrequest()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/EditAffiliatePaymentRequest');
    }

}
