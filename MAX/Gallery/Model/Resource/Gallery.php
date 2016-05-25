<?php

class MAX_Gallery_Model_Resource_Gallery extends Mage_Core_Model_Mysql4_Abstract{

    public function _construct(){
        $this->_init('maxgallery/table_gallery', 'id');
    }

}

