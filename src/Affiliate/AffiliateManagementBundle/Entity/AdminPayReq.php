<?php

namespace Affiliate\AffiliateManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdminPayReq
 */
class AdminPayReq
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $requestedAmt;

    /**
     * @var \DateTime
     */
    private $requestDate;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $reqStatus;

     /**
     * @var \DateTime
     */
    private $createdat;

    /**
     * @var \DateTime
     */
    private $updatedat;

    /**
     * @var \Affiliate\AffiliateManagementBundle\Entity\Admin
     */
    private $Admin;

    /**
     * @var \Affiliate\AffiliateManagementBundle\Entity\Userinfo
     */
    private $Userinfo;


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
     * Set requestedAmt
     *
     * @param string $requestedAmt
     * @return AdminPayReq
     */
    public function setRequestedAmt($requestedAmt)
    {
        $this->requestedAmt = $requestedAmt;

        return $this;
    }

    /**
     * Get requestedAmt
     *
     * @return string 
     */
    public function getRequestedAmt()
    {
        return $this->requestedAmt;
    }

    /**
     * Set requestDate
     *
     * @param \DateTime $requestDate
     * @return AdminPayReq
     */
    public function setRequestDate($requestDate)
    {
        $this->requestDate = $requestDate;

        return $this;
    }

    /**
     * Get requestDate
     *
     * @return \DateTime 
     */
    public function getRequestDate()
    {
        return $this->requestDate;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return AdminPayReq
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set reqStatus
     *
     * @param string $reqStatus
     * @return AdminPayReq
     */
    public function setReqStatus($reqStatus)
    {
        $this->reqStatus = $reqStatus;

        return $this;
    }

    /**
     * Get reqStatus
     *
     * @return string 
     */
    public function getReqStatus()
    {
        return $this->reqStatus;
    }
   

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return AdminPayReq
     */
    public function setCreatedat($createdat)
    {
        $this->createdat = $createdat;

        return $this;
    }

    /**
     * Get createdat
     *
     * @return \DateTime 
     */
    public function getCreatedat()
    {
        return $this->createdat;
    }

    /**
     * Set updatedat
     *
     * @param \DateTime $updatedat
     * @return AdminPayReq
     */
    public function setUpdatedat($updatedat)
    {
        $this->updatedat = $updatedat;

        return $this;
    }

    /**
     * Get updatedat
     *
     * @return \DateTime 
     */
    public function getUpdatedat()
    {
        return $this->updatedat;
    }

    /**
     * Set Admin
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\Admin $admin
     * @return AdminPayReq
     */
    public function setAdmin(\Affiliate\AffiliateManagementBundle\Entity\Admin $admin = null)
    {
        $this->Admin = $admin;

        return $this;
    }

    /**
     * Get Admin
     *
     * @return \Affiliate\AffiliateManagementBundle\Entity\Admin 
     */
    public function getAdmin()
    {
        return $this->Admin;
    }

    /**
     * Set Userinfo
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\Userinfo $userinfo
     * @return AdminPayReq
     */
    public function setUserinfo(\Affiliate\AffiliateManagementBundle\Entity\Userinfo $userinfo = null)
    {
        $this->Userinfo = $userinfo;

        return $this;
    }

    /**
     * Get Userinfo
     *
     * @return \Affiliate\AffiliateManagementBundle\Entity\Userinfo 
     */
    public function getUserinfo()
    {
        return $this->Userinfo;
    }
  
    
    /**
     * @ORM\PrePersist
     */

    public function setCreatedOnValue() {

        $this->createdat = new \DateTime();
        $this->updatedat = new \DateTime();
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedOnValue() {

        $this->updatedat = new \DateTime();
    }
}
