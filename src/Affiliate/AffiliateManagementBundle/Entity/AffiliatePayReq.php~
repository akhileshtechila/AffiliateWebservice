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
    private $reqDescription;

    /**
     * @var string
     */
    private $reqStatus;

    /**
     * @var string
     */
    private $relDescription;

    /**
     * @var string
     */
    private $relStatus;

    /**
     * @var \DateTime
     */
    private $releasedDate;

    /**
     * @var \DateTime
     */
    private $createdDate;

    /**
     * @var \DateTime
     */
    private $updatedDate;

    /**
     * @var \Affiliate\AffiliateManagementBundle\Entity\Userinfo
     */
    private $UserinfoRequestedBy;

    /**
     * @var \Affiliate\AffiliateManagementBundle\Entity\Userinfo
     */
    private $UserinfoReleasedBy;


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
     * Set reqDescription
     *
     * @param string $reqDescription
     * @return AffiliatePayReq
     */
    public function setReqDescription($reqDescription)
    {
        $this->reqDescription = $reqDescription;

        return $this;
    }

    /**
     * Get reqDescription
     *
     * @return string 
     */
    public function getReqDescription()
    {
        return $this->reqDescription;
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
     * Set relDescription
     *
     * @param string $relDescription
     * @return AffiliatePayReq
     */
    public function setRelDescription($relDescription)
    {
        $this->relDescription = $relDescription;

        return $this;
    }

    /**
     * Get relDescription
     *
     * @return string 
     */
    public function getRelDescription()
    {
        return $this->relDescription;
    }

    /**
     * Set relStatus
     *
     * @param string $relStatus
     * @return AffiliatePayReq
     */
    public function setRelStatus($relStatus)
    {
        $this->relStatus = $relStatus;

        return $this;
    }

    /**
     * Get relStatus
     *
     * @return string 
     */
    public function getRelStatus()
    {
        return $this->relStatus;
    }

    /**
     * Set releasedDate
     *
     * @param \DateTime $releasedDate
     * @return AffiliatePayReq
     */
    public function setReleasedDate($releasedDate)
    {
        $this->releasedDate = $releasedDate;

        return $this;
    }

    /**
     * Get releasedDate
     *
     * @return \DateTime 
     */
    public function getReleasedDate()
    {
        return $this->releasedDate;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return AffiliatePayReq
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
     * @return AffiliatePayReq
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
     * Set UserinfoRequestedBy
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\Userinfo $userinfoRequestedBy
     * @return AffiliatePayReq
     */
    public function setUserinfoRequestedBy(\Affiliate\AffiliateManagementBundle\Entity\Userinfo $userinfoRequestedBy = null)
    {
        $this->UserinfoRequestedBy = $userinfoRequestedBy;

        return $this;
    }

    /**
     * Get UserinfoRequestedBy
     *
     * @return \Affiliate\AffiliateManagementBundle\Entity\Userinfo 
     */
    public function getUserinfoRequestedBy()
    {
        return $this->UserinfoRequestedBy;
    }

    /**
     * Set UserinfoReleasedBy
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\Userinfo $userinfoReleasedBy
     * @return AffiliatePayReq
     */
    public function setUserinfoReleasedBy(\Affiliate\AffiliateManagementBundle\Entity\Userinfo $userinfoReleasedBy = null)
    {
        $this->UserinfoReleasedBy = $userinfoReleasedBy;

        return $this;
    }

    /**
     * Get UserinfoReleasedBy
     *
     * @return \Affiliate\AffiliateManagementBundle\Entity\Userinfo 
     */
    public function getUserinfoReleasedBy()
    {
        return $this->UserinfoReleasedBy;
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
}
