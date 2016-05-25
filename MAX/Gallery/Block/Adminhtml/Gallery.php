<?php

class MAX_Gallery_Block_Adminhtml_Gallery extends Mage_Adminhtml_Block_Widget_Grid_Container{

    protected function _construct()
    {
        parent::_construct();

        $helper = Mage::helper('maxgallery');
        $this->_blockGroup = 'maxgallery';
        $this->_controller = 'adminhtml_gallery';

        $this->_headerText = $helper->__('Gallery');
    }

}

