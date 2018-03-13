<?php

namespace Footballexperience\Team\Api\Data;

use Magento\Framework\Api\CustomAttributesDataInterface;

interface TeamInterface extends CustomAttributesDataInterface
{
    const TABLE       = 'fe_team';
    const ID          = 'id';
    const NAME        = 'name';
    const COUNTRY        = 'country';
    const DESCRIPTION = 'description';
    const LOGO = 'logo';
    
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
     * Retrieve the logo
     *
     * @return string
     */
    public function getLogo();
    
    /**
     * Set logo
     *
     * @param string $logo
     * @return $this
     */
    public function setLogo($logo);
    
    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Footballexperience\Team\Api\Data\TeamExtensionInterface|null
     */
    public function getExtensionAttributes();
    
    /**
     * Set an extension attributes object.
     *
     * @param \Footballexperience\Team\Api\Data\TeamExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Footballexperience\Team\Api\Data\TeamExtensionInterface $extensionAttributes);
    
    
}