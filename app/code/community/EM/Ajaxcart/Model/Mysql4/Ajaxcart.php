<?php

class EM_Ajaxcart_Model_Mysql4_Ajaxcart extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the ajaxcart_id refers to the key field in your database table.
        $this->_init('ajaxcart/ajaxcart', 'ajaxcart_id');
    }
}