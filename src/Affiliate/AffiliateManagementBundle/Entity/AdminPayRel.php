<?php

namespace Affiliate\AffiliateManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdminPayRel
 */
class AdminPayRel
{
    
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $releasedDate;

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
     * Set releasedDate
     *
     * @param \DateTime $releasedDate
     * @return AdminPayRel
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
     * Set releasedAmt
     *
     * @param string $releasedAmt
     * @return AdminPayRel
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
     * @return AdminPayRel
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
     * @return AdminPayRel
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
     * @return AdminPayRel
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
     * @return AdminPayRel
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
     * @return AdminPayRel
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
     * @return AdminPayRel
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
     * @return AdminPayRel
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
