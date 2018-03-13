<?php

namespace Footballexperience\Match\Model\ResourceModel;

use Footballexperience\Match\Api\Data\MatchInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Match extends AbstractDb
{
    /**
     * Initialize resource model
     */
    protected function _construct()
    {
        $this->_init(MatchInterface::TABLE, MatchInterface::ID);
    }
}