<?php

class MAX_Gallery_Model_Gallery extends Mage_Core_Model_Abstract{

    public function _construct()
    {
        parent::_construct();
        $this->_init('maxgallery/gallery');
    }

}
