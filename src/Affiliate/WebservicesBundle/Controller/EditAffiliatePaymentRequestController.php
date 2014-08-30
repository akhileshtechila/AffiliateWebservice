<?php

namespace Affiliate\WebservicesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Affiliate\AffiliateManagementBundle\Entity\Userinfo;
use Affiliate\AffiliateManagementBundle\Entity\AdminPayReq;
use Affiliate\AffiliateManagementBundle\Entity\AffiliatePayReq;

class EditAffiliatePaymentRequestController extends Controller {

    public function EditAffiliatePaymentRequestAction(Request $request) {
        
        $em = $this->getDoctrine()->getManager();
        
        if($request->getMethod() == "POST"){
            $reqAffPayReqId = $request->get('reqAffPayReqId');
            $requestedAmt = $request->get('requestedAmt');
            $requestedDate = $request->get('requestedDate');
            $reqDescription = $request->get('reqDescription');
            $reqStatus = $request->get('reqStatus');
            $relDescription = $request->get('relDescription');
            $relStatus = $request->get('relStatus');
            $releasedDate = $request->get('releasedDate');
            $userInfoRequestedBy = $request->get('userInfoRequestedBy');
            $userInfoReleasedBy = $request->get('userInfoReleasedBy');
            
        }else{
            return new JsonResponse($this->noPostData());
        }
        /*Get the Object of teh User Info Requested by and User Info Added By*/
        $className  = "AffiliateAffiliateManagementBundle:Userinfo" ;
        $affiliateInfoReqBy = $em->getRepository($className)->find($userInfoRequestedBy);
        $affiliateInfoRelBy = $em->getRepository($className)->find($userInfoReleasedBy);
        /*End Of the User Info added by */
        if(!$affiliateInfoReqBy){ 
            $errorMsg = "User Info Requested By is Empty";
            return new JsonResponse($this->blankField($errorMsg));
        }
        if(!$affiliateInfoRelBy){ 
            $errorMsg = "User Info Requested By is Empty";
            return new JsonResponse($this->blankField($errorMsg));
        }
        
         /* Checking the Data is Valid */
        if($reqAffPayReqId == "" ){
            $errorMsg = "Affiliate Pay Req Id Amount is Empty";
            return new JsonResponse($this->blankField($errorMsg));
        }elseif ($requestedAmt == "" || $requestedAmt == null) {
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
            
            $affiliatePayReqName = "AffiliateAffiliateManagementBundle:AffiliatePayReq" ;
            $affInfoReq = $em->getRepository($affiliatePayReqName)->find();

            $affInfoReq->setRequestedAmt($requestedAmt);
            $affInfoReq->setRequestedDate($requestedDate);
            $affInfoReq->setReqDescription($reqDescription);
            $affInfoReq->setReqStatus($reqStatus);
            $affInfoReq->setRelDescription($relDescription);
            $affInfoReq->setRelStatus($relStatus);
            $affInfoReq->setReleasedDate($releasedDate);
            $affInfoReq->setRelDescription($relDescription);
            $affInfoReq->setUserinfoReleasedBy($affiliateInfoRelBy);
            $affInfoReq->setUserinfoRequestedBy($affiliateInfoReqBy);

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
        
        
        return $this->render('AffiliateWebservicesBundle:EditAffiliatePaymentRequest:EditAffiliatePaymentRequest.html.twig');
    }

    public function DeleteAffiliatePaymentRequestAction(Request $request){
         $em = $this->getDoctrine()->getManager();
        /* Check The request is Post */
        if ($request->getMethod() == "POST") {
              $reqAffPayReqId = $request->get('reqAffPayReqId');
        } else {
            return new JsonResponse($this->noPostData());
        }
        //$reqAffPayReqId = "2";
        if ($reqAffPayReqId != "") {
            $AffiliatePayReqEntity = "AffiliateAffiliateManagementBundle:AffiliatePayReq";
            $AffiliatePayReq = $em->getRepository($AffiliatePayReqEntity)->find($reqAffPayReqId);
            if (!$AffiliatePayReq) {
                $errorMsg = "Error! No Affiliate Payment Request Found";
                return new JsonResponse($this->blankField($errorMsg));
            }
            $em->remove($AffiliatePayReq);
            $em->flush();
            $dataQuery = "Affiliate Payment Request Deleted";
            return new JsonResponse($this->AffiliatePaymentDelete($dataQuery));
        } else {
            $errorMsg = "Error! No Deal Id Submitted";
            return new JsonResponse($this->blankField($errorMsg));
        }
         return $this->render('AffiliateWebservicesBundle:EditAffiliatePaymentRequest:EditAffiliatePaymentRequest.html.twig');
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
    
    private function AffiliatePaymentDelete($dataQuery) {
        $data = array();

        $data['errorCode'] = "4";
        $data['errorMessage'] = "Affiliate Payment Deleted successfully";
        $data['result'] = $dataQuery;

        $mainData = array();
        $mainData['data'] = $data;

        return $mainData;
    }
}
