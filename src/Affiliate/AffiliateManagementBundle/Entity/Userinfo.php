<?php

namespace Affiliate\AffiliateManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userinfo
 */
class Userinfo {

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $fName;

    /**
     * @var string
     */
    private $lName;

    /**
     * @var string
     */
    private $userName;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var string
     */
    private $userType;

    /**
     * @var string
     */
    private $deviceToken;

    /**
     * @var integer
     */
    private $addedBy;

    /**
     * @var \DateTime
     */
    private $createdDate;

    /**
     * @var \DateTime
     */
    private $updatedDate;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Membersinfo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $AffiliatePayReq;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $AffiliatePayRel;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Membersinfo = new \Doctrine\Common\Collections\ArrayCollection();
        $this->AffiliatePayReq = new \Doctrine\Common\Collections\ArrayCollection();
        $this->AffiliatePayRel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fName
     *
     * @param string $fName
     * @return Userinfo
     */
    public function setFName($fName)
    {
        $this->fName = $fName;

        return $this;
    }

    /**
     * Get fName
     *
     * @return string 
     */
    public function getFName()
    {
        return $this->fName;
    }

    /**
     * Set lName
     *
     * @param string $lName
     * @return Userinfo
     */
    public function setLName($lName)
    {
        $this->lName = $lName;

        return $this;
    }

