<?php
class EM_Recentreviewproducts_Block_List extends Mage_Review_Block_View
implements Mage_Widget_Block_Interface
{
	protected function _construct()
	{
		//		if($this->getCacheLifeTime())
		//		{
		//			$this->addData(array(
		//				'cache_lifetime'    => $this->getCacheLifeTime(),
		//				'cache_tags'        => array(Mage_Catalog_Model_Product::CACHE_TAG)
		//			));
		//		}
		//		else
		//		{
		//			$this->addData(array(
		//				'cache_lifetime'    => 7200,
		//				'cache_tags'        => array(Mage_Catalog_Model_Product::CACHE_TAG)
		//			));
		//		}
		parent::_construct();

	}

	public function _prepareLayout()
	{
		return parent::_prepareLayout();
	}

	public function getRecentreviewproducts()
	{
		if (!$this->hasData('recentreviewproducts')) {
			$this->setData('recentreviewproducts', Mage::registry('recentreviewproducts'));
		}
		return $this->getData('recentreviewproducts');
	}

	protected function _toHtml()
	{
		if($this->getData('choose_template')	==	'custom_template')
		{
			if($this->getData('custom_theme'))
			$this->setTemplate($this->getData('custom_theme'));
			else
			$this->setTemplate('em_recentreviewedproducts/custom.phtml');
		}
		else
		{
			$this->setTemplate($this->getData('choose_template'));
		}
		return parent::_toHtml();
	}
	
	
	//Product collection trong truong hop khong loc theo categories
	public function getProductCollection(){
	//$_items_reviews = $this->getReviewsCollection_By_Collection();
	$_items_reviews = $this->getReviewsCollection_By_Collection_Filter_By_Categories();
	$_temp_productIds = array();
	
	$count=0; 
	$limit = $this->getData('limit_count');
	//Get product list ids
	foreach ($_items_reviews as $_review){
		
		if(in_array($_review['entity_pk_value'],$_temp_productIds))
		{
			//echo $_review['entity_pk_value'].'<br/>';
			//print_r($_temp_productIds) ;
			continue;
		}
		else
		{
			$_temp_productIds[] = $_review['entity_pk_value'];
			$count++;
			if($count == $limit)
			{
				
				//echo $count;
				//print_r($_temp_productIds) ;die;
				break;
			}
			
			//break;
			
		}
	}
	
	//$_productIds = array_unique($_temp_productIds);
	//print_r($_temp_productIds) ;die;
	$products= Mage::getModel('catalog/product')->getCollection()
		//->setStoreId($storeId) // check lai trong multi store
		//->addStoreFilter($store_id) //lay cac san pham trong store hien tai
		->addAttributeToFilter('status', array('neq' => Mage_Catalog_Model_Product_Status::STATUS_DISABLED))
		/*
		->joinField(
			    'qty',
			    'cataloginventory/stock_item',
			    'qty',
			    'product_id=entity_id',
			    '{{table}}.stock_id=1',
			    'left'
			    )
			    ->addAttributeToFilter('qty', array('gt' => 0))/ Cai nay chi lay duoc san pham simple */
			    ->addAttributeToFilter('visibility',array("neq"=>1))
				->addAttributeToFilter('entity_id',array(
				'in' => $_temp_productIds
				))
				->addAttributeToSelect('*'); 
				
				//echo $products->getSelect();die;
			return $products;	
        
	}

	public function getProductCollection_version_1() // getReviewsCollection()
	{
		//Cach cu
		//	rs.rating_summary
		//r.created_at
		//		$listLimit  = intval($this->getData('limit_count'));
		//		$sortBy		= 'r.created_at';
		//		$reviewTable 	= Mage::getSingleton('core/resource')->getTableName('review');
		//		$rdetailTable	= Mage::getSingleton('core/resource')->getTableName('review_detail');
		//		$rsummTable		= Mage::getSingleton('core/resource')->getTableName('review_entity_summary');
		//		$storeId 		= Mage::app()->getStore()->getStoreId();
		//		$dir 		= "DESC";
		//		$write 		= Mage::getSingleton('core/resource')->getConnection('core_write');
		//		$result 	= $write->query("select r.review_id, r.created_at, r.entity_pk_value, rd.title, rd.detail, rd.nickname, rs.rating_summary from ".$reviewTable." r, ".$rdetailTable." rd, ".$rsummTable." rs
		//						where r.entity_pk_value = rs.entity_pk_value and r.review_id = rd.review_id and r.status_id=1 and rs.store_id=$storeId
		//						order by $sortBy $dir
		//						limit $listLimit");
		//
		//		return $result;



		//Cach moi
		$result = Mage::getModel('review/review')->getCollection()
		->addStoreFilter(Mage::app()->getStore()->getId())
		->addStatusFilter(Mage_Review_Model_Review::STATUS_APPROVED)
		//continue here           // ->addEntityFilter('entity_code', array('like' => 'product'))

		//  'status', array('eq' => 1)
		// ->addFieldToFilter('main_table.review_id', array('eq' =>  $_review['review_id']))

		//->setDateOrder()
		//->addRateVotes()
		->setOrder('created_at', 'desc')
		->setPageSize(10)
		->setCurPage(1)
		;
		//continue here         // echo $result->getSelect();die;
		return $result;
	}


	public function getReviewsCollection()//getProductCollection() // getReviewsCollection()
	{
		//Cach cu
		//	rs.rating_summary
		//r.created_at
		//		$listLimit  = intval($this->getData('limit_count'));
		//		$sortBy		= 'r.created_at';
		//		$reviewTable 	= Mage::getSingleton('core/resource')->getTableName('review');
		//		$rdetailTable	= Mage::getSingleton('core/resource')->getTableName('review_detail');
		//		$rsummTable		= Mage::getSingleton('core/resource')->getTableName('review_entity_summary');
		//		$storeId 		= Mage::app()->getStore()->getStoreId();
		//		$dir 		= "DESC";
		//		$write 		= Mage::getSingleton('core/resource')->getConnection('core_write');
		//		$result 	= $write->query("select r.review_id, r.created_at, r.entity_pk_value, rd.title, rd.detail, rd.nickname, rs.rating_summary from ".$reviewTable." r, ".$rdetailTable." rd, ".$rsummTable." rs
		//						where r.entity_pk_value = rs.entity_pk_value and r.review_id = rd.review_id and r.status_id=1 and rs.store_id=$storeId
		//						order by $sortBy $dir
		//						limit $listLimit");
		//
		//		return $result;

		//Cach cu ho tro search trong cagegory
		/*
		 * SELECT  `main_table` . * ,  `detail`.`detail_id` ,  `detail`.`title` ,  `detail`.`detail` ,  `detail`.`nickname` ,  `detail`.`customer_id`
			FROM  `review` AS  `main_table`
			INNER JOIN  `review_detail` AS  `detail` ON main_table.review_id = detail.review_id
			INNER JOIN  `review_store` AS  `store` ON main_table.review_id = store.review_id
			WHERE (
			store.store_id
			IN (
			'1'
			)
			)
			AND (
			main_table.entity_pk_value
			IN (
			'16,17,18,19,20,166'
			)
			)
			LIMIT 0 , 30
			*/

		//Lay ra danh sach Category:
		$products= Mage::getModel('catalog/product')->getCollection()
		->addAttributeToFilter('status', array('neq' => Mage_Catalog_Model_Product_Status::STATUS_DISABLED))
		/*
		 ->joinField(
		 'qty',
		 'cataloginventory/stock_item',
		 'qty',
		 'product_id=entity_id',
		 '{{table}}.stock_id=1',
		 'left'
		 )
		 ->addAttributeToFilter('qty', array('gt' => 0)) Doan nay chi lay ra duoc simple product */
		->addAttributeToFilter('visibility',array("neq"=>1));

		//Sort
		$config2 = $this->getData('order_by');
		if(isset($config2))
		{
			$orders = explode(' ',$config2);
		}

		//Filter by categories
		$config1 = $this->getData('new_category');
		if($config1)
		{
			$result = array();
			$condition_cat = array();
			$alias = 'cat_index';
			$categoryCondition = $products->getConnection()->quoteInto(
			$alias.'.product_id=e.entity_id AND '.$alias.'.store_id=? AND ',
			Mage::app()->getStore()->getId()
			);
			$categoryCondition.= $alias.'.category_id IN ('.$config1.')';
			$products->getSelect()->joinInner(
			array($alias => $products->getTable('catalog/category_product_index')),
			$categoryCondition,
			array()
			);
			$products->_categoryIndexJoined = true;
			//$products->addAttributeToSelect('*');
			$products->distinct(true);
		}
		$arr_product_ids = null;
		foreach ($products as $_product) //loop for getting products
		{
			$arr_product_ids  []= $_product->getId();
		}

		$str_product_ids = implode($arr_product_ids,',');
		$limit = $this->getData('limit_count');
		$start_page =1;

		//Cach moi
		$result = Mage::getModel('review/review')->getCollection()
		->addStoreFilter(Mage::app()->getStore()->getId())
		->addStatusFilter(Mage_Review_Model_Review::STATUS_APPROVED)
		//continue here           // ->addEntityFilter('entity_code', array('like' => 'product'))

		//  'status', array('eq' => 1)
		->addFieldToFilter('main_table.entity_pk_value', array('in' => $str_product_ids )) //loc review trong category

		//->setDateOrder()
		//->addRateVotes()
		->setOrder('created_at', 'desc')
		->setPageSize($limit)
		->setCurPage($start_page)
		;
		//echo $result->getSelect();die;
		//continue here         // echo $result->getSelect();die;
		return $result;
	}

	public function getProduct_Review_Collection() // getReviewsCollection()
	{
		//Cach cu
		//	rs.rating_summary
		//r.created_at
		//		$listLimit  = intval($this->getData('limit_count'));
		//		$sortBy		= 'r.created_at';
		//		$reviewTable 	= Mage::getSingleton('core/resource')->getTableName('review');
		//		$rdetailTable	= Mage::getSingleton('core/resource')->getTableName('review_detail');
		//		$rsummTable		= Mage::getSingleton('core/resource')->getTableName('review_entity_summary');
		//		$storeId 		= Mage::app()->getStore()->getStoreId();
		//		$dir 		= "DESC";
		//		$write 		= Mage::getSingleton('core/resource')->getConnection('core_write');
		//		$result 	= $write->query("select r.review_id, r.created_at, r.entity_pk_value, rd.title, rd.detail, rd.nickname, rs.rating_summary from ".$reviewTable." r, ".$rdetailTable." rd, ".$rsummTable." rs
		//						where r.entity_pk_value = rs.entity_pk_value and r.review_id = rd.review_id and r.status_id=1 and rs.store_id=$storeId
		//						order by $sortBy $dir
		//						limit $listLimit");
		//
		//		return $result;

		//Cach cu ho tro search trong cagegory
		/*
		 * SELECT  `main_table` . * ,  `detail`.`detail_id` ,  `detail`.`title` ,  `detail`.`detail` ,  `detail`.`nickname` ,  `detail`.`customer_id`
			FROM  `review` AS  `main_table`
			INNER JOIN  `review_detail` AS  `detail` ON main_table.review_id = detail.review_id
			INNER JOIN  `review_store` AS  `store` ON main_table.review_id = store.review_id
			WHERE (
			store.store_id
			IN (
			'1'
			)
			)
			AND (
			main_table.entity_pk_value
			IN (
			'16,17,18,19,20,166'
			)
			)
			LIMIT 0 , 30
			*/

		//Lay ra danh sach Category:
		$products= Mage::getModel('catalog/product')->getCollection()
		->addAttributeToFilter('status', array('neq' => Mage_Catalog_Model_Product_Status::STATUS_DISABLED))
		/*
		 ->joinField(
		 'qty',
		 'cataloginventory/stock_item',
		 'qty',
		 'product_id=entity_id',
		 '{{table}}.stock_id=1',
		 'left'
		 )
		 ->addAttributeToFilter('qty', array('gt' => 0)) Doan nay chi lay ra duoc simple product */
		->addAttributeToFilter('visibility',array("neq"=>1));

		//Sort
		$config2 = $this->getData('order_by');
		if(isset($config2))
		{
			$orders = explode(' ',$config2);
		}

		//Filter by categories
		$config1 = $this->getData('new_category');
		if($config1)
		{
			$result = array();
			$condition_cat = array();
			$alias = 'cat_index';
			$categoryCondition = $products->getConnection()->quoteInto(
			$alias.'.product_id=e.entity_id AND '.$alias.'.store_id=? AND ',
			Mage::app()->getStore()->getId()
			);
			$categoryCondition.= $alias.'.category_id IN ('.$config1.')';
			$products->getSelect()->joinInner(
			array($alias => $products->getTable('catalog/category_product_index')),
			$categoryCondition,
			array()
			);
			$products->_categoryIndexJoined = true;
			//$products->addAttributeToSelect('*');
			$products->distinct(true);
		}
		$arr_product_ids = null;
		foreach ($products as $_product) //loop for getting products
		{
			$arr_product_ids  []= $_product->getId();
		}

		$str_product_ids = implode($arr_product_ids,',');
		$limit = $this->getData('limit_count');
		$start_page =1;

		//Cach moi
		$result = Mage::getModel('review/review')->getCollection()
		->addStoreFilter(Mage::app()->getStore()->getId())
		->addStatusFilter(Mage_Review_Model_Review::STATUS_APPROVED)
		//continue here           // ->addEntityFilter('entity_code', array('like' => 'product'))

		//  'status', array('eq' => 1)
		->addFieldToFilter('main_table.entity_pk_value', array('in' => $str_product_ids )) //loc review trong category

		//->setDateOrder()
		//->addRateVotes()
		->setOrder('created_at', 'desc')
		->setPageSize($limit)
		->setCurPage($start_page)
		;
		//echo $result->getSelect();die;
		//continue here         // echo $result->getSelect();die;
		return $result;
	}

	//0. Tham khao code

	//	function getReviews() {
	//		$reviews = Mage::getModel('review/review')->getResourceCollection();
	//		$reviews->addStoreFilter( Mage::app()->getStore()->getId() )
	//		->addStatusFilter( Mage_Review_Model_Review::STATUS_APPROVED )
	//		->setDateOrder()
	//		->addRateVotes()
	//		->load();
	//		return $reviews;
	//	}



	//1. Load data by using query.
	public function getReviewsCollection_By_Querry() // getReviewsCollection()
	{
		//rs.rating_summary
		$listLimit  = intval($this->getData('limit_count'));
		$sortBy		= 'r.created_at';
		$reviewTable 	= Mage::getSingleton('core/resource')->getTableName('review');
		$rdetailTable	= Mage::getSingleton('core/resource')->getTableName('review_detail');
		$rsummTable		= Mage::getSingleton('core/resource')->getTableName('review_entity_summary');
		$storeId 		= Mage::app()->getStore()->getStoreId();
		$dir 		= "DESC";
		$write 		= Mage::getSingleton('core/resource')->getConnection('core_write');

		$str_query = "select r.review_id, r.created_at, r.entity_pk_value, rd.title, rd.detail, rd.nickname, rs.rating_summary from ".$reviewTable." r, ".$rdetailTable." rd, ".$rsummTable." rs
						where r.entity_pk_value = rs.entity_pk_value and r.review_id = rd.review_id and r.status_id=".Mage_Review_Model_Review::STATUS_APPROVED." and rs.store_id=$storeId
						order by $sortBy $dir
						limit $listLimit";
		$result 	= $write->query($str_query);

		//echo count($result);die;
		//echo $str_query;die;
		return $result;

	}

	//2. Load data by using query. Filter by categories

	public function getReviewsCollection_By_Querry_Filter_By_Categories() // getReviewsCollection()
	{

		//Get Categories:
		$products= Mage::getModel('catalog/product')->getCollection()
		->addAttributeToFilter('status', array('neq' => Mage_Catalog_Model_Product_Status::STATUS_DISABLED))
		/*
		 ->joinField(
		 'qty',
		 'cataloginventory/stock_item',
		 'qty',
		 'product_id=entity_id',
		 '{{table}}.stock_id=1',
		 'left'
		 )
		 ->addAttributeToFilter('qty', array('gt' => 0)) Doan nay chi lay ra duoc simple product */
		->addAttributeToFilter('visibility',array("neq"=>Mage_Catalog_Model_Product_Visibility::VISIBILITY_NOT_VISIBLE));

		//Filter by categories
		$config1 = $this->getData('new_category');
		if($config1)
		{
			$result = array();
			$condition_cat = array();
			$alias = 'cat_index';
			$categoryCondition = $products->getConnection()->quoteInto(
			$alias.'.product_id=e.entity_id AND '.$alias.'.store_id=? AND ',
			Mage::app()->getStore()->getId()
			);
			$categoryCondition.= $alias.'.category_id IN ('.$config1.')';
			$products->getSelect()->joinInner(
			array($alias => $products->getTable('catalog/category_product_index')),
			$categoryCondition,
			array()
			);
			$products->_categoryIndexJoined = true;
			//$products->addAttributeToSelect('*');
			$products->distinct(true);
		}
		$arr_product_ids = null;
		foreach ($products as $_product) //loop for getting products
		{
			$arr_product_ids  []= $_product->getId();
		}

		$str_product_ids = implode($arr_product_ids,',');


		//rs.rating_summary
		$listLimit  = intval($this->getData('limit_count'));
		$sortBy		= 'main_table.created_at';
		$reviewTable 	= Mage::getSingleton('core/resource')->getTableName('review');
		$rdetailTable	= Mage::getSingleton('core/resource')->getTableName('review_detail');
		$rsummTable		= Mage::getSingleton('core/resource')->getTableName('review_entity_summary');
		$rstoreTable 	= Mage::getSingleton('core/resource')->getTableName('review_store');

		$storeId 		= Mage::app()->getStore()->getStoreId();
		$dir 		= "DESC";
		$write 		= Mage::getSingleton('core/resource')->getConnection('core_write');
		$result 	= $write->query("
		
			SELECT  `main_table` . * ,  `detail`.`detail_id` ,  `detail`.`title` ,  `detail`.`detail` ,  `detail`.`nickname` ,  `detail`.`customer_id`
			FROM ".$reviewTable ." AS  `main_table`
			INNER JOIN  ".$rdetailTable." AS  `detail` ON main_table.review_id = detail.review_id
			INNER JOIN  ".$rstoreTable." AS  `store` ON main_table.review_id = store.review_id
			WHERE (
			store.store_id
			IN (".
		$storeId
		.")
			)
			AND (
			main_table.entity_pk_value
			IN (
			'" .$str_product_ids
		."')
			and (main_table.status_id=".Mage_Review_Model_Review::STATUS_APPROVED.") and (store.store_id=$storeId)
			)
			order by $sortBy $dir
			LIMIT 0 , ".$listLimit."				
		");
			
		return $result;

	}

//3. Load data by using collection.
	public function getReviewsCollection_By_Collection_Show() // getReviewsCollection()
	{

		$limit = $this->getData('limit_count');
		$start_page =1;
			
		$result = Mage::getModel('review/review')->getCollection()
		->addStoreFilter(Mage::app()->getStore()->getId())
		->addStatusFilter(Mage_Review_Model_Review::STATUS_APPROVED)
		//continue here           // ->addEntityFilter('entity_code', array('like' => 'product'))
		//->addFieldToFilter('main_table.entity_pk_value', array('in' => $str_product_ids )) //loc review trong category
		//->setDateOrder()
		//->addRateVotes()
		->setOrder('created_at', 'desc')
		
		//Doan nay moi comit, de ho tro product collection
		->setPageSize($limit)
		->setCurPage($start_page)
		;
		return $result;

	}
	//3. Load data by using collection.
	public function getReviewsCollection_By_Collection() // getReviewsCollection()
	{

		$limit = $this->getData('limit_count');
		$start_page =1;
			
		$result = Mage::getModel('review/review')->getCollection()
		->addStoreFilter(Mage::app()->getStore()->getId())
		->addStatusFilter(Mage_Review_Model_Review::STATUS_APPROVED)
		//continue here           // ->addEntityFilter('entity_code', array('like' => 'product'))
		//->addFieldToFilter('main_table.entity_pk_value', array('in' => $str_product_ids )) //loc review trong category
		//->setDateOrder()
		//->addRateVotes()
		->setOrder('created_at', 'desc')
		
		//Doan nay moi comit, de ho tro product collection
		//->setPageSize($limit)
		//->setCurPage($start_page)
		;
		return $result;

	}
	//4. Load data by using collection. Filter by categories
	public function getReviewsCollection_By_Collection_Filter_By_Categories() // getReviewsCollection()
	{
		//Get Categories:
		$products= Mage::getModel('catalog/product')->getCollection()
		->addAttributeToFilter('status', array('neq' => Mage_Catalog_Model_Product_Status::STATUS_DISABLED))
		/*
		 ->joinField(
		 'qty',
		 'cataloginventory/stock_item',
		 'qty',
		 'product_id=entity_id',
		 '{{table}}.stock_id=1',
		 'left'
		 )
		 ->addAttributeToFilter('qty', array('gt' => 0)) Doan nay chi lay ra duoc simple product */
		->addAttributeToFilter('visibility',array("neq"=>Mage_Catalog_Model_Product_Visibility::VISIBILITY_NOT_VISIBLE));

		//Filter by categories
		$config1 = $this->getData('new_category');
		if($config1)
		{
			$result = array();
			$condition_cat = array();
			$alias = 'cat_index';
			$categoryCondition = $products->getConnection()->quoteInto(
			$alias.'.product_id=e.entity_id AND '.$alias.'.store_id=? AND ',
			Mage::app()->getStore()->getId()
			);
			$categoryCondition.= $alias.'.category_id IN ('.$config1.')';
			$products->getSelect()->joinInner(
			array($alias => $products->getTable('catalog/category_product_index')),
			$categoryCondition,
			array()
			);
			$products->_categoryIndexJoined = true;
			//$products->addAttributeToSelect('*');
			$products->distinct(true);
		}
		$arr_product_ids = null;
		foreach ($products as $_product) //loop for getting products
		{
			$arr_product_ids  []= $_product->getId();
		}


		$str_product_ids = implode($arr_product_ids,',');
		$limit = $this->getData('limit_count');
		//$limit =1;
		//$start_page =1;

		//Cach moi
		$result = Mage::getModel('review/review')->getCollection()
		//->addStoreFilter(Mage::app()->getStore()->getId())
		->addStatusFilter(Mage_Review_Model_Review::STATUS_APPROVED)
//check thu cho nay, tai sao chi show ra 1 san pham		//->addFieldToFilter('main_table.entity_pk_value', array('in' => $str_product_ids )) //loc review trong category
		->setOrder('created_at', 'desc')
		
		->addFieldToFilter('entity_pk_value', array('in' => $arr_product_ids )) //loc review trong category
		//Doan nay moi comit, de ho tro product collection
		//->setPageSize($limit)
		//->setCurPage($start_page)
		
		//->addAttributeToSelect('main_table.entity_pk_value')
		;
		//->addFieldToFilter('unique_attribute', 'main_table.entity_pk_value');
		//$result->getSelect()->distinct(true);
		//->distinct('main_table.entity_pk_value')
		//$arr1 = array(1,1,3,4,5,6,6,7,7,7,1);
		//print_r(array_unique($arr1)) ;die;
		//echo $result->getSelect(); die;
		//echo count($result);die;
		return $result;
	}
	
//5. Load data by using collection. Filter by categories
	public function getReviewsCollection_By_Collection_Filter_By_Categories_Limit() // Using for template()
	{
		//Get Categories:
		$products= Mage::getModel('catalog/product')->getCollection()
		->addAttributeToFilter('status', array('neq' => Mage_Catalog_Model_Product_Status::STATUS_DISABLED))
		/*
		 ->joinField(
		 'qty',
		 'cataloginventory/stock_item',
		 'qty',
		 'product_id=entity_id',
		 '{{table}}.stock_id=1',
		 'left'
		 )
		 ->addAttributeToFilter('qty', array('gt' => 0)) Doan nay chi lay ra duoc simple product */
		->addAttributeToFilter('visibility',array("neq"=>Mage_Catalog_Model_Product_Visibility::VISIBILITY_NOT_VISIBLE));

		//Filter by categories
		$config1 = $this->getData('new_category');
		if($config1)
		{
			$result = array();
			$condition_cat = array();
			$alias = 'cat_index';
			$categoryCondition = $products->getConnection()->quoteInto(
			$alias.'.product_id=e.entity_id AND '.$alias.'.store_id=? AND ',
			Mage::app()->getStore()->getId()
			);
			$categoryCondition.= $alias.'.category_id IN ('.$config1.')';
			$products->getSelect()->joinInner(
			array($alias => $products->getTable('catalog/category_product_index')),
			$categoryCondition,
			array()
			);
			$products->_categoryIndexJoined = true;
			//$products->addAttributeToSelect('*');
			$products->distinct(true);
		}
		$arr_product_ids = null;
		foreach ($products as $_product) //loop for getting products
		{
			$arr_product_ids  []= $_product->getId();
		}


		$str_product_ids = implode($arr_product_ids,',');
		$limit = $this->getData('limit_count');
		//$limit =1;
		$start_page =1;

		//Cach moi
		$result = Mage::getModel('review/review')->getCollection()
		//->addStoreFilter(Mage::app()->getStore()->getId())
		->addStatusFilter(Mage_Review_Model_Review::STATUS_APPROVED)
		//check thu cho nay, tai sao chi show ra 1 san pham		//->addFieldToFilter('main_table.entity_pk_value', array('in' => $str_product_ids )) //loc review trong category
		->setOrder('created_at', 'desc')
		
		->addFieldToFilter('entity_pk_value', array('in' => $arr_product_ids )) //loc review trong category
		//Doan nay moi comit, de ho tro product collection
		->setPageSize($limit)
		->setCurPage($start_page)
		
		//->addAttributeToSelect('main_table.entity_pk_value')
		;
		//->addFieldToFilter('unique_attribute', 'main_table.entity_pk_value');
		//$result->getSelect()->distinct(true);
		//->distinct('main_table.entity_pk_value')
		//$arr1 = array(1,1,3,4,5,6,6,7,7,7,1);
		//print_r(array_unique($arr1)) ;die;
		//echo $result->getSelect(); die;
		//echo count($result);die;
		return $result;
	}
	
	
}