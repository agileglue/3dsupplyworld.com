<?php

class EM_Productlabels_Model_Mysql4_Type_Text_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('productlabels/type_text');
    }
}