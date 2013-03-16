<?php
class EM_Productlabels_Block_Css extends Mage_Core_Block_Template
{
    public function  _toHtml() {
        $css = $this->getCss();
		if($css)
			echo "<style type='text/css'>$css</style>";
        parent::_toHtml();
    }

  
    public function getCss()
    {
		$content	=	'';
        $store = Mage::app()->getStore()->getId();
        $css = Mage::getModel('productlabels/css')->getCollection()
                ->setStoreId(array($this->_getDefaultStoreId(),$store));
        foreach($css as $c)
        {
            $content = $c->getContent();
            if($c->getStore() == $store)
                break;
        }
        return $content;
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