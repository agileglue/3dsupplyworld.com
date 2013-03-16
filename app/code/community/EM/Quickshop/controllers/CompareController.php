<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Catalog
 * @copyright   Copyright (c) 2010 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


/**
 * Catalog comapare controller
 *
 * @category   Mage
 * @package    Mage_Catalog
 * @author     Magento Core Team <core@magentocommerce.com>
 */
class EM_Quickshop_CompareController  extends Mage_Core_Controller_Front_Action
{
    
   
    public function addAction()
    {	
		$url = '';
		$prdurl = '' ;
        if ($productId = (int) $this->getRequest()->getParam('product')) {
            $product = Mage::getModel('catalog/product')
                ->setStoreId(Mage::app()->getStore()->getId())
                ->load($productId);
			$prdurl=$product->getProductUrl();
			$url=Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_LINK);
            if ($product->getId()/* && !$product->isSuper()*/) {
                Mage::getSingleton('catalog/product_compare_list')->addProduct($product);
                Mage::getSingleton('catalog/session')->addSuccess(
                    $this->__('The product %s has been added to comparison list.', Mage::helper('core')->htmlEscape($product->getName()))
                );
                Mage::dispatchEvent('catalog_product_compare_add_product', array('product'=>$product));
            }

            Mage::helper('catalog/product_compare')->calculate();
        }

		$_prdurl=explode($url,$prdurl);
		$this->_redirect($_prdurl[1]); 
    }

}
