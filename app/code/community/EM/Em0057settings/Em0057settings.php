<?php
class EM_Em0057settings_Em0057settings
{
	public function get_grid_thumb_width()
	{
		return Mage::getStoreConfig('em0057/image_category/grid_thumb_width');
	}
	public function get_grid_thumb_height()
	{
		return Mage::getStoreConfig('em0057/image_category/grid_thumb_height');
	}

	public function get_listing_thumb_width()
	{
		return Mage::getStoreConfig('em0057/image_category/listing_thumb_width');
	}
	public function get_listing_thumb_height()
	{
		return Mage::getStoreConfig('em0057/image_category/listing_thumb_height');
	}
	
	public function get_featured_cate_width()
	{
		return Mage::getStoreConfig('em0057/image_featured/featured_cate_width');
	}
	public function get_featured_cate_height()
	{
		return Mage::getStoreConfig('em0057/image_featured/featured_cate_height');
	}

	public function get_related_width()
	{
		return Mage::getStoreConfig('em0057/image_related/related_width');
	}
	public function get_related_height()
	{
		return Mage::getStoreConfig('em0057/image_related/related_height');
	}

	public function get_crosssell_width()
	{
		return Mage::getStoreConfig('em0057/image_crossell/crosssell_width');
	}
	public function get_crosssell_height()
	{
		return Mage::getStoreConfig('em0057/image_crossell/crosssell_height');
	}

	public function get_upsell_width()
	{
		return Mage::getStoreConfig('em0057/image_upsell/upsell_width');
	}
	public function get_upsell_height()
	{
		return Mage::getStoreConfig('em0057/image_upsell/upsell_height');
	}

	public function get_widget_width()
	{
		return Mage::getStoreConfig('em0057/image_widget/widget_width');
	}
	public function get_widget_height()
	{
		return Mage::getStoreConfig('em0057/image_widget/widget_height');
	}
	
	public function get_column_count(){
		$nameTheme = 'em0057';
		$curTemplate = $this->getCurrentTemplate();
		$availableColumnCount = array(
			'empty'				=>	5,
			'1column'		=>	Mage::getStoreConfig($nameTheme.'/column_count/cat_one_column'),
			'2columns-left'	=>	Mage::getStoreConfig($nameTheme.'/column_count/cat_two_columns'),
			'2columns-right'	=>	Mage::getStoreConfig($nameTheme.'/column_count/cat_two_columns'),
			'3columns'		=>	Mage::getStoreConfig($nameTheme.'/column_count/cat_three_columns')
		);	
		return $availableColumnCount[$curTemplate];
	}
	
	public function getCurrentTemplate(){
		return str_replace(array('page/','.phtml'),'',Mage::app()->getLayout()->getBlock('root')->getTemplate());
	}
	
}