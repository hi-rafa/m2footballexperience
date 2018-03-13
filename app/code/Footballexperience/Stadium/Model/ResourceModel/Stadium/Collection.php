<?php

namespace Footballexperience\Stadium\Model\ResourceModel\Stadium;

use Footballexperience\Stadium\Model\Stadium as ModelStadium;
use Footballexperience\Stadium\Model\ResourceModel\Stadium as ResourceModelStadium;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Constructor
     */
    protected function _construct()
    {
        $this->_init(ModelStadium::class, ResourceModelStadium::class);
    }
}