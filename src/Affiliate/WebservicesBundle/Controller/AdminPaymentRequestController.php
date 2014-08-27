<?php

namespace Affiliate\WebservicesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Affiliate\AffiliateManagementBundle\Entity\Userinfo;
use Affiliate\AffiliateManagementBundle\Entity\AdminPayReq;

class AdminPaymentRequestController extends Controller {

    public function AdminPaymentRequestAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        if ($request->getMethod() == "POST") {
            /* Get The Json String */
            $requestedAmt = $request->get('requestedAmt');
            $requestedDate = $request->get('requestedDate');
            $reqDescription = $request->get('reqDescription');
            $reqStatus = $request->get('reqStatus');
            $relDescription = $request->get('relDescription');
            $relStatus = $request->get('relStatus');
            $releasedDate = $request->get('releasedDate');
            /* End The Json String */

            $adminInfoRequestedBy = $request->get('adminInfoRequestedBy');
            $adminInfoReleasedBy = $request->get('adminInfoReleasedBy');

            /* Get The Object of the Userinformation */
            $className = "AffiliateAffiliateManagementBundle:Userinfo";
            $admininfoRequest = $em->getRepository($className)->find($adminInfoRequestedBy);
            $admininfoRealeased = $em->getRepository($className)->find($adminInfoReleasedBy);
        } else {
            return new JsonResponse($this->noPostData());
        }

        if (empty($admininfoRequest) || $admininfoRequest == "") {
            $errorMsg = "Admin Info Requested By is Empty";
            return new JsonResponse($this->blankField($errorMsg));
        }
        if (empty($admininfoRealeased) || $admininfoRealeased == "") {
            $errorMsg = "Admin Info Realesed By is Empty";
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

            $AdminPayReq = new AdminPayReq();

            $AdminPayReq->setRequestedAmt($requestedAmt);
            $AdminPayReq->setRequestedDate(new \DateTime($requestedDate));
            $AdminPayReq->setReqDescription($reqDescription);
            $AdminPayReq->setReqStatus($reqStatus);
            $AdminPayReq->setRelDescription($relDescription);
            $AdminPayReq->setRelStatus($relStatus);
            $AdminPayReq->setReleasedDate(new \DateTime($releasedDate));
            $AdminPayReq->setAdmininfoReleasedBy($admininfoRequest);
            $AdminPayReq->setAdmininfoRequestedBy($admininfoRealeased);

            $em->persist($AdminPayReq);
            $em->flush();

            if ($AdminPayReq->getId() != "") {
                $dataQuery = "Data Inserted";
                return new JsonResponse($this->AdminPayRequestSuccess($dataQuery));
            } else {
                return new JsonResponse($this->AdminPayRequestUnsuccessful());
            }
            return new JsonResponse($this->AdminPayRequestUnsuccessful());
        }


        return $this->render('AffiliateWebservicesBundle:AdminPaymentRequest:AdminPaymentRequest.html.twig');
    }

    private function AdminPayRequestSuccess($dataQuery) {
        $data = array();

        $data['errorCode'] = "0";
        $data['errorMessage'] = "Admin Payment Request successfully Added";
        $data['result'] = $dataQuery;

        $mainData = array();
        $mainData['data'] = $data;

        return $mainData;
    }

    public function AdminPayRequestUnsuccessful() {
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