    /**
     * Get lName
     *
     * @return string 
     */
    public function getLName()
    {
        return $this->lName;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return Userinfo
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Userinfo
     */
    public function setPassword($password)
    {
        $this->password = base64_encode($password);

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Userinfo
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Userinfo
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Userinfo
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Userinfo
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     * @return Userinfo
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string 
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return Userinfo
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set userType
     *
     * @param string $userType
     * @return Userinfo
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return string 
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set deviceToken
     *
     * @param string $deviceToken
     * @return Userinfo
     */
    public function setDeviceToken($deviceToken)
    {
        $this->deviceToken = $deviceToken;

        return $this;
    }

    /**
     * Get deviceToken
     *
     * @return string 
     */
    public function getDeviceToken()
    {
        return $this->deviceToken;
    }

    /**
     * Set addedBy
     *
     * @param integer $addedBy
     * @return Userinfo
     */
    public function setAddedBy($addedBy)
    {
        $this->addedBy = $addedBy;

        return $this;
    }

    /**
     * Get addedBy
     *
     * @return integer 
     */
    public function getAddedBy()
    {
        return $this->addedBy;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Userinfo
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set updatedDate
     *
     * @param \DateTime $updatedDate
     * @return Userinfo
     */
    public function setUpdatedDate($updatedDate)
    {
        $this->updatedDate = $updatedDate;

        return $this;
    }

    /**
     * Get updatedDate
     *
     * @return \DateTime 
     */
    public function getUpdatedDate()
    {
        return $this->updatedDate;
    }

    /**
     * Add Membersinfo
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\Membersinfo $membersinfo
     * @return Userinfo
     */
    public function addMembersinfo(\Affiliate\AffiliateManagementBundle\Entity\Membersinfo $membersinfo)
    {
        $this->Membersinfo[] = $membersinfo;

        return $this;
    }

    /**
     * Remove Membersinfo
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\Membersinfo $membersinfo
     */
    public function removeMembersinfo(\Affiliate\AffiliateManagementBundle\Entity\Membersinfo $membersinfo)
    {
        $this->Membersinfo->removeElement($membersinfo);
    }

    /**
     * Get Membersinfo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMembersinfo()
    {
        return $this->Membersinfo;
    }

    /**
     * Add AffiliatePayReq
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\AffiliatePayReq $affiliatePayReq
     * @return Userinfo
     */
    public function addAffiliatePayReq(\Affiliate\AffiliateManagementBundle\Entity\AffiliatePayReq $affiliatePayReq)
    {
        $this->AffiliatePayReq[] = $affiliatePayReq;

        return $this;
    }

    /**
     * Remove AffiliatePayReq
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\AffiliatePayReq $affiliatePayReq
     */
    public function removeAffiliatePayReq(\Affiliate\AffiliateManagementBundle\Entity\AffiliatePayReq $affiliatePayReq)
    {
        $this->AffiliatePayReq->removeElement($affiliatePayReq);
    }

    /**
     * Get AffiliatePayReq
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAffiliatePayReq()
    {
        return $this->AffiliatePayReq;
    }

    /**
     * Add AffiliatePayRel
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\AffiliatePayReq $affiliatePayRel
     * @return Userinfo
     */
    public function addAffiliatePayRel(\Affiliate\AffiliateManagementBundle\Entity\AffiliatePayReq $affiliatePayRel)
    {
        $this->AffiliatePayRel[] = $affiliatePayRel;

        return $this;
    }

    /**
     * Remove AffiliatePayRel
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\AffiliatePayReq $affiliatePayRel
     */
    public function removeAffiliatePayRel(\Affiliate\AffiliateManagementBundle\Entity\AffiliatePayReq $affiliatePayRel)
    {
        $this->AffiliatePayRel->removeElement($affiliatePayRel);
    }

    /**
     * Get AffiliatePayRel
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAffiliatePayRel()
    {
        return $this->AffiliatePayRel;
    }
    
    /**
     * @ORM\PrePersist
     */

    public function setCreatedOnValue() {

        $this->createdDate = new \DateTime();
        $this->updatedDate = new \DateTime();
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedOnValue() {

        $this->updatedDate = new \DateTime();
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $AdminAffiliatePayReq;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $AdminAffiliatePayRel;


    /**
     * Add AdminAffiliatePayReq
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\AdminPayReq $adminAffiliatePayReq
     * @return Userinfo
     */
    public function addAdminAffiliatePayReq(\Affiliate\AffiliateManagementBundle\Entity\AdminPayReq $adminAffiliatePayReq)
    {
        $this->AdminAffiliatePayReq[] = $adminAffiliatePayReq;

        return $this;
    }

    /**
     * Remove AdminAffiliatePayReq
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\AdminPayReq $adminAffiliatePayReq
     */
    public function removeAdminAffiliatePayReq(\Affiliate\AffiliateManagementBundle\Entity\AdminPayReq $adminAffiliatePayReq)
    {
        $this->AdminAffiliatePayReq->removeElement($adminAffiliatePayReq);
    }

    /**
     * Get AdminAffiliatePayReq
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdminAffiliatePayReq()
    {
        return $this->AdminAffiliatePayReq;
    }

    /**
     * Add AdminAffiliatePayRel
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\AdminPayReq $adminAffiliatePayRel
     * @return Userinfo
     */
    public function addAdminAffiliatePayRel(\Affiliate\AffiliateManagementBundle\Entity\AdminPayReq $adminAffiliatePayRel)
    {
        $this->AdminAffiliatePayRel[] = $adminAffiliatePayRel;

        return $this;
    }

    /**
     * Remove AdminAffiliatePayRel
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\AdminPayReq $adminAffiliatePayRel
     */
    public function removeAdminAffiliatePayRel(\Affiliate\AffiliateManagementBundle\Entity\AdminPayReq $adminAffiliatePayRel)
    {
        $this->AdminAffiliatePayRel->removeElement($adminAffiliatePayRel);
    }

    /**
     * Get AdminAffiliatePayRel
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdminAffiliatePayRel()
    {
        return $this->AdminAffiliatePayRel;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $AffiliateDeal;


    /**
     * Add AffiliateDeal
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\AffiliateDeal $affiliateDeal
     * @return Userinfo
     */
    public function addAffiliateDeal(\Affiliate\AffiliateManagementBundle\Entity\AffiliateDeal $affiliateDeal)
    {
        $this->AffiliateDeal[] = $affiliateDeal;

        return $this;
    }

    /**
     * Remove AffiliateDeal
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\AffiliateDeal $affiliateDeal
     */
    public function removeAffiliateDeal(\Affiliate\AffiliateManagementBundle\Entity\AffiliateDeal $affiliateDeal)
    {
        $this->AffiliateDeal->removeElement($affiliateDeal);
    }

    /**
     * Get AffiliateDeal
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAffiliateDeal()
    {
        return $this->AffiliateDeal;
    }
}
