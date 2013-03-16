<?php

class EM_Productlabels_Block_Adminhtml_Css_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('css_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('productlabels')->__('Css Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('productlabels')->__('Css Information'),
          'title'     => Mage::helper('productlabels')->__('Css Information'),
          'content'   => $this->getLayout()->createBlock('productlabels/adminhtml_css_edit_tab_css')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}