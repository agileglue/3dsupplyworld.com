<?php

class EM_Megamenu_Model_Catalogmenu extends Mage_Catalog_Model_Category
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('megamenu/catalogmenu');
    }
	public function getCategories($parent, $recursionLevel = 0, $sorted=false, $asCollection=false, $toLoad=true)
    {	if (Mage::helper('catalog/category_flat')->isEnabled()) {
			$resource = new EM_Megamenu_Model_Resource_Eav_Mysql4_Category_Flat();
			$categories = $resource->getCategories($parent, $recursionLevel, $sorted, $asCollection, $toLoad);
		}
		else
		{
			$resource = new Mage_Catalog_Model_Resource_Eav_Mysql4_Category();
			$categories = $resource->getCategories($parent, $recursionLevel, $sorted, $asCollection, $toLoad);
		}
		return $categories;
    }
}