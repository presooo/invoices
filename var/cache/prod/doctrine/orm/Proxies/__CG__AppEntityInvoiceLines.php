<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class InvoiceLines extends \App\Entity\InvoiceLines implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\InvoiceLines' . "\0" . 'id', '' . "\0" . 'App\\Entity\\InvoiceLines' . "\0" . 'description', '' . "\0" . 'App\\Entity\\InvoiceLines' . "\0" . 'value', '' . "\0" . 'App\\Entity\\InvoiceLines' . "\0" . 'invoice_header_id'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\InvoiceLines' . "\0" . 'id', '' . "\0" . 'App\\Entity\\InvoiceLines' . "\0" . 'description', '' . "\0" . 'App\\Entity\\InvoiceLines' . "\0" . 'value', '' . "\0" . 'App\\Entity\\InvoiceLines' . "\0" . 'invoice_header_id'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (InvoiceLines $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getInvoiceHeadersId(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInvoiceHeadersId', []);

        return parent::getInvoiceHeadersId();
    }

    /**
     * {@inheritDoc}
     */
    public function setInvoiceHeadersId(int $invoice_headers_id): \App\Entity\InvoiceLines
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInvoiceHeadersId', [$invoice_headers_id]);

        return parent::setInvoiceHeadersId($invoice_headers_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): \App\Entity\InvoiceLines
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getValue(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValue', []);

        return parent::getValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setValue(string $value): \App\Entity\InvoiceLines
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValue', [$value]);

        return parent::setValue($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getInvoiceHeaderId(): ?\App\Entity\InvoiceHeaders
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInvoiceHeaderId', []);

        return parent::getInvoiceHeaderId();
    }

    /**
     * {@inheritDoc}
     */
    public function setInvoiceHeaderId(?\App\Entity\InvoiceHeaders $invoice_header_id): \App\Entity\InvoiceLines
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInvoiceHeaderId', [$invoice_header_id]);

        return parent::setInvoiceHeaderId($invoice_header_id);
    }

}
