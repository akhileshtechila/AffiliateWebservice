<?php

namespace Affiliate\WebservicesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Affiliate\AffiliateManagementBundle\Entity\Deal;

class DealController extends Controller {

    public function DealAction(Request $request) {
        
        $em = $this->getDoctrine()->getManager();
        
        /* Check The request is Post */
        if ($request->getMethod() == "POST") {           
            $dName = $request->get('dName');
            $description = $request->get('description');
            $dealDuration = $request->get('dealDuration');             
        } else {
            return new JsonResponse($this->noPostData());
        } 
           /* $dName = "Main Deal";
            $description = "Main Deal sddasdasdasd";
            $dealDuration = "30 min";*/
        if ($dName == "") {
            $errorMsg = "Deal Name is Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } else if ($description == "") {
            $errorMsg = "Description Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } else if ($dealDuration == "") {
            $errorMsg = "Deal Duration Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } else {

            $Deal = new Deal();
            $Deal->setDName($dName);
            $Deal->setDescription($description);
            $Deal->setDealDuration($dealDuration);

            $em->persist($Deal);
            $em->flush();

            if ($Deal->getId() != "") {
                $dataQuery ="Deal Added";
                return new JsonResponse($this->dealSuccess($dataQuery));
            } else {
                return new JsonResponse($this->dealUnsuccessful());
            }
        }

        return $this->render('AffiliateWebservicesBundle:Deal:Deal.html.twig');
    }



    private function dealSuccess($dataQuery) {
        $data = array();

        $data['errorCode'] = "0";
        $data['errorMessage'] = "Deal successfully Added";
        $data['result'] = $dataQuery;

        $mainData = array();
        $mainData['data'] = $data;

        return $mainData;
    }

        public function dealUnsuccessful() {
        $data = array();
        $data['errorCode'] = "1";
        $data['errorMessage'] = "Deal information is missing";
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
