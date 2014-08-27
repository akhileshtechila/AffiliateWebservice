<?php

namespace Affiliate\WebservicesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Affiliate\AffiliateManagementBundle\Entity\Userinfo;
use Affiliate\AffiliateManagementBundle\Entity\AdminPayReq;

class ListingAdminPayReqController extends Controller {

    public function ListingAdminPayReqAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        if ($request->getMethod() == "POST") {
            /* Get The Json String */
            $requestPayId = $request->get('requestPayId');
        }else{
            return new JsonResponse($this->noPostData());
        }
        
         $entities = $em->getRepository('AffiliateAffiliateManagementBundle:AdminPayReq')->findAll();

         if(!$entities){
             $errorMsg = "No Data Found";
             return new JsonResponse($this->blankField($errorMsg));
         }
        ######################################################
        /* VerY Very Important COde */
        $dataentity = array();
        $adminPayReqList = array();
        foreach ($entities as $list) {
            $adminPayReqList['adminPayReqId'] = $list->getId();
            $adminPayReqList['requestedAmt']  = $list->getRequestedAmt();
            $adminPayReqList['requestedDate'] = $list->getRequestedDate();
            $adminPayReqList['reqDescription'] = $list->getReqDescription();
            $adminPayReqList['reqStatus']       = $list->getReqStatus();
            $adminPayReqList['relDescription']  = $list->getRelDescription();
            $adminPayReqList['relStatus']   = $list->getRelStatus();
            $adminPayReqList['releasedDate'] = $list->getReleasedDate();
            $adminPayReqList['admininfoReleasedBy'] = $list->getAdmininfoReleasedBy()->getUserName();
            $adminPayReqList['admininfoRequestedBy'] = $list->getAdmininfoRequestedBy()->getUserName();
            $adminPayReqList['reqDate'] = $adminPayReqList['requestedDate']->format("Y-m-d");
            $adminPayReqList['relDate'] = $adminPayReqList['releasedDate']->format("Y-m-d");
           
            array_push($dataentity, $adminPayReqList);
        }
        if (!empty($dataentity) || $dataentity != null) {
            return new JsonResponse($this->ListingAdminPayReq($dataentity));
        } else {
            return new JsonResponse($this->listNotFound());
        }
        
        
        return $this->render('AffiliateWebservicesBundle:ListingAdminPayReq:ListingAdminPayReq.html.twig');
    }

    private function ListingAdminPayReq($dataentity){
        $data = array();
        $data['errorCode'] = "0";
        $data['errorMessage'] = "Payment Request listing";
        $data['result'] = $dataentity;
        $mainData = array();
        $mainData['data'] = $data;

        return $mainData;
    }

    public function listNotFound() {
        $data = array();
        $data['errorCode'] = "1";
        $data['errorMessage'] = "Admin Payment List is empty";
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
