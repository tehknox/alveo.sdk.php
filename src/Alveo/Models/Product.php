<?php

namespace Alveo\Models;

class Product {

    private $_id;
    private $sku;
    private $name;
    private $price;
    private $image;
    private $is_online;
    private $is_salable;
    private $is_taxable;
    private $created_at;
    private $updated_at;
    private $metadata;
    private $options;

    function __construct($_id, $created_at, $image, $is_online, $is_salable, $is_taxable, $metadata, $name, $options, $sku, $price, $updated_at)
    {
        $this->_id = $_id;
        $this->created_at = $created_at;
        $this->image = $image;
        $this->is_online = $is_online;
        $this->is_salable = $is_salable;
        $this->is_taxable = $is_taxable;
        $this->metadata = $metadata;
        $this->name = $name;
        $this->options = $options;
        $this->sku = $sku;
        $this->price = $price;
        $this->updated_at = $updated_at;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getIsOnline()
    {
        return $this->is_online;
    }

    /**
     * @param mixed $is_online
     */
    public function setIsOnline($is_online)
    {
        $this->is_online = $is_online;
    }

    /**
     * @return mixed
     */
    public function getIsSalable()
    {
        return $this->is_salable;
    }

    /**
     * @param mixed $is_salable
     */
    public function setIsSalable($is_salable)
    {
        $this->is_salable = $is_salable;
    }

    /**
     * @return mixed
     */
    public function getIsTaxable()
    {
        return $this->is_taxable;
    }

    /**
     * @param mixed $is_taxable
     */
    public function setIsTaxable($is_taxable)
    {
        $this->is_taxable = $is_taxable;
    }

    /**
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param mixed $metadata
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param mixed $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }



} 