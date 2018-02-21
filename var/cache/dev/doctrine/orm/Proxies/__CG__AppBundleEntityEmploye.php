<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Employe extends \AppBundle\Entity\Employe implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Employe' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Employe' . "\0" . 'nom', '' . "\0" . 'AppBundle\\Entity\\Employe' . "\0" . 'CIN', '' . "\0" . 'AppBundle\\Entity\\Employe' . "\0" . 'adresse', '' . "\0" . 'AppBundle\\Entity\\Employe' . "\0" . 'tel', '' . "\0" . 'AppBundle\\Entity\\Employe' . "\0" . 'sorties', '' . "\0" . 'AppBundle\\Entity\\Employe' . "\0" . 'expression_besoins'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Employe' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Employe' . "\0" . 'nom', '' . "\0" . 'AppBundle\\Entity\\Employe' . "\0" . 'CIN', '' . "\0" . 'AppBundle\\Entity\\Employe' . "\0" . 'adresse', '' . "\0" . 'AppBundle\\Entity\\Employe' . "\0" . 'tel', '' . "\0" . 'AppBundle\\Entity\\Employe' . "\0" . 'sorties', '' . "\0" . 'AppBundle\\Entity\\Employe' . "\0" . 'expression_besoins'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Employe $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setCIN($cIN)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCIN', [$cIN]);

        return parent::setCIN($cIN);
    }

    /**
     * {@inheritDoc}
     */
    public function getCIN()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCIN', []);

        return parent::getCIN();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel($tel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel', [$tel]);

        return parent::setTel($tel);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel', []);

        return parent::getTel();
    }

    /**
     * {@inheritDoc}
     */
    public function addSorty(\AppBundle\Entity\Sortie $sorty)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSorty', [$sorty]);

        return parent::addSorty($sorty);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSorty(\AppBundle\Entity\Sortie $sorty)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSorty', [$sorty]);

        return parent::removeSorty($sorty);
    }

    /**
     * {@inheritDoc}
     */
    public function getSorties()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSorties', []);

        return parent::getSorties();
    }

    /**
     * {@inheritDoc}
     */
    public function addExpressionBesoin(\AppBundle\Entity\Expression_besoin $expressionBesoin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addExpressionBesoin', [$expressionBesoin]);

        return parent::addExpressionBesoin($expressionBesoin);
    }

    /**
     * {@inheritDoc}
     */
    public function removeExpressionBesoin(\AppBundle\Entity\Expression_besoin $expressionBesoin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeExpressionBesoin', [$expressionBesoin]);

        return parent::removeExpressionBesoin($expressionBesoin);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpressionBesoins()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpressionBesoins', []);

        return parent::getExpressionBesoins();
    }

    /**
     * {@inheritDoc}
     */
    public function setService(\AppBundle\Entity\Service $service = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setService', [$service]);

        return parent::setService($service);
    }

    /**
     * {@inheritDoc}
     */
    public function getService()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getService', []);

        return parent::getService();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\AppBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

}
