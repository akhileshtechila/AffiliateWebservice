<?php

namespace Affiliate\AffiliateManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userinfo
 */
class Userinfo
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
    private $usertype;

    /**
     * @var \DateTime
     */
    private $createdat;

    /**
     * @var \DateTime
     */
    private $updatedat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $AffiliatePayReq;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $AffiliatePayRel;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $AdminPayReq;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $AdminPayRel;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->AffiliatePayReq = new \Doctrine\Common\Collections\ArrayCollection();
        $this->AffiliatePayRel = new \Doctrine\Common\Collections\ArrayCollection();
        $this->AdminPayReq = new \Doctrine\Common\Collections\ArrayCollection();
        $this->AdminPayRel = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set fname
     *
     * @param string $fname
     * @return Userinfo
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
     * @return Userinfo
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
     * @return Userinfo
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
     * @return Userinfo
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
     * Set zipcode
     *
     * @param string $zipcode
     * @return Userinfo
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
     * Set usertype
     *
     * @param string $usertype
     * @return Userinfo
     */
    public function setUsertype($usertype)
    {
        $this->usertype = $usertype;

        return $this;
    }

    /**
     * Get usertype
     *
     * @return string 
     */
    public function getUsertype()
    {
        return $this->usertype;
    }

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return Userinfo
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
     * @return Userinfo
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
     * @param \Affiliate\AffiliateManagementBundle\Entity\AffiliatePayRel $affiliatePayRel
     * @return Userinfo
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

    /**
     * Add AdminPayReq
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\AdminPayReq $adminPayReq
     * @return Userinfo
     */
    public function addAdminPayReq(\Affiliate\AffiliateManagementBundle\Entity\AdminPayReq $adminPayReq)
    {
        $this->AdminPayReq[] = $adminPayReq;

        return $this;
    }

    /**
     * Remove AdminPayReq
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\AdminPayReq $adminPayReq
     */
    public function removeAdminPayReq(\Affiliate\AffiliateManagementBundle\Entity\AdminPayReq $adminPayReq)
    {
        $this->AdminPayReq->removeElement($adminPayReq);
    }

    /**
     * Get AdminPayReq
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdminPayReq()
    {
        return $this->AdminPayReq;
    }

    /**
     * Add AdminPayRel
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\AdminPayRel $adminPayRel
     * @return Userinfo
     */
    public function addAdminPayRel(\Affiliate\AffiliateManagementBundle\Entity\AdminPayRel $adminPayRel)
    {
        $this->AdminPayRel[] = $adminPayRel;

        return $this;
    }

    /**
     * Remove AdminPayRel
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\AdminPayRel $adminPayRel
     */
    public function removeAdminPayRel(\Affiliate\AffiliateManagementBundle\Entity\AdminPayRel $adminPayRel)
    {
        $this->AdminPayRel->removeElement($adminPayRel);
    }

    /**
     * Get AdminPayRel
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdminPayRel()
    {
        return $this->AdminPayRel;
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
