<?php

namespace Footballexperience\Stadium\Api\Data;

use Magento\Framework\Api\CustomAttributesDataInterface;

interface StadiumInterface extends CustomAttributesDataInterface
{
    const TABLE       = 'fe_stadium';
    const ID          = 'id';
    const NAME        = 'name';
    const CITY        = 'city';
    const COUNTRY        = 'country';
    const DESCRIPTION = 'description';
    const CAPACITY = 'capacity';
    const MAP = 'map';
    
    /**
     * Retrieve the name
     *
     * @return string
     */
    public function getName();
    
    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name);
    
    /**
     * Retrieve the city
     *
     * @return string
     */
    public function getCity();
    
    /**
     * Set city
     *
     * @param string $city
     * @return $this
     */
    public function setCity($city);
    
    /**
     * Retrieve the country
     *
     * @return string
     */
    public function getCountry();
    
    /**
     * Set country
     *
     * @param string $country
     * @return $this
     */
    public function setCountry($country);
    
    /**
     * Retrieve the description
     *
     * @return string
     */
    public function getDescription();
    
    /**
     * Set description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description);
    
    /**
     * Retrieve the capacity
     *
     * @return string
     */
    public function getCapacity();
    
    /**
     * Set capacity
     *
     * @param string $capacity
     * @return $this
     */
    public function setCapacity($capacity);
    
    
    /**
     * Retrieve the map
     *
     * @return string
     */
    public function getMap();
    
    /**
     * Set map
     *
     * @param string $map
     * @return $this
     */
    public function setMap($map);
    
    
    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Footballexperience\Stadium\Api\Data\StadiumExtensionInterface|null
     */
    public function getExtensionAttributes();
    
    /**
     * Set an extension attributes object.
     *
     * @param \Footballexperience\Stadium\Api\Data\StadiumExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Footballexperience\Stadium\Api\Data\StadiumExtensionInterface $extensionAttributes);

    
}