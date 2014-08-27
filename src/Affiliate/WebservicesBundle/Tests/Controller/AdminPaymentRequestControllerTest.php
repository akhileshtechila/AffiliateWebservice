<?php

namespace Affiliate\WebservicesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminPaymentRequestControllerTest extends WebTestCase
{
    public function testAdminpaymentrequest()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AdminPaymentRequest');
    }

}
