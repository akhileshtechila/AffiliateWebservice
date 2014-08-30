<?php

namespace Affiliate\WebservicesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Affiliate\AffiliateManagementBundle\Entity\Deal;

class EditDealController extends Controller {

    public function EditDealAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        /* Check The request is Post */
        if ($request->getMethod() == "POST") {
            $dealId = $request->get('dealId');
            $dName = $request->get('dName');
            $description = $request->get('description');
            $dealDuration = $request->get('dealDuration');
        } else {
            return new JsonResponse($this->noPostData());
        }
        /* $dName = "Main Deal";
          $description = "Main Deal sddasdasdasd";
          $dealDuration = "30 min"; */
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

            $Deal = $em->getRepository("AffiliateAffiliateManagementBundle:Deal")->find($dealId);

            if (!$Deal) {
                $errorMsg = "Error! No Entity Found";
                return new JsonResponse($this->blankField($errorMsg));
            }
            $Deal->setDName($dName);
            $Deal->setDescription($description);
            $Deal->setDealDuration($dealDuration);

            //$em->persist($Deal);
            $em->flush();

            if ($Deal->getId() != "") {
                $dataQuery = "Deal Edited";
                return new JsonResponse($this->dealSuccess($dataQuery));
            } else {
                return new JsonResponse($this->dealUnsuccessful());
            }
            return new JsonResponse($this->dealUnsuccessful());
        }


        return $this->render('AffiliateWebservicesBundle:EditDeal:EditDeal.html.twig');
    }

    public function DeleteDealAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        /* Check The request is Post */
        if ($request->getMethod() == "POST") {
            $dealId = $request->get('dealId');
        } else {
            return new JsonResponse($this->noPostData());
        }
        //$dealId = "2";
        if ($dealId != "") {
            $Deal = $em->getRepository("AffiliateAffiliateManagementBundle:Deal")->find($dealId);
            if (!$Deal) {
                $errorMsg = "Error! No Deal Found";
                return new JsonResponse($this->blankField($errorMsg));
            }
            $em->remove($Deal);
            $em->flush();
            $dataQuery = "Deal Deleted";
            return new JsonResponse($this->dealDelete($dataQuery));
        } else {
            $errorMsg = "Error! No Deal Id Submitted";
            return new JsonResponse($this->blankField($errorMsg));
        }
        return $this->render('AffiliateWebservicesBundle:EditDeal:EditDeal.html.twig');
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

    private function dealDelete($dataQuery) {
        $data = array();

        $data['errorCode'] = "4";
        $data['errorMessage'] = "Deal Deleted successfully";
        $data['result'] = $dataQuery;

        $mainData = array();
        $mainData['data'] = $data;

        return $mainData;
    }

}
