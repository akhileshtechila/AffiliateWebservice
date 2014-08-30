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

class ListingAffiliateDealController extends Controller {

    public function ListingAffiliateDealAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AffiliateAffiliateManagementBundle:AffiliateDeal')->findAll();

        if (!$entities) {
            $errorMsg = "No Data Found";
            return new JsonResponse($this->blankField($errorMsg));
        }

        ######################################################
        /* VerY Very Important COde */
        $dataentity = array();
        $affiliateDealList = array();
        foreach ($entities as $deal) {
            $affiliateDealList['AffiliateDealId'] = $deal->getId();
            $affiliateDealList['dName'] = $deal->getDeal()->getDName();
            $affiliateDealList['description'] = $deal->getDescription();
            $affiliateDealList['userInfo'] = $deal->getUserInfo()->getEmail();

            array_push($dataentity, $affiliateDealList);
        }
        if (!empty($dataentity) || $dataentity != null) {
            return new JsonResponse($this->affiliateListingDeal($dataentity));
        } else {
            return new JsonResponse($this->dealNotFound());
        }
        return $this->render('AffiliateWebservicesBundle:ListingAffiliateDeal:ListingAffiliateDeal.html.twig');
    }

    private function affiliateListingDeal($dataentity) {
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
