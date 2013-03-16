<?php
class EM_Productlabels_Block_Adminhtml_Element_Fieldset extends Mage_Adminhtml_Block_Catalog_Form_Renderer_Fieldset_Element
{
    /*public function getScopeLabel()
    {
        $html = '';
        $attribute_code = $this->getElement()->getName();
        $attribute = Mage::getModel('productlabels/attribute')->getCollection()
                ->addFieldToFilter('name_attribute',$attribute_code)->setPageSize(1)
                ->getFirstItem();
        $this->setData('attribute',$attribute);
        if (!$attribute || Mage::app()->isSingleStoreMode()) {
            return $html;
        }
        if ($attribute->isScopeGlobal()) {
            $html.= '[GLOBAL]';
        }
        elseif ($attribute->isScopeWebsite()) {
            $html.= '[WEBSITE]';
        }
        elseif ($attribute->isScopeStore()) {
            $html.= '[STORE VIEW]';
        }

        return $html;
    }*/

    /*public function getAttribute()
    {
        return $this->getData('attribute');
    }*/

    public function getAttributeCode()
    {
        return $this->getAttribute()->getNameAttribute();
    }

    /*public function getDataObject()
    {
        return Mage::registry('productlabels_data');
    }*/

    public function usedDefault()
    {
        $store = $this->getRequest()->getParam('store');
        if(!$store)
            return false;
        $attribute = $this->getAttribute();
        if(!$attribute->getType())
            return false;
        $storeIn = Mage::registry('productlabels_data')->getData($attribute->getNameAttribute().'_in_store');
//if($attribute->getId() == 6){echo $storeIn;exit;}
        if($storeIn == $this->_getDefaultStoreId() || !$storeIn)
            return true;
        return false;
                      
        //return in_array($attribute->getId(), Mage::registry('attribute_default'));
        //return !$storeIn || ($storeIn != $this->_getDefaultStoreId());
        /*$collection = Mage::getModel('productlabels/type_'.$attribute->getType())->getCollection()
                ->addFieldToFilter('label_id',$this->getRequest()->getParam('id'))
                ->addFieldToFilter('attribute_id',$attribute->getId())
                ->addFieldToFilter('store_id',$this->getRequest()->getParam('store'));
     /*   if($collection->count() == 0)
           $this->getElement()->setDisabled(true);*/
        //return $collection->count() == 0;
    }

    /**
     * Default sore ID getter
     *
     * @return integer
     */
    protected function _getDefaultStoreId()
    {
        return Mage_Catalog_Model_Abstract::DEFAULT_STORE_ID;
    }

    


}

?>
