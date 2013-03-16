<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category    Sample
 * @package     Sample_WidgetTwo
 * @copyright   Copyright (c) 2009 Irubin Consulting Inc. DBA Varien (http://www.varien.com)
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */


/**
 * Widget which displays the social bookmarking services list
 *
 * @category    Sample
 * @package     Sample_WidgetTwo
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class EM_Flexiblewidget_Block_List
extends Mage_Catalog_Block_Product_Abstract
implements Mage_Widget_Block_Interface
{

    /**
     * A model to serialize attributes
     * @var Varien_Object
     */
	/**
     * Default toolbar block name
     *
     * @var string
     */
    protected $_defaultToolbarBlock = 'catalog/product_list_toolbar';

    /**
     * Product Collection
     *
     * @var Mage_Eav_Model_Entity_Collection_Abstract
     */
    protected $_productCollection; 

    protected $instr1 = array('=','<>','>','<','<=','>=');
    protected $instr2 = array('(',')');
    protected $instr3 = array('and','or');
    protected $instr4 = array('not');
    protected $instr5 = array('='=>'==','<>'=>'!=','>'=>'>','<'=>'<','<='=>'<=','>='=>'>=','and'=>'&&','or'=>'||','not'=>'!');
    protected $_serializer = null;
    protected $arrayField = array();
    protected $fieldCondition = null;
    protected $hasConditionIf = false;
    protected $size = 0;
    protected $encrypt = "sadfkjhfksajdfhaksjdfhkasjfhkasjdhfkashdfksdhfsdhfkdashfkajsfhfh";
    /**
     * Initialization
     */
    protected function _construct()
    {
        $this->_serializer = new Varien_Object();
        //$this->addData('type','computer');
        parent::_construct();
    }

    /**
     * Produces links list html
     *
     * @return string
     */
	 
	/**
     * Retrieve current view mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->getChild('toolbar')->getCurrentMode();
    }

   

    /**
     * Retrieve list toolbar HTML
     *
     * @return string
     */
   
   

    public function setCollection($collection)
    {
        $this->_productCollection = $collection;
        return $this;
    }

    public function addAttribute($code)
    {
        $this->_getProductCollection()->addAttributeToSelect($code);
        return $this;
    }

    public function getPriceBlockTemplate()
    {
        return $this->_getData('price_block_template');
    }

    /**
     * Retrieve Catalog Config object
     *
     * @return Mage_Catalog_Model_Config
     */
    protected function _getConfig()
    {
        return Mage::getSingleton('catalog/config');
    } 
	 

    public function Expression($r)
    {
        //$ex = '' ;
		$ex = new stdClass();
        $tmp1=$r;
        foreach($this->instr1 as $in1)
        {
            if($i = strpos($tmp1,' '.$in1.' '))
            {
                $tmp = explode(' '.$in1.' ',$tmp1);
                $ex->field = trim($tmp[0]);
                $ex->operator = trim($in1);
                $ex->value = trim($tmp[1]);
                return $ex ;
            }
        }
        return $ex ;
    }
    public function trimAll($str,$filter)
    {

        $tmp_ex = trim($str);
        $t_rs=str_replace($filter,' ',$tmp_ex);
        return $t_rs;
    }

    public function toArrExpression($field_condition)
    {
        //$ex = $this->getData('if');
        //$ex = '((a>2) or (b<3)) and (c>4)' ;
        //$ex = '((a>2) or ((b<3) and (d=9))) and (c>4)' ;
        //$ex = 'a>2 and b<c and c>d';
        //$ex = 'color=blue and gender1=female and age1<20';
        //$ex  = 'a>2 and b<c and d>8' ;
        $ex = $field_condition;
        //xoa moi khoang trang trong bieu thuc
        $t_rs = trim($ex);
        //$t_rs = $this->trimAll($t_rs,'(');
        //$t_rs = $this->trimAll($t_rs,')');
        $t_instr = $this->instr3 ;

        $tmp1=$t_rs;
        foreach($t_instr as $t_in)
        {
            $tmp2 = str_replace(' '.$t_in.' ','|',$tmp1);
            $tmp1=$tmp2;
        }
        $tmp3 = trim($tmp1,'|') ;
        $rs = explode('|',$tmp3);
        $kq = array();
        $tmp5 = array();
        foreach($rs as $r)
        {

            if($r != null && !in_array($r,$this->instr3))
            {
                //$r co the la 1 bieu thuc!
                if($ex1 = $this->Expression($r))
                {
                    if(!in_array($ex1->field,$tmp5))
                    {
                        $tmp5[] = $ex1->field ;
                        $kq[] = $ex1;
                    }
                }
            }
        }
        return $kq;
    }


    protected function standarStr($str)
    {
        $arr = str_split($str) ;
        $st = '' ;
        for ($i = 0 ; $i < count($arr);$i++)
        {
            if(!in_array($arr[$i],$this->instr1))//ko phai toan tu
            {
                $st .= $arr[$i];
            }
            else //la toan tu
            {
                if($i>0 && !in_array($arr[$i-1],$this->instr1))  // phia trc ko phai toan tu
                {
                    $st .= ' '.$arr[$i].' ' ;

                }
                else
                {
                    // phia trc la toan tu
                    $st = trim($st);
                    $st .= $arr[$i].' ';

                }
            }
        }
        return $st ;
    }
    function getcatsid($arr,$id)
    {
        $kq = array();
        if(is_array($arr) && $arr['category_id'] == $id)
        {
            $kq[] = $arr ;
        }   
        elseif(is_array($arr))
        {
            if(count($arr['children'])>0)
            {
                foreach ($arr['children'] as $child) 
                {
                    $kq['child'][] = $this->getcatsid($child,$id);
                }
            }
        }
        return $kq;
    }
    function nodeToArray(Varien_Data_Tree_Node $node)
    {
        $result = array();
        $result['category_id'] = $node->getId();
        $result['parent_id'] = $node->getParentId();
        $result['name'] = $node->getName();
        $result['is_active'] = $node->getIsActive();
        $result['position'] = $node->getPosition();
        $result['level'] = $node->getLevel();
        $result['children'] = array();
        
        foreach ($node->getChildren() as $child) 
        {
            $result['children'][] = $this->nodeToArray($child);
        }
        return $result;
    } 
    protected function get_categories($catName)
    {
        $cat = Mage::getModel('catalog/category');
        $tree = $cat->getTreeModel();
        $tree->load();
        $ids = $tree->getCollection()->getAllIds();
        
        $arr = new StdClass();     

        if ($ids)
        {
            foreach ($ids as $id)
            {
                $name = $cat->load($id)->getName();
                if(strcmp($name,$catName)==0)
                {
                    $ass->name =$name ;
                    $ass->id =$id ;
                    $arr = $ass ;
                    break;
                }
            }
        }
        
        //print_r($ars);
        //die;
        
        return $arr;
    }
    protected function processCategory($config1)
    {
//      $config1 = 'catA' ;
        $arrRs = array ();      
        $categorys = explode('|',$config1);
        if(count($categorys)>0)
        {
            foreach($categorys as $cate)
            {
                if($cate != null)
                {
                    $t_cat = explode('/',$cate);

                    while (!$categoryName = array_pop($t_cat))
                    {
                    }
 
                    if($tp = $this->get_categories($categoryName)){
                        $arrRs[] =  $tp;}
                }
            }
        }
        return $arrRs;
    }
    
    public function setArrayField($arrayField = array())
    {
        $this->arrayField = $arrayField;
    }
    
    public function setFieldCondion($fieldCondition = '')
    {
        $this->fieldCondition = $fieldCondition;
    }
    
    public function getArrayField()
    {
        return $this->arrayField;
    }
    
    public function getFieldCondition()
    {
        return $this->fieldCondition;
    }
    
    public function setHasConditionIf($boolean)
    {
        $this->hasConditionIf = $boolean;
    }
    
    public function getHasConditionIf()
    {
        return $this->hasConditionIf;
    }
    
    public function checkConditionIf($field_condition,$product,$array_field)
    {
        if(!$this->hasConditionIf)
            return true;
        $id = $product->getId();
        //foreach ($data as $key=>$product) //loop for getting products
                           
		$p = array();
		$flag = 1;
		foreach($array_field as $a)
		{
			$p[$a->field] = Mage::getSingleton('catalog/product')->load($id)->getData($a->field);
			if(!$p[$a->field])
			{
				$flag = 0;
				return false;
			}
		}
		if($flag == 1)
			if(!eval("return ".$field_condition." ;"))
			{
				return false;
			   
			}
		return true;    
    }

	protected function _initReviewsHelperBlock()
    {
        if (!$this->_reviewsHelperBlock) {
		if (!Mage::helper('catalog')->isModuleEnabled('Mage_Review')) {
						return false;
					} else {
						 $this->_reviewsHelperBlock = $this->getLayout()->createBlock('review/helper');
		}
				 }
		return true;
	} 
	
	public function getLoadedProductCollection(){
		return $this->getProductCollection();
	}
   

    protected function getProductCollection()
    {
        $products = Mage::getModel('catalog/product')->getCollection();
        $config1 = $this->getData('category');
        if($config1)
        {
			$cat = Mage::getModel('catalog/category')->load(str_replace('category/','',$config1));
			$products->addCategoryFilter($cat);		
        }
       
        $attrSetName = $this->getData('attribute_set');
        if($attrSetName)
        {
            $attributeSetId = Mage::getModel('eav/entity_attribute_set')->load($attrSetName, 'attribute_set_name')->getAttributeSetId();
            $products->addAttributeToFilter('attribute_set_id', $attributeSetId);
        }

		$products->addAttributeToSelect('*');
        $products->addMinimalPrice()
            ->addFinalPrice()
            ->addTaxPercents();
		Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($products);
        Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($products);	
		
        $asc = $this->getRequest()->getParam('dir');
        $od = $this->getRequest()->getParam('order');
        
        if (isset($od) && isset($asc))
        {
            $orders[0]=$od;
            $orders[1] = $asc;
        }
        else
        {
            $config2 = $this->getData('order_by');
            if(isset($config2))
            {
                //echo 'bb';
                $orders = explode(' ',$config2);
            }
        }
    
        $store_id = Mage::app()->getStore()->getId();

        $field_condition = $this->getData('if');
        
        $conditionIf = array();
        if($field_condition != '' && $field_condition != '#')
        {
            
			$field_condition = strtolower($field_condition);
  
			$field_condition = $this->standarStr($field_condition);
  
			$array_field = $this->toArrExpression($field_condition);
			
			$field_widget = '(';

			foreach($array_field as $a)
			{
				$tmp = array();
				$i = 0;
				//check and process if exists attributes like a,ab,abc
				foreach($array_field as $a1)
				{
					if($a != $a1)
					{
						if(strstr($a1->field,$a->field))
						{
							$field_condition = str_replace($a1->field,$this->encrypt.$i,$field_condition);
							$tmp[] = $a1->field;
							$i++;
						}
					}
				}
				$field_condition = str_replace($a->field,$a->field.'_table.value',$field_condition);
				foreach($tmp as $key => $t)
				{
					$field_condition = str_replace($this->encrypt.$key,$t,$field_condition);
				}
  
				$field_widget .= '"'.$a->field.'",';
			}

			$field_widget = substr($field_widget,0,strlen($field_widget)-1).')';
 
			$dem = 0;
			$products->distinct(true);
			$tableEntity = 	'`e`';
			//Join if use catalog flat
			if (Mage::helper('catalog/product_flat')->isEnabled()) {
				$products->getSelect()
					->join(
						array('entity_table'=>Mage::getSingleton('core/resource')->getTableName('catalog_product_entity')),
						'e.entity_id=entity_table.entity_id',
						array()
					);
				$tableEntity = 	'entity_table';
			}
			
			foreach($array_field as $a)
			{
				$field = $a->field;
				$eavAttribute = Mage::getResourceSingleton('catalog/product')->getAttribute($field);//->getData('frontend_input');
				$backendType = $eavAttribute->getBackend()->getTable();
				$frontendInput = $eavAttribute->getData('frontend_input');
				if($dem == count($array_field)-1)
				{
					if($frontendInput == 'select')
					{
						$products->getSelect()
						  ->join(
							  array('cat_table'=>$backendType),
								'cat_table.entity_id='.$tableEntity.'.entity_id
								AND cat_table.store_id in (0,'.$store_id.')
								AND cat_table.attribute_id='.$eavAttribute->getData('attribute_id').'
								AND cat_table.entity_type_id='.$tableEntity.'.entity_type_id
								INNER JOIN eav_attribute_option_value as '.$field.'_table
								ON cat_table.value='.$field.'_table.option_id
								AND ('.$field_condition.')',
								array()
								);
					}
					else
					{
						$products->getSelect()
							->join(
								array($field.'_table'=>$backendType),
								$field.'_table.entity_id='.$tableEntity.'.entity_id
								AND '.$field.'_table.store_id in (0,'.$store_id.')
								AND '.$field.'_table.attribute_id='.$eavAttribute->getData('attribute_id').'
								AND '.$field.'_table.entity_type_id='.$tableEntity.'.entity_type_id and ('.$field_condition.')',
								array()
							);     
					}
				}
				else
				{
					if($frontendInput == 'select')
						{
							$products->getSelect()
							  ->join(
								  array('cat_table'=>$backendType),
									'cat_table.entity_id='.$tableEntity.'.entity_id
									AND cat_table.store_id in in (0,'.$store_id.')
									AND cat_table.attribute_id='.$eavAttribute->getData('attribute_id').'
									AND cat_table.entity_type_id='.$tableEntity.'.entity_type_id
									INNER JOIN eav_attribute_option_value as '.$field.'_table
									ON cat_table.value='.$field.'_table.option_id',
									array()
									);
						}
						else
						{
							$products->getSelect()
								->join(
									array($field.'_table'=>$backendType),
									$field.'_table.entity_id='.$tableEntity.'.entity_id
									AND '.$field.'_table.store_id in in (0,'.$store_id.')
									AND '.$field.'_table.attribute_id='.$eavAttribute->getData('attribute_id').'
									AND '.$field.'_table.entity_type_id='.$tableEntity.'.entity_type_id',
									array()
								);     
						}     
				}
				$dem++;
			   
			}
				
        }
      
        $products->addStoreFilter(Mage::app()->getStore()->getId());
        $pageSize = $this->getRequest()->getParam('limit');
        if(!$pageSize)
            $pageSize = $this->getData('limit_count');
        if(count($orders))
            $products->addAttributeToSort($orders[0],$orders[1]);
        if(isset($pageSize))
        {
            $products->setPageSize($pageSize);
        }
        $products->setCurPage($this->getRequest()->getParam('p',1));

        $this->setCollection($products);
        
        $this->setSize(count($this->_productCollection->getData()));
       
        return $this->_productCollection;
    }
	
	protected function _toHtml()
    {   
		if($this->getData('template')	==	'custom_template')
		{	$this->setTemplate($this->getData('custom_theme'));		}
        return parent::_toHtml();
    }

    public function getToolbarHtml() 
    { 
        $this->setToolbar($this->getLayout()->createBlock('catalog/product_list_toolbar', 'Toolbar'));
        $toolbar = $this->getToolbar();
        $toolbar->enableExpanded();
        $toolbar->setAvailableOrders(array(
        'ordered_qty'  => $this->__('Most Purchased'),
        'name'      => $this->__('Name'),
        'price'     => $this->__('Price')
        ))
        ->setDefaultOrder('ordered_qty')
        ->setDefaultDirection('desc')
        ->setCollection($this->_productCollection);
        
        $pager = $this->getLayout()->createBlock('page/html_pager', 'Pager');
        $pager->setCollection($this->_productCollection);
        $toolbar->setChild('product_list_toolbar_pager',$pager);
        //$toolbar->addToChildGroup('product_list_toolbar',$pager);
        //print_r($pager->_toHtml());exit;
        //parent::getToolbarHtml();
        return $toolbar->_toHtml();
    }
    
    public function getColumnCount()
    {
        return $this->getData('column_count');
    }
    
    public function setSize($size)
    {
        $this->size = $size;
    }
    
    public function getSize()
    {
        return $this->size;
    }
    
    public function getLists()
    {
        $m = Mage::getModel('saleproduct/attributeset');
        $r = $m->getTypeSetList();
        return $r;
    }

   
    
    

    /**
     * Generates link attributes
     *
     * The method return an array, containing any number of link attributes,
     * All values are optional
     * array(
     *  'href' => '...',
     *  'title' => '...',
     *  '_target' => '...',
     *  'onclick' => '...',
     * )
     *
     * @param string $service
     * @return array
     */
    

}
