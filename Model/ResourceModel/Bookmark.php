<?php

namespace MagentoHackathon\GridConfigShare\Model\Resource;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Bookmark extends AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('ui_bookmark_share', 'bookmark_id');
    }
}