<?php
class EM_Productlabels_Model_Type_Varchar extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('productlabels/type_varchar');
    }
  
}