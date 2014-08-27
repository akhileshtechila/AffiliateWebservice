<?php

namespace Affiliate\WebservicesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EditAdminPaymentRequestControllerTest extends WebTestCase
{
    public function testEditadminpaymentrequest()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/EditAdminPaymentRequest');
    }

}
