<?php

class MAX_Gallery_Block_Adminhtml_Gallery_Grid extends Mage_Adminhtml_Block_Widget_Grid{

    protected function _prepareCollection(){
        
        $collection = Mage::getModel('maxgallery/gallery')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns(){

        $helper = Mage::helper('maxgallery');

        $this->addColumn('id', array(
            'header' => $helper->__('ID'),
            'index' => 'id'
        ));

        $this->addColumn('name', array(
            'header' => $helper->__('Name'),
            'index' => 'name',
            'type' => 'text',
        ));
        $this->addColumn('image', array(
            'header' => $helper->__('Image'),
            'index' => 'image',
            'type' => 'text',
        ));
        $this->addColumn('description', array(
            'header' => $helper->__('Description'),
            'index' => 'description',
            'type' => 'text',
        ));
        $this->addColumn('sort', array(
            'header' => $helper->__('Sort'),
            'index' => 'sort',
            'type' => 'text',
        ));

        return parent::_prepareColumns();
    }

}
