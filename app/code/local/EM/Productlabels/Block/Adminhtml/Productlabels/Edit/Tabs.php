<?php

class EM_Productlabels_Block_Adminhtml_Productlabels_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('productlabels_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('productlabels')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('productlabels')->__('Item Information'),
          'title'     => Mage::helper('productlabels')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('productlabels/adminhtml_productlabels_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}