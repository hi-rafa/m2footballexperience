<?php

namespace Footballexperience\Match\Model;

use Footballexperience\Match\Api\Data\MatchExtensionInterface;
use Footballexperience\Match\Api\Data\MatchInterface;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractExtensibleModel;

class Match extends AbstractExtensibleModel implements MatchInterface, IdentityInterface
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
        $this->_init(ResourceModelMatch::class);
    }
    
    
    /**
     * Return unique ID(s) for each object in system
     *
     * @return string[]
     */
    public function getIdentities() {
        // TODO: Implement getIdentities() method.
    }
    
    /**
     * Retrieve the date
     *
     * @return string
     */
    public function getDate() {
        // TODO: Implement getDate() method.
    }
    
    /**
     * Set name
     *
     * @param string $date
     *
     * @return $this
     */
    public function setDate( $date ) {
        // TODO: Implement setDate() method.
    }
    
    /**
     * Retrieve the stadium
     *
     * @return \Footballexperience\Stadium\Model\Stadium
     */
    public function getStadium() {
        
//        return $stadiumRepo->getById($this->_getData(self::STADIUM));
        
    }
    
    /**
     * Set stadium
     *
     * @param string $stadium
     * @return $this
     */
    public function setStadium( $stadium ) {
        // TODO: Implement setStadium() method.
    }
    
    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Footballexperience\Match\Api\Data\MatchExtensionInterface|null
     */
    public function getExtensionAttributes() {
        // TODO: Implement getExtensionAttributes() method.
    }
    
    /**
     * Set an extension attributes object.
     *
     * @param \Footballexperience\Match\Api\Data\MatchExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes( \Footballexperience\Match\Api\Data\MatchExtensionInterface $extensionAttributes ) {
    
    }
}