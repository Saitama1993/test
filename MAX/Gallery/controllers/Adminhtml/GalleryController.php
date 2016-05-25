<?php

class MAX_Gallery_Adminhtml_GalleryController extends Mage_Adminhtml_Controller_Action{
    
    public function indexAction(){
        $this->loadLayout();
        $this->_setActiveMenu('maxgallery');

        $contentBlock = $this->getLayout()->createBlock('maxgallery/adminhtml_gallery');
        $this->_addContent($contentBlock);
        $this->renderLayout();
    }
}

