<?php

namespace Footballexperience\Stadium\Model\ResourceModel;

use Footballexperience\Stadium\Api\Data\StadiumInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Stadium extends AbstractDb
{
    /**
     * Initialize resource model
     */
    protected function _construct()
    {
        $this->_init(StadiumInterface::TABLE, StadiumInterface::ID);
    }
}