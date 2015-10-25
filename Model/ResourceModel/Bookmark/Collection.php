<?php
namespace MagentoHackathon\GridConfigShare\Model\ResourceModel\Bookmark;

use Magento\Ui\Model\ResourceModel\Bookmark\Collection as BookmarkCollection;

class Collection extends BookmarkCollection
{
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct() {
        $this->_init('MagentoHackathon\GridConfig\Model\GridConfig', 'MagentoHackathon\Gridconfig\Model\Resource\GridConfig');
    }
}
