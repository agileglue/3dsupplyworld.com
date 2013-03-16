<?php
class EM_Megamenu_Block_Brand extends Mage_Core_Block_Template
{
    public function getBrandList()
    {
        $product = Mage::getModel('catalog/product');
        $attributes = Mage::getResourceModel('eav/entity_attribute_collection')
            ->setEntityTypeFilter($product->getResource()->getTypeId())
            ->addFieldToFilter('attribute_code', 'computer_manufacturers');
        $attribute = $attributes->getFirstItem()->setEntity($product->getResource());
        $manufacturers = $attribute->getSource()->getAllOptions(false);
        return $manufacturers; 
    }
    
}
?>