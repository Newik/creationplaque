<?php

namespace Proxies\__CG__\SitePlaqueBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Devis extends \SitePlaqueBundle\Entity\Devis implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'SitePlaqueBundle\\Entity\\Devis' . "\0" . 'id', '' . "\0" . 'SitePlaqueBundle\\Entity\\Devis' . "\0" . 'nom', '' . "\0" . 'SitePlaqueBundle\\Entity\\Devis' . "\0" . 'plaques', '' . "\0" . 'SitePlaqueBundle\\Entity\\Devis' . "\0" . 'utilisateur', '' . "\0" . 'SitePlaqueBundle\\Entity\\Devis' . "\0" . 'prixUnitaires', '' . "\0" . 'SitePlaqueBundle\\Entity\\Devis' . "\0" . 'total');
        }

        return array('__isInitialized__', '' . "\0" . 'SitePlaqueBundle\\Entity\\Devis' . "\0" . 'id', '' . "\0" . 'SitePlaqueBundle\\Entity\\Devis' . "\0" . 'nom', '' . "\0" . 'SitePlaqueBundle\\Entity\\Devis' . "\0" . 'plaques', '' . "\0" . 'SitePlaqueBundle\\Entity\\Devis' . "\0" . 'utilisateur', '' . "\0" . 'SitePlaqueBundle\\Entity\\Devis' . "\0" . 'prixUnitaires', '' . "\0" . 'SitePlaqueBundle\\Entity\\Devis' . "\0" . 'total');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Devis $proxy) {
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
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotal', array());

        return parent::getTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotal($total)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotal', array($total));

        return parent::setTotal($total);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlaques()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlaques', array());

        return parent::getPlaques();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlaques(\SitePlaqueBundle\Entity\Plaque $plaque)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlaques', array($plaque));

        return parent::setPlaques($plaque);
    }

    /**
     * {@inheritDoc}
     */
    public function getUtilisateur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUtilisateur', array());

        return parent::getUtilisateur();
    }

    /**
     * {@inheritDoc}
     */
    public function setUtilisateur($utilisateur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUtilisateur', array($utilisateur));

        return parent::setUtilisateur($utilisateur);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixUnitaires()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixUnitaires', array());

        return parent::getPrixUnitaires();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixUnitaires($prixUnit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixUnitaires', array($prixUnit));

        return parent::setPrixUnitaires($prixUnit);
    }

    /**
     * {@inheritDoc}
     */
    public function calculTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculTotal', array());

        return parent::calculTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function plaquesArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'plaquesArray', array());

        return parent::plaquesArray();
    }

}
