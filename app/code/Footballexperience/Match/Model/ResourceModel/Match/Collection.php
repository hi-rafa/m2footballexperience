<?php

namespace Footballexperience\Match\Model\ResourceModel\Match;

use Footballexperience\Match\Model\Match as ModelMatch;
use Footballexperience\Match\Model\ResourceModel\Match as ResourceModelMatch;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Constructor
     */
    protected function _construct()
    {
        $this->_init(ModelMatch::class, ResourceModelMatch::class);
    }
}