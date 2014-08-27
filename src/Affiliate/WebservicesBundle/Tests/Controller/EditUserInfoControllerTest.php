<?php

namespace Affiliate\WebservicesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EditUserInfoControllerTest extends WebTestCase
{
    public function testEdituserinfo()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/EditUserInfo');
    }

}
