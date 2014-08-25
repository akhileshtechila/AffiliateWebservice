<?php

namespace Affiliate\WebservicesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SignUpUserControllerTest extends WebTestCase
{
    public function testSignupuser()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'SignUpUser');
    }

}
