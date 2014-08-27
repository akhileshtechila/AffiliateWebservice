<?php

namespace Affiliate\WebservicesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListingAffiliatePaymentRequestController extends Controller {

    public function ListingAffiliatePaymentRequestAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        if ($request->getMethod() == "POST") {
            /* Get The Json String */
            $requestPayId = $request->get('affRequestPayId');
        } else {
            return new JsonResponse($this->noPostData());
        }
        
        $entities = $em->getRepository('AffiliateAffiliateManagementBundle:AffiliatePayReq')->findAll();

         if(!$entities){
             $errorMsg = "No Data Found";
             return new JsonResponse($this->blankField($errorMsg));
         }
         
          ######################################################
        /* VerY Very Important COde */
        $dataentity = array();
        $affiliatePayReqList = array();
        foreach ($entities as $list) {
            $affiliatePayReqList['affiliatePayReqId'] = $list->getId();
            $affiliatePayReqList['requestedAmt']  = $list->getRequestedAmt();
            $affiliatePayReqList['requestedDate'] = $list->getRequestedDate();
            $affiliatePayReqList['reqDescription'] = $list->getReqDescription();
            $affiliatePayReqList['reqStatus']       = $list->getReqStatus();
            $affiliatePayReqList['relDescription']  = $list->getRelDescription();
            $affiliatePayReqList['relStatus']   = $list->getRelStatus();
            $affiliatePayReqList['releasedDate'] = $list->getReleasedDate();
            $affiliatePayReqList['affiliateInfoReleasedBy'] = $list->getUserinfoReleasedBy()->getUserName();
            $affiliatePayReqList['affiliateInfoRequestedBy'] = $list->getUserinfoRequestedBy()->getUserName();
            $affiliatePayReqList['reqDate'] = $affiliatePayReqList['requestedDate']->format("Y-m-d");
            $affiliatePayReqList['relDate'] = $affiliatePayReqList['releasedDate']->format("Y-m-d");
           
            array_push($dataentity, $affiliatePayReqList);
        }
        if (!empty($dataentity) || $dataentity != null) {
            return new JsonResponse($this->ListingAffiliatePayReq($dataentity));
        } else {
            return new JsonResponse($this->listNotFound());
        }
        
        return $this->render('AffiliateWebservicesBundle:ListingAffiliatePaymentRequest:ListingAffiliatePaymentRequest.html.twig');
    }
    
       private function ListingAffiliatePayReq($dataentity){
        $data = array();
        $data['errorCode'] = "0";
        $data['errorMessage'] = "Affiliate Payment listing";
        $data['result'] = $dataentity;
        $mainData = array();
        $mainData['data'] = $data;

        return $mainData;
    }

    public function listNotFound() {
        $data = array();
        $data['errorCode'] = "1";
        $data['errorMessage'] = "Affiliate payment is empty";
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
