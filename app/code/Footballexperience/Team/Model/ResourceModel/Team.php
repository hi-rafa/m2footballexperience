<?php

namespace Footballexperience\Team\Model\ResourceModel;

use Footballexperience\Team\Api\Data\TeamInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Team extends AbstractDb
{
    /**
     * Initialize resource model
     */
    protected function _construct()
    {
        $this->_init(TeamInterface::TABLE, TeamInterface::ID);
    }
}