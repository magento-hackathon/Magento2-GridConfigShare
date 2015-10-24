<?php

namespace MagentoHackathon\GridConfigShare\Block\Adminhtml;

class GridConfigShare extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * @return void
     */
    protected function _construct() {
        $this->_blockGroup = 'MagentoHackathon_GridConfigShare';
        $this->_controller = 'adminhtml_block';
        $this->_headerText = __('Grid Configuration');
        parent::_construct();
    }
}
