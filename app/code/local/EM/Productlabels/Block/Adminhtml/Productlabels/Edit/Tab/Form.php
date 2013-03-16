<?php

class EM_Productlabels_Block_Adminhtml_Productlabels_Edit_Tab_Form extends EM_Productlabels_Block_Adminhtml_Element_Form
{

   /**
     * Class constructor
     *
     */
  protected function _construct()
  {
      parent::_construct();
      $this->setTemplate('em_productlabels/edit/form.phtml');
  }

 

  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $form->setDataObject(Mage::registry('productlabels_data'));
      $fieldset = $form->addFieldset('productlabels_form', array('legend'=>Mage::helper('productlabels')->__('General information')));


     
      $fieldset->addField('store', 'hidden', array(
          'name'    => 'store',
      ));

      $fieldset->addField('id', 'hidden', array(
          'name'    => 'id',
      ));

      $this->_setFieldset($fieldset);

      
      $this->initFormCondition($form);
     

      if ( Mage::getSingleton('adminhtml/session')->getProductlabelsData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getProductlabelsData());
          Mage::getSingleton('adminhtml/session')->setProductlabelsData(null);
      } elseif ( Mage::registry('productlabels_data') ) {
          $form->setValues(Mage::registry('productlabels_data')->getData());
      }
      return parent::_prepareForm();
  }

  public function _setFieldset($fieldset)
  {
      $attributes = Mage::getModel('productlabels/attribute')->getCollection();
             
      foreach($attributes as $a)
      {
            $atrName = $a->getNameAttribute();
            $data = array(
                'label'     => Mage::helper('productlabels')->__($a->getTitle()),
                'title'     => Mage::helper('productlabels')->__($a->getTitle()),
                'name'      => $atrName,
                'required'  => $a->getRequire()
            );
            if($a->getClass())
                $data['class'] = $a->getClass();
            if($atrName == 'texthtml')
            {
                $data['style'] = 'width:300px; height:200px;';
                $data['wysiwyg'] = false;
            }
            elseif($atrName == 'enable')
            {
                $data['checked'] = (Mage::registry('productlabels_data')->getEnable()=="1") ? true : false;
                $data['onclick'] = 'this.value = this.checked ? 1 : 2;';
            }
            $element = $fieldset->addField($atrName, $a->getTypeBackend(), $data)
                        ->setEntityAttribute($a);
            if($atrName == 'texthtml')
                $this->addInsertVariableButton($fieldset);
            if($a->getTypeBackend() == 'file')
            {
                $pathImage = Mage::registry('productlabels_data')->getData($atrName);
                if($pathImage && $pathImage != 'nopic')
                {
                    
                    $imageHtml = "<div>
                                        <img id='$atrName-pic' src='".Mage::helper('productlabels')->resizeImage($pathImage,50,50,"em_productlabels/".$atrName,'admin')."'/>
                                        <input type='hidden' name='no$atrName' value='0' id='no$atrName'/>
                                        <input type='hidden' name='cur$atrName' value='$pathImage' id='cur$atrName'/>
                                        <button type='button' onclick='deletePicture(\"$atrName\");return false;'><span><span>Delete Image</span></span></button>
                                  </div>";
                    $element->setAfterElementHtml($imageHtml);
                }
            }

      }

   
      
  }

  public function addInsertVariableButton($fieldset)
  {
        /* Add Insert Varialbe Button */
        $fieldset->addField('orig_template_variables', 'hidden', array(
            'name' => 'orig_template_variables',
        ));

        $fieldset->addField('variables', 'hidden', array(
            'name' => 'variables'
        ));

        $fieldset->addField('template_variables', 'hidden', array(
            'name' => 'template_variables',
        ));

        $insertVariableButton = $this->getLayout()
            ->createBlock('adminhtml/widget_button', '', array(
                'type' => 'button',
                'label' => Mage::helper('adminhtml')->__('Insert Variable...'),
                'onclick' => 'templateControl.openVariableChooser();return false;'
            ));

        $fieldset->addField('insert_variable', 'note', array(
            'text' => $insertVariableButton->toHtml()
        ));
  }

   

    public function initFormCondition($form)
    {
         $model = Mage::getModel('productlabels/rule');
         
         $actionsArr = unserialize(Mage::registry('productlabels_data')->getActions());
         
         if (!empty($actionsArr) && is_array($actionsArr)) {
             $model->getActions()->loadArray($actionsArr);
         }
        
         $model->getActions()->setJsFormObject('rule_actions_fieldset');

         $renderer = Mage::getBlockSingleton('adminhtml/widget_form_renderer_fieldset')
            ->setTemplate('promo/fieldset.phtml')
            ->setNewChildUrl(str_replace('productlabels_admin',Mage::getConfig()->getNode('admin/routers/adminhtml/args/frontName'),$this->getUrl('*/promo_quote/newActionHtml/form/rule_actions_fieldset')));

        $fieldset = $form->addFieldset('rule_actions_fieldset', array(
            'legend'=>Mage::helper('productlabels')->__('Conditions')
        ))->setRenderer($renderer);

        $element = $fieldset->addField('actions', 'text', array(
            'name' => 'actions',
            'label' => Mage::helper('salesrule')->__('Apply To'),
            'title' => Mage::helper('salesrule')->__('Apply To'),
            'required' => true,
        ))->setRule($model)->setRenderer(Mage::getBlockSingleton('rule/actions'));

        $element->setAfterElementHtml('<span class="value scope-label">'.Mage::helper('productlabels')->__('[GLOBAL]').'</span>');
        Mage::dispatchEvent('adminhtml_block_salesrule_actions_prepareform', array('form' => $form));

        $form->setValues($model->getData());

    }
}