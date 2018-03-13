<?php

namespace Footballexperience\Team\Model\ResourceModel\Team;

use Footballexperience\Team\Model\Team as ModelTeam;
use Footballexperience\Team\Model\ResourceModel\Team as ResourceModelTeam;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Constructor
     */
    protected function _construct()
    {
        $this->_init(ModelTeam::class, ResourceModelTeam::class);
    }
}