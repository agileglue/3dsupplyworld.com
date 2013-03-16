<?php

class EM_Productlabels_Model_Productlabels extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('productlabels/productlabels');
    }

    public function getStoreId()
    {
        if ($this->hasData('store_id')) {
            return $this->getData('store_id');
        }
        return Mage::app()->getRequest()->getParam('store');
    }

    public function getAttributes()
    {
        return Mage::getModel('productlabels/attribute')->getCollection()
                ->addFieldToFilter('name_attribute',array(
                                    'neq'        => 'name'
                                    ));
        
    }

    public function addAttributeToSelect()
    {
        $collection = $this->getCollection()->addAttributesToSelect($this);
        $this->setData($collection->getFirstItem()->getData());
        return $this;
    }

    public function getAttributeDefault()
    {
        $attTable = array(
            'text'  =>  Mage::getModel('productlabels/type_text'),
            'varchar'  =>  Mage::getModel('productlabels/type_varchar'),
            'int'  =>  Mage::getModel('productlabels/type_int')
        );
        $attributes = $this->getAttributes();
        foreach($atr as $a)
        {
            if(!$this->getData($a->getNameAttribute()))
            {
                $value = $attTable[$a->getType()]->getCollection()
                        ->addFieldToFilter('label_id',$this->getId())
                        ->addFieldToFilter('attribute_id',$a->getId())
                        ->addFieldToFilter('store_id',0)
                        ->getFirstItem()
                        ->getValue();
                $this->setData($a->getNameAttribute(),$value);
            }
        }

        return $this;
    }
}