<?php

namespace Proxies\__CG__\Affiliate\AffiliateManagementBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Userinfo extends \Affiliate\AffiliateManagementBundle\Entity\Userinfo implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'id', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'fname', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'lname', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'username', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'password', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'email', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'state', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'country', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'zipcode', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'mobile', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'usertype', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'createdat', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'updatedat', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'AffiliatePayReq', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'AffiliatePayRel', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'AdminPayReq', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'AdminPayRel');
        }

        return array('__isInitialized__', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'id', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'fname', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'lname', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'username', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'password', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'email', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'state', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'country', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'zipcode', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'mobile', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'usertype', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'createdat', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'updatedat', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'AffiliatePayReq', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'AffiliatePayRel', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'AdminPayReq', '' . "\0" . 'Affiliate\\AffiliateManagementBundle\\Entity\\Userinfo' . "\0" . 'AdminPayRel');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Userinfo $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFname($fname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFname', array($fname));

        return parent::setFname($fname);
    }

    /**
     * {@inheritDoc}
     */
    public function getFname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFname', array());

        return parent::getFname();
    }

    /**
     * {@inheritDoc}
     */
    public function setLname($lname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLname', array($lname));

        return parent::setLname($lname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLname', array());

        return parent::getLname();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', array($username));

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', array());

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', array($password));

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', array());

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setState($state)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', array($state));

        return parent::setState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function getState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', array());

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry($country)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', array($country));

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', array());

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setZipcode($zipcode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZipcode', array($zipcode));

        return parent::setZipcode($zipcode);
    }

    /**
     * {@inheritDoc}
     */
    public function getZipcode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZipcode', array());

        return parent::getZipcode();
    }

    /**
     * {@inheritDoc}
     */
    public function setMobile($mobile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMobile', array($mobile));

        return parent::setMobile($mobile);
    }

    /**
     * {@inheritDoc}
     */
    public function getMobile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMobile', array());

        return parent::getMobile();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsertype($usertype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsertype', array($usertype));

        return parent::setUsertype($usertype);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsertype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsertype', array());

        return parent::getUsertype();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedat($createdat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedat', array($createdat));

        return parent::setCreatedat($createdat);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedat', array());

        return parent::getCreatedat();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedat($updatedat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedat', array($updatedat));

        return parent::setUpdatedat($updatedat);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedat', array());

        return parent::getUpdatedat();
    }

    /**
     * {@inheritDoc}
     */
    public function addAffiliatePayReq(\Affiliate\AffiliateManagementBundle\Entity\AffiliatePayReq $affiliatePayReq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAffiliatePayReq', array($affiliatePayReq));

        return parent::addAffiliatePayReq($affiliatePayReq);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAffiliatePayReq(\Affiliate\AffiliateManagementBundle\Entity\AffiliatePayReq $affiliatePayReq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAffiliatePayReq', array($affiliatePayReq));

        return parent::removeAffiliatePayReq($affiliatePayReq);
    }

    /**
     * {@inheritDoc}
     */
    public function getAffiliatePayReq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAffiliatePayReq', array());

        return parent::getAffiliatePayReq();
    }

    /**
     * {@inheritDoc}
     */
    public function addAffiliatePayRel(\Affiliate\AffiliateManagementBundle\Entity\AffiliatePayRel $affiliatePayRel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAffiliatePayRel', array($affiliatePayRel));

        return parent::addAffiliatePayRel($affiliatePayRel);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAffiliatePayRel(\Affiliate\AffiliateManagementBundle\Entity\AffiliatePayRel $affiliatePayRel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAffiliatePayRel', array($affiliatePayRel));

        return parent::removeAffiliatePayRel($affiliatePayRel);
    }

    /**
     * {@inheritDoc}
     */
    public function getAffiliatePayRel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAffiliatePayRel', array());

        return parent::getAffiliatePayRel();
    }

    /**
     * {@inheritDoc}
     */
    public function addAdminPayReq(\Affiliate\AffiliateManagementBundle\Entity\AdminPayReq $adminPayReq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAdminPayReq', array($adminPayReq));

        return parent::addAdminPayReq($adminPayReq);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAdminPayReq(\Affiliate\AffiliateManagementBundle\Entity\AdminPayReq $adminPayReq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAdminPayReq', array($adminPayReq));

        return parent::removeAdminPayReq($adminPayReq);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdminPayReq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminPayReq', array());

        return parent::getAdminPayReq();
    }

    /**
     * {@inheritDoc}
     */
    public function addAdminPayRel(\Affiliate\AffiliateManagementBundle\Entity\AdminPayRel $adminPayRel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAdminPayRel', array($adminPayRel));

        return parent::addAdminPayRel($adminPayRel);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAdminPayRel(\Affiliate\AffiliateManagementBundle\Entity\AdminPayRel $adminPayRel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAdminPayRel', array($adminPayRel));

        return parent::removeAdminPayRel($adminPayRel);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdminPayRel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminPayRel', array());

        return parent::getAdminPayRel();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedOnValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedOnValue', array());

        return parent::setCreatedOnValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedOnValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedOnValue', array());

        return parent::setUpdatedOnValue();
    }

}