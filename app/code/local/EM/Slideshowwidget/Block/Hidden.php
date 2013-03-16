<?php

/**
 * Magento
 *
 *  
 *
 * @package     EM_Slideshowwidget
 * @copyright   Copyright (c) 2009 Quick Solution LT
 * 
 */
class EM_Slideshowwidget_Block_Hidden extends Mage_Core_Block_Template {

    public function _construct() {
        parent::_construct();
		$this->setTemplate('slideshowwidget/hidden.phtml');
        // default template location
    }
	
   

}
