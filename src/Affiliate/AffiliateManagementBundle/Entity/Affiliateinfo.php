<?php

namespace Affiliate\AffiliateManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affiliateinfo
 */
class Affiliateinfo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $fname;

    /**
     * @var string
     */
    private $lname;

    /**
     * @var string
     */
    private $username;

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
    private $state;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $zipcode;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var string
     */
    private $addedBy;


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
     * Set fname
     *
     * @param string $fname
     * @return Affiliateinfo
     */
    public function setFname($fname)
    {
        $this->fname = $fname;

        return $this;
    }

    /**
     * Get fname
     *
     * @return string 
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set lname
     *
     * @param string $lname
     * @return Affiliateinfo
     */
    public function setLname($lname)
    {
        $this->lname = $lname;

        return $this;
    }

    /**
     * Get lname
     *
     * @return string 
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Affiliateinfo
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Affiliateinfo
     */
    public function setPassword($password)
    {
        $this->password = $password;

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
     * @return Affiliateinfo
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
     * Set state
     *
     * @param string $state
     * @return Affiliateinfo
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
     * @return Affiliateinfo
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
     * Set zipcode
     *
     * @param string $zipcode
     * @return Affiliateinfo
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return Affiliateinfo
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
     * Set addedBy
     *
     * @param string $addedBy
     * @return Affiliateinfo
     */
    public function setAddedBy($addedBy)
    {
        $this->addedBy = $addedBy;

        return $this;
    }

    /**
     * Get addedBy
     *
     * @return string 
     */
    public function getAddedBy()
    {
        return $this->addedBy;
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
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return Affiliateinfo
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
     * @return Affiliateinfo
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $AffiliateDeal;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->AffiliateDeal = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add AffiliateDeal
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\AffiliateDeal $affiliateDeal
     * @return Affiliateinfo
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $AffiliatePayReq;


    /**
     * Add AffiliatePayReq
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\AffiliatePayReq $affiliatePayReq
     * @return Affiliateinfo
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $AffiliatePayRel;


    /**
     * Add AffiliatePayRel
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\AffiliatePayRel $affiliatePayRel
     * @return Affiliateinfo
     */
    public function addAffiliatePayRel(\Affiliate\AffiliateManagementBundle\Entity\AffiliatePayRel $affiliatePayRel)
    {
        $this->AffiliatePayRel[] = $affiliatePayRel;

        return $this;
    }

    /**
     * Remove AffiliatePayRel
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\AffiliatePayRel $affiliatePayRel
     */
    public function removeAffiliatePayRel(\Affiliate\AffiliateManagementBundle\Entity\AffiliatePayRel $affiliatePayRel)
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
}
