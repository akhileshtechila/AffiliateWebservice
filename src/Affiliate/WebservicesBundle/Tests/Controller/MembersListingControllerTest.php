<?php

namespace Affiliate\WebservicesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MembersListingControllerTest extends WebTestCase
{
    public function testMemberslisting()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/MembersListing');
    }

}
