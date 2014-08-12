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
    private $dname;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $dealDuration;


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
     * Set dname
     *
     * @param string $dname
     * @return Deal
     */
    public function setDname($dname)
    {
        $this->dname = $dname;

        return $this;
    }

    /**
     * Get dname
     *
     * @return string 
     */
    public function getDname()
    {
        return $this->dname;
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
     * @return Deal
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
     * @return Deal
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
}
