<?php

namespace Affiliate\WebservicesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Affiliate\AffiliateManagementBundle\Entity\Userinfo;
use Affiliate\AffiliateManagementBundle\Entity\Deal;
use Affiliate\AffiliateManagementBundle\Entity\AffiliateDeal;

class AffiliateDealController extends Controller {

    public function AffiliateDealAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        /* Check The request is Post */
         if ($request->getMethod() == "POST") {           
          $userId = $request->get('userId');
          $description = $request->get('description');
          $dealId = $request->get('dealId');
          } else {
          return new JsonResponse($this->noPostData());
          } 
        /*$userId = 2;
        $description = "vcxcvxcvxcv";
        $dealId = 1;*/
        if ($userId == "") {
            $errorMsg = "Affiliate is Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } else if ($description == "") {
            $errorMsg = "Description Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } else if ($dealId == "") {
            $errorMsg = "Deal is Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } else {

            $Userinfo = $em->getRepository('AffiliateAffiliateManagementBundle:Userinfo')->find($userId);

            if (!$Userinfo) {
                $errorMsg = "User Information is Empty";
                return new JsonResponse($this->blankField($errorMsg));
            }

            $Deal = $em->getRepository('AffiliateAffiliateManagementBundle:Deal')->find($dealId);

            if (!$Deal) {
                $errorMsg = "Deal Information is Empty";
                return new JsonResponse($this->blankField($errorMsg));
            }
            $AffiliateDeal = new AffiliateDeal();

            $AffiliateDeal->setDeal($Deal);
            $AffiliateDeal->setUserinfo($Userinfo);
            $AffiliateDeal->setDescription($description);

            $em->persist($AffiliateDeal);
            $em->flush();

            if ($AffiliateDeal->getId() != "") {
                $dataQuery = "Affiliate Deal Added";
                return new JsonResponse($this->dealSuccess($dataQuery));
            } else {
                return new JsonResponse($this->dealUnsuccessful());
            }
        }

        return $this->render('AffiliateWebservicesBundle:AffiliateDeal:AffiliateDeal.html.twig');
    }

    private function dealSuccess($dataQuery) {
        $data = array();

        $data['errorCode'] = "0";
        $data['errorMessage'] = "Affiliate Deal successfully Added";
        $data['result'] = $dataQuery;

        $mainData = array();
        $mainData['data'] = $data;

        return $mainData;
    }

    public function dealUnsuccessful() {
        $data = array();
        $data['errorCode'] = "1";
        $data['errorMessage'] = "Affiliate Deal information is missing";
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
