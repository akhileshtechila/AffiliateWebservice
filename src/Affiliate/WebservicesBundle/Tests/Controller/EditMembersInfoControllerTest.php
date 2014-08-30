<?php

namespace Affiliate\WebservicesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EditMembersInfoControllerTest extends WebTestCase
{
    public function testEditmembersinfo()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/EditMembersInfo');
    }

}
