<?php

namespace Affiliate\AffiliateManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffiliateDeal
 */
class AffiliateDeal
{
      

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $description;
    
    /**
     * @var \Affiliate\AffiliateManagementBundle\Entity\Deal
     */
    private $Deal;

    /**
     * @var \Affiliate\AffiliateManagementBundle\Entity\Userinfo
     */
    private $Userinfo;
    

    /**
     * @var \DateTime
     */
    private $createdDate;

    /**
     * @var \DateTime
     */
    private $updatedDate;


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
     * Set description
     *
     * @param string $description
     * @return AffiliateDeal
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
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return AffiliateDeal
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
     * @return AffiliateDeal
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
     * Set Deal
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\Deal $deal
     * @return AffiliateDeal
     */
    public function setDeal(\Affiliate\AffiliateManagementBundle\Entity\Deal $deal = null)
    {
        $this->Deal = $deal;

        return $this;
    }

    /**
     * Get Deal
     *
     * @return \Affiliate\AffiliateManagementBundle\Entity\Deal 
     */
    public function getDeal()
    {
        return $this->Deal;
    }

    /**
     * Set Userinfo
     *
     * @param \Affiliate\AffiliateManagementBundle\Entity\Userinfo $userinfo
     * @return AffiliateDeal
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
