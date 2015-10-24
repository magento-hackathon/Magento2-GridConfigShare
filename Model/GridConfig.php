<?php
namespace MagentoHackathon\GridConfigShare\Model;

use Magento\Framework\Model\AbstractModel;

class GridConfig extends AbstractModel
{
    /**
     * Define the resource Model
     */
    protected function _construct()
    {
        $this->_init('MagentoHackathon\GridConfigShare\Model\Resource\GridConfig');
    }
}