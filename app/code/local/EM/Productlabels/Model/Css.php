<?php

class EM_Productlabels_Model_Css extends Mage_Core_Model_Abstract
{
    const SCOPE_STORE   = 0;
    const SCOPE_GLOBAL  = 1;
    const SCOPE_WEBSITE = 2;
    public function _construct()
    {
        parent::_construct();
        $this->_init('productlabels/css');
    }

    public function getIsGlobal()
    {
        return $this->getScopeGlobal();
    }

    /**
     * Retrieve attribute is global scope flag
     *
     * @return bool
     */
    public function isScopeGlobal()
    {
        return $this->getIsGlobal() == self::SCOPE_GLOBAL;
    }

     /**
     * Retrieve attribute is website scope website
     *
     * @return bool
     */
    public function isScopeWebsite()
    {
        return $this->getIsGlobal() == self::SCOPE_WEBSITE;
    }

    public function isScopeStore()
    {
        return !$this->isScopeGlobal() && !$this->isScopeWebsite();
    }

    public function hasGlobal()
    {
        return $this->getCollection()->addFieldToFilter('store',0)->count() > 0;
    }

    public function getStoreId()
    {
        return Mage::app()->getRequest()->getParam('store',0);
    }
}