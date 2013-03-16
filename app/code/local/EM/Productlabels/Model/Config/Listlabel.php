<?php
class EM_Productlabels_Model_Config_Listlabel
{
    protected $_options;
    protected $_list = null;
    public function toOptionArray()
    {
        if (!$this->_options) {
            if($this->_list == null)
            {
                $this->_list = Mage::getModel('productlabels/productlabels')->getCollection();
            }

            $data = array();
            if($this->_list->count())
            {
                foreach($this->_list as $l)
                {
                    $data[] = array('value'=>$l->getId(),'label'=>$l->getName());
                }
            }

            $this->_options =  $data;
        }
        return $this->_options;
    }
}

