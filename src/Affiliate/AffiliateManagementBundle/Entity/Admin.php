<?php

namespace Affiliate\AffiliateManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 */
class Admin
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
     * @var \DateTime
     */
    private $createdat;

    /**
     * @var \DateTime
     */
    private $updatedat;

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
     * @return Admin
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
     * @return Admin
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
     * @return Admin
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
     * @return Admin
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
     * @return Admin
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
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return Admin
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
     * @return Admin
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
    private $AdminPayReq;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->AdminPayReq = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add AdminPayReq
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\AdminPayReq $adminPayReq
     * @return Admin
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $AdminPayRel;


    /**
     * Add AdminPayRel
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\AdminPayRel $adminPayRel
     * @return Admin
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
}
