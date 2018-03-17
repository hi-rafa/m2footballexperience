<?php

namespace Footballexperience\Stadium\Model;

use Footballexperience\Stadium\Api\Data\StadiumExtensionInterface;
use Footballexperience\Stadium\Api\Data\StadiumInterface;
use Footballexperience\Stadium\Model\ResourceModel\Stadium as ResourceModelStadium;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractExtensibleModel;

class Stadium extends AbstractExtensibleModel implements StadiumInterface, IdentityInterface
{
    const CACHE_TAG = 'footballexperience_base_stadium';
    
    /**
     * @var string
     */
    protected $_cacheTag = 'footballexperience_base_stadium';
    
    /**
     * @var string
     */
    protected $_eventPrefix = 'footballexperience_base_stadium';
    
    /**
     * Initialize resource model
     */
    protected function _construct()
    {
        $this->_init(ResourceModelStadium::class);
    }
    
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return $this->_getData(self::NAME);
    }
    
    /**
     * @inheritdoc
     */
    public function setName($name)
    {
        $this->setData(self::NAME, $name);
    }
    
    /**
     * @inheritdoc
     */
    public function getDescription()
    {
        return $this->_getData(self::DESCRIPTION);
    }
    
    /**
     * @inheritdoc
     */
    public function setDescription($description)
    {
        $this->setData(self::DESCRIPTION, $description);
    }
    
    /**
     * @inheritdoc
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }
    
    /**
     * @inheritdoc
     */
    public function setExtensionAttributes(StadiumExtensionInterface $extensionAttributes)
    {
        $this->_setExtensionAttributes($extensionAttributes);
    }
    
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
    
    /**
     * Retrieve the city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->_getData(self::CITY);
    }
    
    /**
     * Set city
     *
     * @param string $city
     *
     * @return $this
     */
    public function setCity( $city )
    {
        $this->setData(self::CITY, $city);
    }
    
    /**
     * Retrieve the country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->_getData(self::COUNTRY);
    }
    
    /**
     * Set country
     *
     * @param string $country
     *
     * @return $this
     */
    public function setCountry( $country )
    {
        $this->setData(self::COUNTRY, $country);
    }
    
    /**
     * Retrieve the capacity
     *
     * @return string
     */
    public function getCapacity()
    {
        return $this->_getData(self::COUNTRY);
    }
    
    /**
     * Set capacity
     *
     * @param string $capacity
     *
     * @return $this
     */
    public function setCapacity( $capacity )
    {
        $this->setData(self::CAPACITY, $capacity);
    }
    
    /**
     * Retrieve the map
     *
     * @return string
     */
    public function getMap()
    {
        return $this->_getData(self::MAP);
    }
    
    /**
     * Set map
     *
     * @param string $map
     *
     * @return $this
     */
    public function setMap( $map )
    {
        $this->setData(self::MAP, $map);
    }
}