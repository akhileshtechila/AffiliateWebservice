<?php

namespace Affiliate\AffiliateManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffiliatePayRel
 */
class AffiliatePayRel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $releaseDate;

    /**
     * @var string
     */
    private $releaseAmt;

    /**
     * @var string
     */
    private $releasedAmt;

    /**
     * @var string
     */
    private $actualAmt;

    /**
     * @var string
     */
    private $payMode;

    /**
     * @var string
     */
    private $payStatus;

    
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set releaseDate
     *
     * @param \DateTime $releaseDate
     * @return AffiliatePayRel
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Get releaseDate
     *
     * @return \DateTime 
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Set releaseAmt
     *
     * @param string $releaseAmt
     * @return AffiliatePayRel
     */
    public function setReleaseAmt($releaseAmt)
    {
        $this->releaseAmt = $releaseAmt;

        return $this;
    }

    /**
     * Get releaseAmt
     *
     * @return string 
     */
    public function getReleaseAmt()
    {
        return $this->releaseAmt;
    }

    /**
     * Set releasedAmt
     *
     * @param string $releasedAmt
     * @return AffiliatePayRel
     */
    public function setReleasedAmt($releasedAmt)
    {
        $this->releasedAmt = $releasedAmt;

        return $this;
    }

    /**
     * Get releasedAmt
     *
     * @return string 
     */
    public function getReleasedAmt()
    {
        return $this->releasedAmt;
    }

    /**
     * Set actualAmt
     *
     * @param string $actualAmt
     * @return AffiliatePayRel
     */
    public function setActualAmt($actualAmt)
    {
        $this->actualAmt = $actualAmt;

        return $this;
    }

    /**
     * Get actualAmt
     *
     * @return string 
     */
    public function getActualAmt()
    {
        return $this->actualAmt;
    }

    /**
     * Set payMode
     *
     * @param string $payMode
     * @return AffiliatePayRel
     */
    public function setPayMode($payMode)
    {
        $this->payMode = $payMode;

        return $this;
    }

    /**
     * Get payMode
     *
     * @return string 
     */
    public function getPayMode()
    {
        return $this->payMode;
    }

    /**
     * Set payStatus
     *
     * @param string $payStatus
     * @return AffiliatePayRel
     */
    public function setPayStatus($payStatus)
    {
        $this->payStatus = $payStatus;

        return $this;
    }

    /**
     * Get payStatus
     *
     * @return string 
     */
    public function getPayStatus()
    {
        return $this->payStatus;
    }
  
    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return AffiliatePayRel
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
     * @return AffiliatePayRel
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
     * @return AffiliatePayRel
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
     * @return AffiliatePayRel
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
