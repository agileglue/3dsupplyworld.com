<?php

class EM_Productlabels_Block_Adminhtml_Css_Edit_Tab_Css extends EM_Productlabels_Block_Adminhtml_Element_Formcss
{
 
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $form->setDataObject(Mage::registry('productlabels_css_data'));
      $fieldset = $form->addFieldset('productlabels_css', array('legend'=>Mage::helper('productlabels')->__('Css information')));
      //$fieldsetRenderer = Mage::getBlockSingleton('adminhtml/system_config_form_fieldset');
      $element = $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('productlabels')->__('Content'),
          'title'     => Mage::helper('productlabels')->__('Content'),
          'style'     => 'width:500px; height:200px;',
      ))->setEntityAttribute(Mage::registry('productlabels_css_data'));

      $curStore = $this->getRequest()->getParam('store',0);

      $fieldset->addField('cur_store', 'hidden', array(
          'name'    => 'cur_store',
      ));


     
     
      if($id = Mage::registry('productlabels_css_data')->getId() && Mage::registry('productlabels_css_data')->getStore() == $curStore)
      {
          $fieldset->addField('id', 'hidden', array(
              'name'    => 'id',
              'value'   => Mage::registry('productlabels_css_data')->getId()
          ));
      }
      
      if ( Mage::getSingleton('adminhtml/session')->getProductlabelsCssData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getProductlabelsCssData());
          Mage::getSingleton('adminhtml/session')->setProductlabelsCssData(null);
      } elseif ( Mage::registry('productlabels_css_data') ) {
          $form->setValues(Mage::registry('productlabels_css_data')->getData());
      }
      return parent::_prepareForm();
  }

   public function getStoreCode()
    {
        return $this->getRequest()->getParam('store', '');
    }
}