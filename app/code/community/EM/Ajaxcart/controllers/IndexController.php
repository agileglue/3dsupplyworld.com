<?php
class EM_Ajaxcart_IndexController extends Mage_Core_Controller_Front_Action
{   
	public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
			
    public function deleteAction()
    {       		
        $id = $this->getRequest()->getParam('id');
        if ($id) {
            try {
                Mage::getSingleton('checkout/cart')->removeItem($id)
                  ->save();
            } catch (Exception $e) {
               Mage::getSingleton('checkout/cart')->addError($this->__('Cannot remove item'));
            }
        }
		$backUrl = $this->_getRefererUrl();
		$this->getResponse()->setRedirect($backUrl);
    }
	
	public function addtocartAction()
    {
        $this->indexAction();
    }
	
    public function preDispatch()
    {
        parent::preDispatch();
        $action = $this->getRequest()->getActionName();
    }

    
}