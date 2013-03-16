<?php

class EM_Em0057settings_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function getCategoriesCustom($parent,$curId){
				
		try{
			$children = $parent->getChildrenCategories();
						
		}
		catch(Exception $e){
			return '';
		}
		return $children;
	}
}