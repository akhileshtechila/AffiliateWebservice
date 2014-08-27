<?php

namespace Affiliate\WebservicesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Affiliate\AffiliateManagementBundle\Entity\Userinfo;
use Affiliate\AffiliateManagementBundle\Entity\AdminPayReq;
use Affiliate\AffiliateManagementBundle\Entity\AffiliatePayReq;

class AffiliatePaymentRequestController extends Controller {

    public function AffiliatePaymentRequestAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        if ($request->getMethod() == "POST") {
            $requestedAmt = $request->get('requestedAmt');
            $requestedDate = $request->get('requestedDate');
            $reqDescription = $request->get('reqDescription');
            $reqStatus = $request->get('reqStatus');
            $relDescription = $request->get('relDescription');
            $relStatus = $request->get('relStatus');
            $releasedDate = $request->get('releasedDate');
            $userInfoRequestedBy = $request > get('userInfoRequestedBy');
            $userInfoReleasedBy = $request->get('userInfoReleasedBy');
        } else {
            return new JsonResponse($this->noPostData());
        }
        /* Get The Object of the Userinformation */
        $className = "AffiliateAffiliateManagementBundle:Userinfo";
        $affiliateInfoRequest = $em->getRepository($className)->find($userInfoRequestedBy);
        $affiliateInfoRealeased = $em->getRepository($className)->find($userInfoReleasedBy);


        if (!$affiliateInfoRequest) {
            $errorMsg = "AffiliateinfoRequestedBy is Empty";
            return new JsonResponse($this->blankField($errorMsg));
        }
        if (!$affiliateInfoRealeased) {
            $errorMsg = "AffiliateinfoReleasedBy is Empty";
            return new JsonResponse($this->blankField($errorMsg));
        }
        /* End The Object of the Userinformation */

        /* Checking the Data is Valid */
        if ($requestedAmt == "" || $requestedAmt == null) {
            $errorMsg = "Requested Amount is Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } elseif ($requestedDate == "" || $requestedDate == null) {
            $errorMsg = "Requested Date is Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } elseif ($reqDescription == "" || $reqDescription == null) {
            $errorMsg = "Request Description is Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } elseif ($reqStatus == "" || $reqStatus == null) {
            $errorMsg = "Request Status is Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } elseif ($relDescription == "" || $relDescription == null) {
            $errorMsg = "Release Description is Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } elseif ($relStatus == "" || $relStatus == null) {
            $errorMsg = "Release Status is Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } elseif ($releasedDate == "" || $releasedDate == null) {
            $errorMsg = "Released Date is Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } else {

            $affInfoReq = new AffiliatePayReq();

            $affInfoReq->setRequestedAmt($requestedAmt);
            $affInfoReq->setRequestedDate($requestedDate);
            $affInfoReq->setReqDescription($reqDescription);
            $affInfoReq->setReqStatus($reqStatus);
            $affInfoReq->setRelDescription($relDescription);
            $affInfoReq->setRelStatus($relStatus);
            $affInfoReq->setReleasedDate($releasedDate);
            $affInfoReq->setRelDescription($relDescription);
            $affInfoReq->setUserinfoReleasedBy($affiliateInfoRealeased);
            $affInfoReq->setUserinfoRequestedBy($affiliateInfoRequest);

            $em->persist($affInfoReq);
            $em->flush();

            if ($affInfoReq->getId() != "") {
                $dataQuery = "New Data Is Inserted";
                return new JsonResponse($this->AffiliatePayRequestSuccess($dataQuery));
            } else {
                return new JsonResponse($this->AffiliatePayRequestUnsuccessful());
            }

            return new JsonResponse($this->AffiliatePayRequestUnsuccessful());
        }

        return $this->render('AffiliateWebservicesBundle:AffiliatePaymentRequest:AffiliatePaymentRequest.html.twig');
    }

    private function AffiliatePayRequestSuccess($dataQuery) {
        $data = array();

        $data['errorCode'] = "0";
        $data['errorMessage'] = "Admin Payment Request successfully Added";
        $data['result'] = $dataQuery;

        $mainData = array();
        $mainData['data'] = $data;

        return $mainData;
    }

    public function AffiliatePayRequestUnsuccessful() {
        $data = array();
        $data['errorCode'] = "1";
        $data['errorMessage'] = "Admin Payment Request Unsuccessfull";
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
