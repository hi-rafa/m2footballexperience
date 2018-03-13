<?php

namespace Footballexperience\Match\Api\Data;

use Magento\Framework\Api\CustomAttributesDataInterface;

interface MatchInterface extends CustomAttributesDataInterface
{
    const TABLE       = 'fe_match';
    const ID          = 'id';
    const DATE        = 'date';
    const TIME        = 'time';
    const STADIUM        = 'stadium_id';
    const TEAM1        = 'team1_id';
    const TEAM2        = 'team2_id';
    
    /**
     * Retrieve the date
     *
     * @return string
     */
    public function getDate();
    
    /**
     * Set date
     *
     * @param string $date
     * @return $this
     */
    public function setDate($date);
    
    /**
     * Retrieve the time
     *
     * @return string
     */
    public function getTime();
    
    /**
     * Set time
     *
     * @param string $time
     * @return $this
     */
    public function setTime($time);
    
    
    /**
     * Retrieve the stadium
     *
     * @return string
     */
    public function getStadium();
    
    /**
     * Set stadium
     *
     * @param string $stadium
     * @return $this
     */
    public function setStadium($stadium);
    
    /**
     * Retrieve the team1
     *
     * @return string
     */
    public function getTeam1();
    
    /**
     * Set team
     *
     * @param string $team
     * @return $this
     */
    public function setTeam1($team);
    
    /**
     * Retrieve the team2
     *
     * @return string
     */
    public function getTeam2();
    
    /**
     * Set team2
     *
     * @param string $team2
     * @return $this
     */
    public function setTeam2($team);
    
    
    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Footballexperience\Match\Api\Data\MatchExtensionInterface|null
     */
    public function getExtensionAttributes();
    
    /**
     * Set an extension attributes object.
     *
     * @param \Footballexperience\Match\Api\Data\MatchExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Footballexperience\Match\Api\Data\MatchExtensionInterface $extensionAttributes);
    
    
}