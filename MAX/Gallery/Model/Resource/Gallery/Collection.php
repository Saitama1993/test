<?php

class MAX_Gallery_Model_Resource_Gallery_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract{

    public function _construct(){
        parent::_construct();
        $this->_init('maxgallery/gallery');
    }

}

