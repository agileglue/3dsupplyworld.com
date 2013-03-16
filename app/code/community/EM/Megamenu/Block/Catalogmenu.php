<?php
class EM_Megamenu_Block_Catalogmenu extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface
{
	/*public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getCatalogmenu()     
     { 
        if (!$this->hasData('catalogmenu')) {
            $this->setData('catalogmenu', Mage::registry('catalogmenu'));
        }
        return $this->getData('catalogmenu');
        
    }*/
    
    public function getBlockContent()
    {
		$ulIdHtml	=	'';
        $ulClass = $this->getData('ul_class');
        $levelClass = $this->getData('level_class');
		$type = $this->getData('set_layout_menu');
		$max_rows = $this->getData('max_row_per_column');
        if(!$levelClass)
            $levelClass = 0;
        $ulId = $this->getData('ul_id');
        if($ulId)
        {
            $ulIdHtml = "id='$ulId'";
        }
        $categoryId = $this->getData('category');
        
        if(!$categoryId)
            $categoryId = Mage::app()->getStore()->getRootCategoryId();
		
		$noneUlRoot	= $this->getData('none_ul_root');
		if(!$noneUlRoot)
			$noneUlRoot = "0";
		$noneFirstLi = $this->getData('none_li_first_class');
		if(!$noneFirstLi)
			$noneFirstLi = "0";
		$noneLastLi = $this->getData('none_li_last_class');
		if(!$noneLastLi)
			$noneLastLi = "0";	
        Mage::register('category_id_widget', $categoryId);
        Mage::register('none_li_first_class',$noneFirstLi);
		Mage::register('none_li_last_class',$noneLastLi);
		Mage::register('level_class', $levelClass);
		Mage::register('set_layout_menu', $type);
		Mage::register('max_row_per_column', $max_rows);
        //Add Categories to Menu
        $navigation = new EM_Megamenu_Block_Catalognavigation();
		
		if($noneUlRoot == "0")
		{
			$first = "<ul class='$ulClass' $ulIdHtml >";
			$last = "</ul>";
		}
		else
		{
			$first = "";
			$last = "";
		}
        $html = trim($navigation->renderCategoriesMenuHtml($levelClass,"level-top"));
		
		if($type==1)
		{
		$arr=explode("<k>",$html);
		
		 $my_html="";
		for($i=0;$i<(count($arr)-1);$i++){
				if($max_rows != 0){
					if($i%$max_rows==0)
						$my_html.='<div class="col_1"><ul>';
					$my_html.=$arr[$i+1];
					if(($i+1)%$max_rows==0 || ($i+1)==(count($arr)-1))
					 $my_html.='</ul></div>';
				}
				else{
					$my_html.='<div class="col_1"><ul>';					
					$my_html.=$arr[$i+1];				
					$my_html.='</ul></div>';
				}
			}
			$html=$my_html;
			
		}
		$arrmain=array();
		if($type ==4)
		{
			
			$arrmain=explode("<n>",$html);	
			$my_html="";
			for($i=1;$i<(count($arrmain)+1);$i++){
				$countlisub = count(explode("<k>",$arrmain[$i]));
				$arrsub = explode("<k>",$arrmain[$i]);
				$countsub = count(explode("<f>",$arrsub[1]));
				$arr=explode("<f>",$arrsub[1]);
				
				$divfirst="";
				if(($countsub/$max_rows)>3)
				{
					$divfirst='<div class="dropdown_3columns">';
				}
				else
				{
					$divfirst='<div class="dropdown_'.ceil($countsub/$max_rows).'columns">';
				}
				$my_html.=$arrsub[0];
				if($countsub>1)
				{
					$my_html.=$divfirst;
					for($j=0;$j<$countsub;$j++){
							if($j%$max_rows==0)
							{
								$my_html.='<div class="col_1"><ul>';
							}
							$my_html.=$arr[$j+1];
							if(($j+1)%$max_rows==0 ||$j==(count($arr)-1))
							{
								$my_html.='</ul></div>';
							}
						}	
						$my_html.='</div>';
				}
					
			}
			$html=$my_html;
		}
		$ulfirst="";
		$ullast="";
		if($type==3)
		{
			$ulfirst='<div class="col_1"><ul class="levels">';
			$ullast='</ul></div>';
		}
        Mage::unregister('category_id_widget');
		Mage::unregister('none_li_first_class');
		Mage::unregister('none_li_last_class');
		Mage::unregister('level_class');
		Mage::unregister('set_layout_menu');
		Mage::unregister('max_row_per_column');
        return $first.$ulfirst.$html.$ullast.$last;
    }
}
