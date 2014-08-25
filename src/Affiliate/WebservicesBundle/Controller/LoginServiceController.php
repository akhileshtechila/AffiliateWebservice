<?php

namespace Affiliate\WebservicesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Affiliate\AffiliateManagementBundle\Entity\Userinfo;

class LoginServiceController extends Controller {

    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        //Check The request is Post
        if ($request->getMethod() == "POST") {
            // Get the Posted Data From the IOS device
            $email = $request->get('email');
            $password = $request->get('password');
        } else {
            return new JsonResponse($this->noJsonData());
        }
        ################# Check Static Service #######
        //$email = "akhilesh@gmail.com";
        //$password = "akhilesh";
        ################# Check End #######

        if ($email == "") {
            $errorMsg = "Email Id Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } else if ($password == "") {
            $errorMsg = "Password Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } else {
            $encryptPassword = base64_encode($password);
            $className = "AffiliateAffiliateManagementBundle:Userinfo";
            $dataQueryInfo = $em->getRepository($className)->findOneBy(
                    array(
                        'email' => $email,
                        'password' => $encryptPassword
                    )
            );

            if ($dataQueryInfo == "" || $dataQueryInfo == null) {
                return new JsonResponse($this->loginUnsuccessful());
            }

            $dataQuery['userId'] = $dataQueryInfo->getId();
            $dataQuery['email'] = $dataQueryInfo->getEmail();
            //$dataQuery['fName'] = $dataQueryInfo->getFName();
            // $dataQuery['lName'] = $dataQueryInfo->getLName();
            $dataQuery['userName'] = $dataQueryInfo->getUserName();
            $dataQuery['deviceToken'] = $dataQueryInfo->getDeviceToken();
            $dataQuery['userType'] = $dataQueryInfo->getUserType();

            return new JsonResponse($this->loginSuccess($dataQuery));
        }


        return $this->render('AffiliateWebservicesBundle:LoginService:index.html.twig');
    }

    private function loginSuccess($dataQuery) {
        $data = array();

        $data['errorCode'] = "0";
        $data['errorMessage'] = "Login successfully done ";
        $data['result'] = $dataQuery;

        $mainData = array();
        $mainData['data'] = $data;

        return $mainData;
    }

    public function loginUnsuccessful() {
        $data = array();
        $data['errorCode'] = "1";
        $data['errorMessage'] = "Login Unsuccessful.Try Again";
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

    private function noJsonData() {
        $data = array();
        $data['errorCode'] = "3";
        $data['errorMessage'] = "No Json Data";
        $data['result'] = "";

        $mainData = array();
        $mainData['data'] = $data;
        return $mainData;
    }

}
