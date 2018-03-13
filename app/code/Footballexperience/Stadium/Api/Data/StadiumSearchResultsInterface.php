<?php

namespace Footballexperience\Stadium\Api\Data;

use \Magento\Framework\Api\SearchResultsInterface;

interface StadiumSearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return \Footballexperience\Stadium\Api\Data\StadiumInterface[]
     */
    public function getItems();
    
    /**
     * @param \Footballexperience\Stadium\Api\Data\StadiumInterface[] $items
     * @return void
     */
    public function setItems(array $items);
}