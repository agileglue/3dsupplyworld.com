<?php
/**
 * Magento EM Edition
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magento EM Edition License
 * that is bundled with this package in the file LICENSE_EE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.magentocommerce.com/license/em-edition
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
 * @category    EM
 * @package     EM_PageCache
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://www.magentocommerce.com/license/em-edition
 */

/**
 * System Cache observer
 *
 * @category   EM
 * @package    EM_SystemCache
 * @author     Emthemes <emthemes.com>
 */
class EM_Em0057settings_Model_Observer {

    public function afterConfigSave(Varien_Event_Observer $observer) {
		$this->toggleCloudzoom();
		$this->toggleOneStepCheckout();
    }
	
	protected function toggleCloudzoom() {
		$moduleFile = Mage::getBaseDir('etc').'/modules/EM_Cloudzoom.xml';
		$config = simplexml_load_file($moduleFile);
		if (!$config) return;
		$isDisable = Mage::getStoreConfig('advanced/modules_disable_output/EM_Cloudzoom');

		$nodeVal = $isDisable? 'false': 'true';
		$config->modules->EM_Cloudzoom->active = $nodeVal;
		$config->asXML($moduleFile);
	}

	protected function toggleOneStepCheckout() {
		$moduleFile = Mage::getBaseDir('etc').'/modules/EM_Onestepcheckout.xml';
		$config = simplexml_load_file($moduleFile);
		if (!$config) return;
		$isDisable = Mage::getStoreConfig('advanced/modules_disable_output/EM_Onestepcheckout');

		$nodeVal = $isDisable? 'false': 'true';
		$config->modules->EM_Onestepcheckout->active = $nodeVal;
		$config->asXML($moduleFile);
	}
}
