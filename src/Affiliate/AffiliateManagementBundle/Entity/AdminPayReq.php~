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
    private $AdmininfoRequestedBy;

    /**
     * @var \Affiliate\AffiliateManagementBundle\Entity\Userinfo
     */
    private $AdmininfoReleasedBy;


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
     * Set requestedDate
     *
     * @param \DateTime $requestedDate
     * @return AdminPayReq
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
     * @return AdminPayReq
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
     * Set relDescription
     *
     * @param string $relDescription
     * @return AdminPayReq
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
     * @return AdminPayReq
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
     * @return AdminPayReq
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
     * @return AdminPayReq
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
     * @return AdminPayReq
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
     * Set AdmininfoRequestedBy
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\Userinfo $admininfoRequestedBy
     * @return AdminPayReq
     */
    public function setAdmininfoRequestedBy(\Affiliate\AffiliateManagementBundle\Entity\Userinfo $admininfoRequestedBy = null)
    {
        $this->AdmininfoRequestedBy = $admininfoRequestedBy;

        return $this;
    }

    /**
     * Get AdmininfoRequestedBy
     *
     * @return \Affiliate\AffiliateManagementBundle\Entity\Userinfo 
     */
    public function getAdmininfoRequestedBy()
    {
        return $this->AdmininfoRequestedBy;
    }

    /**
     * Set AdmininfoReleasedBy
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\Userinfo $admininfoReleasedBy
     * @return AdminPayReq
     */
    public function setAdmininfoReleasedBy(\Affiliate\AffiliateManagementBundle\Entity\Userinfo $admininfoReleasedBy = null)
    {
        $this->AdmininfoReleasedBy = $admininfoReleasedBy;

        return $this;
    }

    /**
     * Get AdmininfoReleasedBy
     *
     * @return \Affiliate\AffiliateManagementBundle\Entity\Userinfo 
     */
    public function getAdmininfoReleasedBy()
    {
        return $this->AdmininfoReleasedBy;
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
