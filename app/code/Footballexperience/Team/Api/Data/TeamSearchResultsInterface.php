<?php

namespace Footballexperience\Team\Api\Data;

use \Magento\Framework\Api\SearchResultsInterface;

interface TeamSearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return \Footballexperience\Team\Api\Data\TeamInterface[]
     */
    public function getItems();
    
    /**
     * @param \Footballexperience\Team\Api\Data\TeamInterface[] $items
     * @return void
     */
    public function setItems(array $items);
}