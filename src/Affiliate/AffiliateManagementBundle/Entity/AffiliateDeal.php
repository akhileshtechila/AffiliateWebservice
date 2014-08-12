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
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return AffiliateDeal
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
     * @return AffiliateDeal
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
     * @return AffiliateDeal
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
