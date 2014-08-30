<?php

namespace Affiliate\WebservicesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MembersInfoControllerTest extends WebTestCase
{
    public function testMembersinfoadd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/MembersInfoAdd');
    }

}
