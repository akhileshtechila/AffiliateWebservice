<?php

namespace Affiliate\WebservicesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Affiliate\AffiliateManagementBundle\Entity\Userinfo;
use Affiliate\AffiliateManagementBundle\Entity\Membersinfo;

class MembersInfoController extends Controller {

    public function MembersInfoAddAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        /* Check The request is Post */
        if ($request->getMethod() == "POST") {
            /* Get the Posted Data From the IOS device  */
            $fName = $request->get('fName');
            $lName = $request->get('lName');
            $email = $request->get('email');
            $state = $request->get('state');
            // $city = $request->get('city');
            //$zipCode = $request->get('country');
            $mobile = $request->get('mobile');
            $userType = $request->get('userType');
            //$deviceToken = $request->get('deviceToken');
            $affiliateId = $request->get('affiliateId');
            $memberId = $request->get('memberId');
        } else {
            return new JsonResponse($this->noPostData());
        }
        if ($email == "") {
            $errorMsg = "Email Id Empty";
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
        } else if ($affiliateId == "") {
            $errorMsg = "Affiliate Id Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } else if ($memberId) {
            $errorMsg = "Member Id Empty";
            return new JsonResponse($this->blankField($errorMsg));
        } else {
            //$encryptPassword = base64_encode($password);
            //$persistentObjectName = "AffiliateAffiliateManagementBundle:Membersinfo";
            $membersInfo = new Membersinfo();
            $membersInfo->setFName($fName);
            $membersInfo->setLName($lName);
            $membersInfo->setEmail($email);
            $membersInfo->setState($state);
            $membersInfo->setmembersType("member");
            $membersInfo->setMobile($mobile);
            // $membersInfo->setCity($city);

            if ($affiliateId != "") {
                $membersInfo->setAddedBy($affiliateId);
            }

            $em->persist($membersInfo);
            $em->flush();

            if ($membersInfo->getId() != "") {
                $dataQuery = $membersInfo->getEmail();
                $className = "AffiliateAffiliateManagementBundle:Membersinfo";
                $entity = $em->getRepository($className)->find($membersInfo->getId());
                /* members Information */
                $email = $membersInfo->getEmail();
                if ($email != '' || $email != null) {
                    $adminemail = $this->container->getParameter('admin_email');
                    $message = \Swift_Message::newInstance()
                            ->setSubject('Registration members')
                            ->setFrom($adminemail)
                            ->setTo($email)
                            ->setContentType("text/html")
                            ->setBody(
                            $this->renderView(
                                    'AffiliateWebservicesBundle:MembersInfo:email.html.twig', array(
                                'entity' => $entity,
                                    )
                            )
                    );
                }
                if ($this->get('mailer')->send($message)) {
                    return new JsonResponse($this->membersSuccesfullyInserted($dataQuery));
                } else {
                    return new JsonResponse($this->membersUnsuccessful());
                }
                return new JsonResponse($this->membersUnsuccessful());
            }

            return new JsonResponse($this->membersUnsuccessful());
        }

        return $this->render('AffiliateWebservicesBundle:MembersInfo:MembersInfoAdd.html.twig');
    }

    private function membersSuccesfullyInserted($dataQuery) {
        $data = array();

        $data['errorCode'] = "0";
        $data['errorMessage'] = "Account successfully created";
        $data['result'] = $dataQuery;

        $mainData = array();
        $mainData['data'] = $data;

        return $mainData;
    }

    public function membersUnsuccessful() {
        $data = array();
        $data['errorCode'] = "1";
        $data['errorMessage'] = "members information is missing";
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
