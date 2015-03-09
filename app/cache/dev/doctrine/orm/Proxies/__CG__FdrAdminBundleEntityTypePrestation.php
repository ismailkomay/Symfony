<?php

namespace Proxies\__CG__\Fdr\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TypePrestation extends \Fdr\AdminBundle\Entity\TypePrestation implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Fdr\\AdminBundle\\Entity\\TypePrestation' . "\0" . 'prestations', '' . "\0" . 'Fdr\\AdminBundle\\Entity\\TypePrestation' . "\0" . 'id', '' . "\0" . 'Fdr\\AdminBundle\\Entity\\TypePrestation' . "\0" . 'libelle', '' . "\0" . 'Fdr\\AdminBundle\\Entity\\TypePrestation' . "\0" . 'champssupp1', '' . "\0" . 'Fdr\\AdminBundle\\Entity\\TypePrestation' . "\0" . 'champssupp2');
        }

        return array('__isInitialized__', '' . "\0" . 'Fdr\\AdminBundle\\Entity\\TypePrestation' . "\0" . 'prestations', '' . "\0" . 'Fdr\\AdminBundle\\Entity\\TypePrestation' . "\0" . 'id', '' . "\0" . 'Fdr\\AdminBundle\\Entity\\TypePrestation' . "\0" . 'libelle', '' . "\0" . 'Fdr\\AdminBundle\\Entity\\TypePrestation' . "\0" . 'champssupp1', '' . "\0" . 'Fdr\\AdminBundle\\Entity\\TypePrestation' . "\0" . 'champssupp2');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TypePrestation $proxy) {
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
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibelle($libelle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelle', array($libelle));

        return parent::setLibelle($libelle);
    }

    /**
     * {@inheritDoc}
     */
    public function getLibelle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelle', array());

        return parent::getLibelle();
    }

    /**
     * {@inheritDoc}
     */
    public function setChampssupp1($champssupp1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChampssupp1', array($champssupp1));

        return parent::setChampssupp1($champssupp1);
    }

    /**
     * {@inheritDoc}
     */
    public function getChampssupp1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChampssupp1', array());

        return parent::getChampssupp1();
    }

    /**
     * {@inheritDoc}
     */
    public function setChampssupp2($champssupp2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChampssupp2', array($champssupp2));

        return parent::setChampssupp2($champssupp2);
    }

    /**
     * {@inheritDoc}
     */
    public function getChampssupp2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChampssupp2', array());

        return parent::getChampssupp2();
    }

    /**
     * {@inheritDoc}
     */
    public function addPrestation(\Fdr\AdminBundle\Entity\Prestation $prestations)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPrestation', array($prestations));

        return parent::addPrestation($prestations);
    }

    /**
     * {@inheritDoc}
     */
    public function removePrestation(\Fdr\AdminBundle\Entity\Prestation $prestations)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePrestation', array($prestations));

        return parent::removePrestation($prestations);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrestations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrestations', array());

        return parent::getPrestations();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
