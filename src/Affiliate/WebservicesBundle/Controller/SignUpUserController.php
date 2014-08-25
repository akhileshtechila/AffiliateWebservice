<?php

namespace Affiliate\WebservicesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Affiliate\AffiliateManagementBundle\Entity\Userinfo;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class SignUpUserController extends Controller {

    public function SignUpUserAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        /* Check The request is Post */
        if ($request->getMethod() == "POST") {
            /* Get the Posted Data From the IOS device  */
            $fName = $request->get('fName');
            $lName = $request->get('lName');
            //$userName = $request->get('userName');
            $password = $request->get('password');
            $email = $request->get('email');
            $state = $request->get('state');
            $city = $request->get('city');
            //$zipCode = $request->get('zipCode');
            $mobile = $request->get('mobile');
            $userType = $request->get('userType');
            $deviceToken = $request->get('deviceToken');
            $userId = $request->get('userId');
        } else {
            return new JsonResponse($this->noPostData());
        }

        if ($email == "") {
            $errorMsg = "Email Id Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } else if ($password == "") {
            $errorMsg = "Password Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } else if ($fName == "") {
            $errorMsg = "First Name Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } else if ($lName == "") {
            $errorMsg = "Last Name Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } else if ($state == "") {
            $errorMsg = "State Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } else if ($mobile == "") {
            $errorMsg = "Mobile no Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } else if ($userType == "") {
            $errorMsg = "User Type Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } else if ($city == "") {
            $errorMsg = "City Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } else {
            //$encryptPassword = base64_encode($password);

            $userInfo = new Userinfo();
            $userInfo->setFName($fName);
            $userInfo->setLName($lName);
            $userInfo->setEmail($email);
            $userInfo->setPassword($password);
            $userInfo->setState($state);
            $userInfo->setUserType($userType);
            $userInfo->setMobile($mobile);
            $userInfo->setDeviceToken($deviceToken);
            $userInfo->setCity($city);

            if($userId != ""){
                  $userInfo->setAddedBy($userId);
            }
            
            $em->persist($userInfo);
            $em->flush();

            if ($userInfo->getId() != "") {
                $dataQuery = $userInfo->getEmail();
                $className = "AffiliateAffiliateManagementBundle:Userinfo";
                $entity = $em->getRepository($className)->find($userInfo->getId());
                /* User Information */
                $email = $userInfo->getEmail();
                if ($email != '' || $email != null) {
                    $adminemail = $this->container->getParameter('admin_email');
                    $message = \Swift_Message::newInstance()
                            ->setSubject('Registration User')
                            ->setFrom($adminemail)
                            ->setTo($email)
                            ->setContentType("text/html")
                            ->setBody(
                            $this->renderView(
                                    'AffiliateWebservicesBundle:SignUpUser:email.html.twig', array(
                                'entity' => $entity,
                                'password' => $password
                                    )
                            )
                    );
                  
                }
                if ($this->get('mailer')->send($message)) {
                    return new JsonResponse($this->userSuccesfullyInserted($dataQuery));
                } else {
                    return new JsonResponse($this->userUnsuccessful());
                }
                return new JsonResponse($this->userUnsuccessful());
            }

            return new JsonResponse($this->userUnsuccessful());
        }


        return $this->render('AffiliateWebservicesBundle:SignUpUser:SignUpUser.html.twig');
    }

    private function userSuccesfullyInserted($dataQuery) {
        $data = array();

        $data['errorCode'] = "0";
        $data['errorMessage'] = "Account successfully created";
        $data['result'] = $dataQuery;

        $mainData = array();
        $mainData['data'] = $data;

        return $mainData;
    }

    public function userUnsuccessful() {
        $data = array();
        $data['errorCode'] = "1";
        $data['errorMessage'] = "User information is missing";
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
