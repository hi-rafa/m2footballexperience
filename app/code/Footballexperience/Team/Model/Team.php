<?php

namespace Footballexperience\Team\Model;

use Footballexperience\Team\Api\Data\TeamExtensionInterface;
use Footballexperience\Team\Api\Data\TeamInterface;
use Footballexperience\Team\Model\ResourceModel\Team as ResourceModelTeam;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractExtensibleModel;

class Team extends AbstractExtensibleModel implements TeamInterface, IdentityInterface
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
        $this->_init(ResourceModelTeam::class);
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
    public function setExtensionAttributes(TeamExtensionInterface $extensionAttributes)
    {
        $this->_setExtensionAttributes($extensionAttributes);
    }
    
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
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
     * Retrieve the logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->_getData(self::LOGO);
    }
    
    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return $this
     */
    public function setLogo( $logo )
    {
        $this->setData(self::LOGO, $logo);
    }

}