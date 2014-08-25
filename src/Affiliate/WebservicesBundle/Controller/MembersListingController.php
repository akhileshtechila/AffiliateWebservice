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

class MembersListingController extends Controller {

    public function MembersListingAction(Request $request) {
       /* Get The Doctrine Manager*/
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AffiliateAffiliateManagementBundle:Membersinfo')->findAll();

        ######################################################
        /* VerY Very Important COde */
        $dataentity = array();
        $userlist = array();
        foreach ($entities as $user) {
            $userlist['userId'] = $user->getId();
            $userlist['fName'] = $user->getFName();
            $userlist['LName'] = $user->getLName();
            $userlist['email'] = $user->getEmail();
            
            array_push($dataentity, $userlist);
        }
        if(!empty($dataentity) || $dataentity != null){
            return new JsonResponse($this->listingUsers($dataentity));
        }else{
            return new JsonResponse($this->listingUsers());
        }

        return $this->render('AffiliateWebservicesBundle:MembersListing:MembersListing.html.twig');
    }
    
    
    
     private function listingUsers($dataentity) {
        $data = array();
        $data['errorCode'] = "0";
        $data['errorMessage'] = "User listing";
        $data['result'] = $dataentity;
        $mainData = array();
        $mainData['data'] = $data;

        return $mainData;
    }

    public function usersNotFound() {
        $data = array();
        $data['errorCode'] = "1";
        $data['errorMessage'] = "Users not found";
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
