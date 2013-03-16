<?php
	
class EM_Cloudzoom_Block_Product_View_Media extends Mage_Catalog_Block_Product_View_Media
{
    protected function _beforeToHtml(){
    	if(intval(Mage::getStoreConfig('em_cloudzoom/general/enable'))){
    		$this->setTemplate('em_cloudzoom/catalog/product/view/media.phtml');
    	}
    	return parent::_beforeToHtml();
    }
    protected function _afterToHtml($html){
    	
    	$html .= '<div class="hidden"><noscript><p>Magento CloudZoom Extenstion by <a href="http://emthemes.com">EM Themes</a>.</p></noscript></div>';
    	
    	return parent::_afterToHtml($html);
    }
}