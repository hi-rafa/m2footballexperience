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
    public function getDate()
    {
        return $this->_getData(self::DATE);
    }
    
    /**
     * Set date
     *
     * @param string $date
     *
     * @return $this
     */
    public function setDate( $date )
    {
        $this->setData(self::DATE, $date);
    }
    
    /**
     * Retrieve the time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->_getData(self::Time);
    }
    
    /**
     * Set time
     *
     * @param string $time
     *
     * @return $this
     */
    public function setTime( $time )
    {
        $this->setData(self::TIME, $time);
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
    public function setStadium( $stadium )
    {
        $this->setData(self::STADIUM, $stadium);
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
    
    /**
     * Retrieve the team1
     *
     * @return string
     */
    public function getTeam1()
    {
        //return Object team
    }
    
    /**
     * Set team
     *
     * @param string $team
     *
     * @return $this
     */
    public function setTeam1( $team )
    {
        $this->setData(self::TEAM1, $team);
    }
    
    /**
     * Retrieve the team2
     *
     * @return string
     */
    public function getTeam2()
    {
        //return object team
    }
    
    /**
     * Set team2
     *
     * @param string $team2
     *
     * @return $this
     */
    public function setTeam2( $team )
    {
        $this->setData(self::TEAM2, $team);
    }
}