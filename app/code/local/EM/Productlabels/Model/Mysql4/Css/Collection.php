<?php

class EM_Productlabels_Model_Mysql4_Css_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('productlabels/css');
    }

    public function setStoreId($stores)
    {
        if(is_array($stores))
            $this->addFieldToFilter('store',array('in' => $stores));
        else
            $this->addFieldToFilter('store',Mage::app()->getRequest()->getParam('store', 0));
        $this->addOrder('store', 'ASC');
        //echo (string)$this->getSelect();exit;
        return $this;
    }

    
}