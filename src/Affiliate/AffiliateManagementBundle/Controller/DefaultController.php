<?php

namespace Affiliate\AffiliateManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AffiliateAffiliateManagementBundle:Default:index.html.twig', array('name' => $name));
    }
}
