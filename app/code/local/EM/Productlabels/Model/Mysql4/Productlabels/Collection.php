<?php
class EM_Productlabels_Model_Mysql4_Productlabels_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    /**
     * Joined attributes
     *
     * @var array
     */
    protected $_joinAttributes = array();

    public function _construct()
    {
        parent::_construct();
        $this->_init('productlabels/productlabels');
    }

    public function addAttributesToSelect($label)
    {
       
        $attributes = $label->getAttributes();

        foreach($attributes as $a)
        {
            $atrNameTbl = $a->getNameAttribute().'tbl';
            $atrNameTblDefault = $a->getNameAttribute().'tbl_default';
            $this->getSelect()->joinLeft(array($atrNameTbl => $this->getTable('productlabels/type_'.$a->getType())),
                                    "$atrNameTbl.label_id = ".$label->getId()."
                                    AND $atrNameTbl.attribute_id = ".$a->getId()."
                                    AND $atrNameTbl.store_id = ".$this->getStore(), array(
                            ))->joinLeft(array($atrNameTblDefault => $this->getTable('productlabels/type_'.$a->getType())),
                                    "$atrNameTblDefault.label_id = ".$label->getId()."
                                    AND $atrNameTblDefault.attribute_id = ".$a->getId()."
                                    AND $atrNameTblDefault.store_id = ".$this->_getDefaultStoreId(), array(
                                    $a->getNameAttribute() => "if($atrNameTbl.value <> 'NULL',$atrNameTbl.value,$atrNameTblDefault.value)",
                                    $a->getNameAttribute().'_in_store' => "if($atrNameTbl.store_id <> 'NULL',$atrNameTbl.store_id,$atrNameTblDefault.store_id)"
                            ));
        }
        $this->getSelect()->where('main_table.id='.$label->getId());

        return $this;
    }

    public function getStore()
    {
        $urlRoot = Mage::app()->getRequest()->getPathInfo();
        if(strstr($urlRoot, 'adminhtml_productlabels'))
            return Mage::app()->getRequest()->getParam('store',0);
        else
            return Mage::app()->getStore()->getId();
    }

    public function addAttributeToSelect($arrAttribute = array())
    {
        if(!empty($arrAttribute))
        {
            $attributes = Mage::getModel('productlabels/attribute')->getCollection()
                    ->addFieldToFilter('name_attribute',array(
                        'in' => $arrAttribute
                    ));
            foreach($attributes as $a)
            {
                $atrNameTbl = $a->getNameAttribute().'tbl';
                $atrNameTblDefault = $a->getNameAttribute().'tbl_default';
                $this->getSelect()->joinLeft(array($atrNameTbl => $this->getTable('productlabels/type_'.$a->getType())),
                                        "$atrNameTbl.label_id = main_table.id
                                        AND $atrNameTbl.attribute_id = ".$a->getId()."
                                        AND $atrNameTbl.store_id = ".Mage::app()->getRequest()->getParam('store',0), array()
                                 )->joinLeft(array($atrNameTblDefault => $this->getTable('productlabels/type_'.$a->getType())),
                                        "$atrNameTblDefault.label_id = main_table.id
                                        AND $atrNameTblDefault.attribute_id = ".$a->getId()."
                                        AND $atrNameTblDefault.store_id = ".$this->_getDefaultStoreId(), array(
                                        $a->getNameAttribute() => "if($atrNameTbl.value > 0,$atrNameTbl.value,$atrNameTblDefault.value)"
                                ));
                $this->_joinAttributes[$a->getNameAttribute()]['conditions_alias'] = "if($atrNameTbl.value > 0,$atrNameTbl.value,$atrNameTblDefault.value)";

            }
      
        }

        return $this;
    }

    public function addFieldToFilter($field, $condition=null)
    {
        $field = $this->_getMappedField($field);
        if($nameSelect = $this->_joinAttributes[$field]['conditions_alias'])
            $this->_select->where($this->_getConditionSql($nameSelect, $condition), null, Varien_Db_Select::TYPE_CONDITION);
        else
            $this->_select->where($this->_getConditionSql($field, $condition), null, Varien_Db_Select::TYPE_CONDITION);
        return $this;
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