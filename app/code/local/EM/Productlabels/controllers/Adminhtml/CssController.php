<?php
class EM_Productlabels_Adminhtml_CssController extends Mage_Adminhtml_Controller_Action
{
    public function editAction() {
        $this->loadLayout();
        $this->_setActiveMenu('productlabels/items');
        $stores = array(0,$this->getRequest()->getParam('store',0));
        $model  = Mage::getModel('productlabels/css')->getCollection()->setStoreId($stores)->getLastItem();
        $model->setData('cur_store',$this->getRequest()->getParam('store',0));
        Mage::register('productlabels_css_data', $model);
        $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Css Manager'), Mage::helper('adminhtml')->__('Css Manager'));
        $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Css News'), Mage::helper('adminhtml')->__('Css News'));

        $this->getLayout()->getBlock('head')->setCanLoadExtJs(true);
		$this->getLayout()->getBlock('head')->setTitle(Mage::helper('productlabels')->__("Css Editor"));
        $editBlock = $this->getLayout()->createBlock('productlabels/adminhtml_css_edit');
        $editBlock->setChild('form',
            $this->getLayout()->createBlock('productlabels/adminhtml_css_edit_tab_css')
        );

        if($model->hasGlobal())
        {
            $editBlock->setChild('store_switcher',
                                    $this->getLayout()->createBlock('adminhtml/store_switcher')
                                );
        }
        $this->_addContent($editBlock);
                //->_addLeft($this->getLayout()->createBlock('productlabels/adminhtml_css_edit_tabs'));

        $this->renderLayout();
    }

    

    public function saveAction() {
          try {
                if($data = $this->getRequest()->getPost())
                {
                    $css = Mage::getModel('productlabels/css');
                    $data['store'] = $data['cur_store'];
                    $css->setData($data);
                    //print_r($css->getData());exit;
                    if(!count($data['use_default']))
                        $css->save();
                    elseif($data['id'])
                    {
                         $css->setId($data['id']);
                         $css->delete();
                    }
                    
                   
                }
                
                
                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('productlabels')->__('Css was successfully saved'));
                Mage::getSingleton('adminhtml/session')->setFormData(false);

                if ($this->getRequest()->getParam('back')) {
                        $this->_redirect('*/*/edit', array('store' => $this->getRequest()->getParam('cur_store',0)));
                        return;
                }
                $this->_redirect('*/adminhtml_productlabels',array('store' => $this->getRequest()->getParam('cur_store',0)));
                    return;
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                Mage::getSingleton('adminhtml/session')->setFormData($data);
                $this->_redirect('*/*/edit', array('store' => $this->getRequest()->getParam('cur_store',0)));
                return;
            }
        
        Mage::getSingleton('adminhtml/session')->addError(Mage::helper('productlabels')->__('Unable to find css to save'));
        $this->_redirect('*/*/',array('store' => $this->getRequest()->getParam('cur_store',0)));
    }

  
}