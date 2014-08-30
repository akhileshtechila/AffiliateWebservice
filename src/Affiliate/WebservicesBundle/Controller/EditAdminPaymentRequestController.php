<?php

namespace Affiliate\WebservicesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Affiliate\AffiliateManagementBundle\Entity\Userinfo;
use Affiliate\AffiliateManagementBundle\Entity\AdminPayReq;

class EditAdminPaymentRequestController extends Controller {

    public function EditAdminPaymentRequestAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        if ($request->getMethod() == "POST") {
            /* Get The Json String */
            $requestPayId = $request->get('requestPayId');
            $requestedAmt = $request->get('requestedAmt');
            $requestedDate = $request->get('requestedDate');
            $reqDescription = $request->get('reqDescription');
            $reqStatus = $request->get('reqStatus');
            $relDescription = $request->get('relDescription');
            $relStatus = $request->get('relStatus');
            $releasedDate = $request->get('releasedDate');

            $adminInfoRequestedBy = $request->get('adminInfoRequestedBy');
            $adminInfoReleasedBy = $request->get('adminInfoReleasedBy');

            /* Get The Object of the Userinformation */
            $className = "AffiliateAffiliateManagementBundle:Userinfo";
            $admininfoRequest = $em->getRepository($className)->find($adminInfoRequestedBy);
            $admininfoRealeased = $em->getRepository($className)->find($adminInfoReleasedBy);

            /* End The Json String */
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
        if ($requestPayId == "" || $requestPayId == null) {
            $errorMsg = "Requested Payment Id is Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } elseif ($requestedAmt == "" || $requestedAmt == null) {
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
            $AdminPayReqEntity = "AffiliateAffiliateManagementBundle:AdminPayReq";
            $AdminPayReq = $em->getRepository($AdminPayReqEntity)->find($requestPayId);

            $AdminPayReq->setRequestedAmt($requestedAmt);
            $AdminPayReq->setRequestedDate(new \DateTime($requestedDate));
            $AdminPayReq->setReqDescription($reqDescription);
            $AdminPayReq->setReqStatus($reqStatus);
            $AdminPayReq->setRelDescription($relDescription);
            $AdminPayReq->setRelStatus($relStatus);
            $AdminPayReq->setReleasedDate(new \DateTime($releasedDate));
            $AdminPayReq->setAdmininfoReleasedBy($admininfoRequest);
            $AdminPayReq->setAdmininfoRequestedBy($admininfoRealeased);
            $em->flush();

            if ($AdminPayReq->getId() != "") {
                $dataQuery = "Data Inserted";
                return new JsonResponse($this->editSuccessAdminPaymentRequest($dataQuery));
            } else {
                return new JsonResponse($this->adminPayReqEditUnsuccess());
            }
            return new JsonResponse($this->adminPayReqEditUnsuccess());
        }


        return $this->render('AffiliateWebservicesBundle:EditAdminPaymentRequest:EditAdminPaymentRequest.html.twig');
    }

    public function DeleteAdminPaymentRequestAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        /* Check The request is Post */
        if ($request->getMethod() == "POST") {
              $requestPayId = $request->get('requestPayId');
        } else {
            return new JsonResponse($this->noPostData());
        }
        $requestPayId = "1";
        if ($requestPayId != "") {
            $AdminPayReqEntity = "AffiliateAffiliateManagementBundle:AdminPayReq";
            $AdminPayReq = $em->getRepository($AdminPayReqEntity)->find($requestPayId);
            if (!$AdminPayReq) {
                $errorMsg = "Error! No Admin Payment Request Found";
                return new JsonResponse($this->blankField($errorMsg));
            }
            $em->remove($AdminPayReq);
            $em->flush();
            $dataQuery = "Admin Payment Request Deleted";
            return new JsonResponse($this->adminPaymentDelete($dataQuery));
        } else {
            $errorMsg = "Error! No Deal Id Submitted";
            return new JsonResponse($this->blankField($errorMsg));
        }
        return $this->render('AffiliateWebservicesBundle:EditAdminPaymentRequest:EditAdminPaymentRequest.html.twig');
    }

    private function editSuccessAdminPaymentRequest($dataQuery) {
        $data = array();

        $data['errorCode'] = "0";
        $data['errorMessage'] = "Admin Payment Request successfully Added";
        $data['result'] = $dataQuery;

        $mainData = array();
        $mainData['data'] = $data;

        return $mainData;
    }

    private function adminPayReqEditUnsuccess() {

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

    private function adminPaymentDelete($dataQuery) {
        $data = array();

        $data['errorCode'] = "4";
        $data['errorMessage'] = "Admin Payment Deleted successfully";
        $data['result'] = $dataQuery;

        $mainData = array();
        $mainData['data'] = $data;

        return $mainData;
    }

}
