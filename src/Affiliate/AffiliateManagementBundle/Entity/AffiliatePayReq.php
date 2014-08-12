<?php

namespace Affiliate\AffiliateManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffiliatePayReq
 */
class AffiliatePayReq
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
    private $requestedDate;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $reqStatus;


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
     * @return AffiliatePayReq
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
     * Set requestedDate
     *
     * @param \DateTime $requestedDate
     * @return AffiliatePayReq
     */
    public function setRequestedDate($requestedDate)
    {
        $this->requestedDate = $requestedDate;

        return $this;
    }

    /**
     * Get requestedDate
     *
     * @return \DateTime 
     */
    public function getRequestedDate()
    {
        return $this->requestedDate;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return AffiliatePayReq
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
     * @return AffiliatePayReq
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
     * @var \DateTime
     */
    private $createdat;

    /**
     * @var \DateTime
     */
    private $updatedat;

    /**
     * @var \Affiliate\AffiliateManagementBundle\Entity\Affiliateinfo
     */
    private $Affiliateinfo;

    /**
     * @var \Affiliate\AffiliateManagementBundle\Entity\Userinfo
     */
    private $Userinfo;


    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return AffiliatePayReq
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
     * @return AffiliatePayReq
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
     * Set Affiliateinfo
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\Affiliateinfo $affiliateinfo
     * @return AffiliatePayReq
     */
    public function setAffiliateinfo(\Affiliate\AffiliateManagementBundle\Entity\Affiliateinfo $affiliateinfo = null)
    {
        $this->Affiliateinfo = $affiliateinfo;

        return $this;
    }

    /**
     * Get Affiliateinfo
     *
     * @return \Affiliate\AffiliateManagementBundle\Entity\Affiliateinfo 
     */
    public function getAffiliateinfo()
    {
        return $this->Affiliateinfo;
    }

    /**
     * Set Userinfo
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\Userinfo $userinfo
     * @return AffiliatePayReq
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
