<?php

namespace Affiliate\WebservicesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Affiliate\AffiliateManagementBundle\Entity\Userinfo;
use Affiliate\AffiliateManagementBundle\Entity\Deal;

class DealListingController extends Controller {

    public function DealListingAction(Request $request) {
        /* Get The Doctrine Manager */
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AffiliateAffiliateManagementBundle:Deal')->findAll();

        ######################################################
        /* VerY Very Important COde */
        $dataentity = array();
        $dealList = array();
        foreach ($entities as $deal) {
            $dealList['dealId'] = $deal->getId();
            $dealList['dName'] = $deal->getDName();
            $dealList['description'] = $deal->getDescription();
            $dealList['dealDuration'] = $deal->getDealDuration();

            array_push($dataentity, $dealList);
        }
        if (!empty($dataentity) || $dataentity != null) {
            return new JsonResponse($this->listingDeal($dataentity));
        } else {
            return new JsonResponse($this->dealNotFound());
        }

        return $this->render('AffiliateWebservicesBundle:DealListing:DealListing.html.twig');
    }

    private function listingDeal($dataentity) {
        $data = array();
        $data['errorCode'] = "0";
        $data['errorMessage'] = "Deal listing";
        $data['result'] = $dataentity;
        $mainData = array();
        $mainData['data'] = $data;

        return $mainData;
    }

    public function dealNotFound() {
        $data = array();
        $data['errorCode'] = "1";
        $data['errorMessage'] = "Deal not found";
        $data['result'] = "";

        $mainData = array();
        $mainData['data'] = $data;
        return $mainData;
    }

    private function blankField($errorMsg) {
        $data = array();
        $data['errorCode'] = "2";
        $data['errorMessage'] = $errorMsg;
        $data['result'] = "";

        $mainData = array();
        $mainData['data'] = $data;
        return $mainData;
    }

    private function noPostData() {
        $data = array();
        $data['errorCode'] = "3";
        $data['errorMessage'] = "No Post Data";
        $data['result'] = "";

        $mainData = array();
        $mainData['data'] = $data;
        return $mainData;
    }

}
