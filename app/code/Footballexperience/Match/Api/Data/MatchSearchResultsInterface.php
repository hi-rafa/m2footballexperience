<?php

namespace Footballexperience\Match\Api\Data;

use \Magento\Framework\Api\SearchResultsInterface;

interface MatchSearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return \Footballexperience\Match\Api\Data\MatchInterface[]
     */
    public function getItems();
    
    /**
     * @param \Footballexperience\Match\Api\Data\MatchInterface[] $items
     * @return void
     */
    public function setItems(array $items);
}