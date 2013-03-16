<?php

/**
 * Magento
 *
 *  
 *
 * @package     EM_Slideshowwidget
 * @copyright   Copyright (c) 2009 Quick Solution LT
 * 
 */
class EM_Slideshowwidget_Block_Create extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface {

    public function _construct() {
        parent::_construct();

        // default template location
    }
	
    protected function _toHtml() {
		$helper = Mage::helper('slideshowwidget');
		$text1 = $helper->html_decode(trim($this->getData('text1')));
		$text2 = $helper->html_decode(trim($this->getData('text2')));
		$text3 = $helper->html_decode(trim($this->getData('text3')));
		$text4 = $helper->html_decode(trim($this->getData('text4')));
		$text5 = $helper->html_decode(trim($this->getData('text5')));
		$text6 = $helper->html_decode(trim($this->getData('text6')));
		$text7 = $helper->html_decode(trim($this->getData('text7')));
		$text8 = $helper->html_decode(trim($this->getData('text8')));
		$text9 = $helper->html_decode(trim($this->getData('text9')));
		$url1 = $helper->html_decode(trim($this->getData('url1')));
		$url2 = $helper->html_decode(trim($this->getData('url2')));
		$url3 = $helper->html_decode(trim($this->getData('url3')));
		$url4 = $helper->html_decode(trim($this->getData('url4')));
		$url5 = $helper->html_decode(trim($this->getData('url5')));
		$url6 = $helper->html_decode(trim($this->getData('url6')));
		$url7 = $helper->html_decode(trim($this->getData('url7')));
		$url8 = $helper->html_decode(trim($this->getData('url8')));
		$url9 = $helper->html_decode(trim($this->getData('url9')));
		
		$image1 = $this->_urlimage(trim($this->getData('image1')));
		$image2 = $this->_urlimage(trim($this->getData('image2')));
		$image3 = $this->_urlimage(trim($this->getData('image3')));
		$image4 = $this->_urlimage(trim($this->getData('image4')));
		$image5 = $this->_urlimage(trim($this->getData('image5')));
		$image6 = $this->_urlimage(trim($this->getData('image6')));
		$image7 = $this->_urlimage(trim($this->getData('image7')));
		$image8 = $this->_urlimage(trim($this->getData('image8')));
		$image9 = $this->_urlimage(trim($this->getData('image9')));
        $width = trim($this->getData('width'));
        $height = trim($this->getData('height'));
        $delay = trim($this->getData('delay'));
        $displaybutton = trim($this->getData('displaybutton'));
		$autostart = trim($this->getData('autostart'));
		$transition = trim($this->getData('transition'));
		$transitionspeed = trim($this->getData('transitionspeed'));
		$autocenter = trim($this->getData('autocenter'));
		$cpanelalign = trim($this->getData('cpanelalign'));
		$cpanelposition = trim($this->getData('cpanelposition'));
		$timeralign = trim($this->getData('timeralign'));
		$displaytimer = trim($this->getData('displaytimer'));
		$mouseoverpause = trim($this->getData('mouseoverpause'));
		$cpanelmouseover = trim($this->getData('cpanelmouseover'));
		$textmouseover = trim($this->getData('textmouseover'));
		$texteffect = trim($this->getData('texteffect'));
		$textsync = trim($this->getData('textsync'));
		$shuffle = trim($this->getData('shuffle'));
        
		if ($width == "") {
			$width = "825";
		}
		if ($height == "") {
			$height = "300";
		}
		if ($delay == "") {
			$delay = "5000";
		}
		if ($transitionspeed == "") {
			$delay = "800";
		}
				
        $this->setTemplate('slideshowwidget/slideshow.phtml');
		$this->assign('text1', $text1);
		$this->assign('text2', $text2);
		$this->assign('text3', $text3);
		$this->assign('text4', $text4);
		$this->assign('text5', $text5);
		$this->assign('text6', $text6);
 		$this->assign('text7', $text7);
		$this->assign('text8', $text8);
		$this->assign('text9', $text9);
		$this->assign('url1', $url1);
		$this->assign('url2', $url2);
		$this->assign('url3', $url3);
		$this->assign('url4', $url4);
		$this->assign('url5', $url5);
		$this->assign('url6', $url6);
 		$this->assign('url7', $url7);
		$this->assign('url8', $url8);
		$this->assign('url9', $url9);
        $this->assign('image1', $image1);
		$this->assign('image2', $image2);
		$this->assign('image3', $image3);
		$this->assign('image4', $image4);
		$this->assign('image5', $image5);
		$this->assign('image6', $image6);
 		$this->assign('image7', $image7);
		$this->assign('image8', $image8);
		$this->assign('image9', $image9);
        $this->assign('width', $width);
        $this->assign('height', $height);
        $this->assign('delay', $delay);
        $this->assign('displaybutton', $displaybutton);
		$this->assign('autostart', $autostart);
		$this->assign('transition', $transition);
		$this->assign('transitionspeed', $transitionspeed);
		$this->assign('autocenter', $autocenter);
		$this->assign('cpanelalign', $cpanelalign);
		$this->assign('cpanelposition', $cpanelposition);
		$this->assign('timeralign', $timeralign);
		$this->assign('displaytimer', $displaytimer);
		$this->assign('mouseoverpause', $mouseoverpause);
		$this->assign('cpanelmouseover', $cpanelmouseover);
		$this->assign('textmouseover', $textmouseover);
		$this->assign('texteffect', $texteffect);
		$this->assign('textsync', $textsync);
		$this->assign('shuffle', $shuffle);
        
        return parent::_toHtml();
    }
	protected function _urlimage($name){
		if($name != "")
			return Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA)."slideshow/".$name;
		else
			return $name;
	}
	
}
