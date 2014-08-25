<?php

namespace Affiliate\AffiliateManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deal
 */
class Deal
{
 
    
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $dName;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $dealDuration;

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
     * Set dName
     *
     * @param string $dName
     * @return Deal
     */
    public function setDName($dName)
    {
        $this->dName = $dName;

        return $this;
    }

    /**
     * Get dName
     *
     * @return string 
     */
    public function getDName()
    {
        return $this->dName;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Deal
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
     * Set dealDuration
     *
     * @param string $dealDuration
     * @return Deal
     */
    public function setDealDuration($dealDuration)
    {
        $this->dealDuration = $dealDuration;

        return $this;
    }

    /**
     * Get dealDuration
     *
     * @return string 
     */
    public function getDealDuration()
    {
        return $this->dealDuration;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Deal
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
     * @return Deal
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
     * @return Deal
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
}
