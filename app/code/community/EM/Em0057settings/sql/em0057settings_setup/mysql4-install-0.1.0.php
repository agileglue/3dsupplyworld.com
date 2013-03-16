<?php

$installer = $this;

$installer->startSetup();

/* Generate em_framework sample data layout */
$model = Mage::getModel('themeframework/area');
	
$data = array(
	'package_theme'	=>	'default/em0057',
	'layout'	=>	'1column',	
	'content_decode'	=> unserialize(<<<EOB
a:5:{i:0;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:2:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:16:"container_header";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"header";}}i:1;s:5:"clear";}}i:1;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:85:"<div class="slide_wrapper">	<div class="home_main_slideshow">{{content}}</div></div>	";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:14:"main_slideshow";}}i:2;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:17:{i:0;a:11:{s:6:"column";s:2:"10";s:4:"push";s:2:"14";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:8:"bg_white";s:10:"inner_html";s:45:"<div class="bg_white_inner">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area1";}}i:1;s:5:"clear";i:2;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:11:"round_black";s:10:"inner_html";s:48:"<div class="round_black_inner">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area2";}}i:3;s:5:"clear";i:4;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:11:"breadcrumbs";}}i:5;s:5:"clear";i:6;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:39:"<div class="col-main">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:2:{i:0;s:15:"global_messages";i:1;s:7:"content";}}i:7;s:5:"clear";i:8;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:13:"homepage_deal";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area3";}}i:9;s:5:"clear";i:10;a:11:{s:6:"column";s:2:"14";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area4";}}i:11;a:11:{s:6:"column";s:2:"10";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area5";}}i:12;s:5:"clear";i:13;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area6";}}i:14;s:5:"clear";i:15;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area7";}}i:16;s:5:"clear";}}i:3;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:48:"<div class="wrapper_bg_footer">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:5:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:8:"bg_black";s:10:"inner_html";s:45:"<div class="bg_black_inner">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area8";}}i:1;s:5:"clear";i:2;a:11:{s:6:"column";s:2:"16";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area9";}}i:3;a:11:{s:6:"column";s:1:"8";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:14:"gallery_footer";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"area10";}}i:4;s:5:"clear";}}i:4;a:6:{s:10:"custom_css";s:10:"footer_end";s:10:"inner_html";s:0:"";s:10:"outer_html";s:55:"<div class="wrapper_bg_footer_bottom">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:5:{i:0;a:11:{s:6:"column";s:2:"16";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"area11";}}i:1;a:11:{s:6:"column";s:1:"8";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"area12";}}i:2;s:5:"clear";i:3;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:18:"container_body_end";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:15:"before_body_end";}}i:4;s:5:"clear";}}}
EOB
),
	'is_active' => 1
);
$model->setData($data)->setStores(array(0))->save();

$data = array(
	'package_theme'	=>	'default/em0057',
	'layout'	=>	'2columns-right',	
	'content_decode'	=> unserialize(<<<EOB
a:5:{i:0;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:1:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:16:"container_header";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"header";}}}}i:1;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:85:"<div class="slide_wrapper">	<div class="home_main_slideshow">{{content}}</div></div>	";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:14:"main_slideshow";}}i:2;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:18:{i:0;a:11:{s:6:"column";s:2:"10";s:4:"push";s:2:"14";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:8:"bg_white";s:10:"inner_html";s:45:"<div class="bg_white_inner">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area1";}}i:1;s:5:"clear";i:2;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:11:"round_black";s:10:"inner_html";s:48:"<div class="round_black_inner">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area2";}}i:3;s:5:"clear";i:4;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:11:"breadcrumbs";}}i:5;s:5:"clear";i:6;a:11:{s:6:"column";s:2:"18";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:39:"<div class="col-main">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:2:{i:0;s:15:"global_messages";i:1;s:7:"content";}}i:7;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:48:"<div class="col-right sidebar">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"right";}}i:8;s:5:"clear";i:9;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:13:"homepage_deal";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area3";}}i:10;s:5:"clear";i:11;a:11:{s:6:"column";s:2:"14";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area4";}}i:12;a:11:{s:6:"column";s:2:"10";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area5";}}i:13;s:5:"clear";i:14;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area6";}}i:15;s:5:"clear";i:16;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area7";}}i:17;s:5:"clear";}}i:3;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:48:"<div class="wrapper_bg_footer">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:5:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:8:"bg_black";s:10:"inner_html";s:45:"<div class="bg_black_inner">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area8";}}i:1;s:5:"clear";i:2;a:11:{s:6:"column";s:2:"16";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area9";}}i:3;a:11:{s:6:"column";s:1:"8";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:14:"gallery_footer";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"area10";}}i:4;s:5:"clear";}}i:4;a:6:{s:10:"custom_css";s:10:"footer_end";s:10:"inner_html";s:0:"";s:10:"outer_html";s:55:"<div class="wrapper_bg_footer_bottom">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:5:{i:0;a:11:{s:6:"column";s:2:"16";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"area11";}}i:1;a:11:{s:6:"column";s:1:"8";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"area12";}}i:2;s:5:"clear";i:3;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:18:"container_body_end";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:15:"before_body_end";}}i:4;s:5:"clear";}}}
EOB
),
	'is_active' => 1
);
$model->setData($data)->setStores(array(0))->save();

$data = array(
	'package_theme'	=>	'default/em0057',
	'layout'	=>	'2columns-left',	
	'content_decode'	=> unserialize(<<<EOB
a:5:{i:0;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:1:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:16:"container_header";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"header";}}}}i:1;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:85:"<div class="slide_wrapper">	<div class="home_main_slideshow">{{content}}</div></div>	";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:14:"main_slideshow";}}i:2;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:18:{i:0;a:11:{s:6:"column";s:2:"10";s:4:"push";s:2:"14";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:8:"bg_white";s:10:"inner_html";s:45:"<div class="bg_white_inner">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area1";}}i:1;s:5:"clear";i:2;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:11:"round_black";s:10:"inner_html";s:48:"<div class="round_black_inner">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area2";}}i:3;s:5:"clear";i:4;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:11:"breadcrumbs";}}i:5;s:5:"clear";i:6;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:47:"<div class="col-left sidebar">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:4:"left";}}i:7;a:11:{s:6:"column";s:2:"18";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:39:"<div class="col-main">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:2:{i:0;s:15:"global_messages";i:1;s:7:"content";}}i:8;s:5:"clear";i:9;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:13:"homepage_deal";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area3";}}i:10;s:5:"clear";i:11;a:11:{s:6:"column";s:2:"14";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area4";}}i:12;a:11:{s:6:"column";s:2:"10";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area5";}}i:13;s:5:"clear";i:14;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area6";}}i:15;s:5:"clear";i:16;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area7";}}i:17;s:5:"clear";}}i:3;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:48:"<div class="wrapper_bg_footer">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:5:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:8:"bg_black";s:10:"inner_html";s:45:"<div class="bg_black_inner">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area8";}}i:1;s:5:"clear";i:2;a:11:{s:6:"column";s:2:"16";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area9";}}i:3;a:11:{s:6:"column";s:1:"8";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:14:"gallery_footer";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"area10";}}i:4;s:5:"clear";}}i:4;a:6:{s:10:"custom_css";s:10:"footer_end";s:10:"inner_html";s:0:"";s:10:"outer_html";s:55:"<div class="wrapper_bg_footer_bottom">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:5:{i:0;a:11:{s:6:"column";s:2:"16";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"area11";}}i:1;a:11:{s:6:"column";s:1:"8";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"area12";}}i:2;s:5:"clear";i:3;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:18:"container_body_end";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:15:"before_body_end";}}i:4;s:5:"clear";}}}
EOB
),
	'is_active' => 1
);
$model->setData($data)->setStores(array(0))->save();

$data = array(
	'package_theme'	=>	'default/em0057',
	'layout'	=>	'3columns',	
	'content_decode'	=> unserialize(<<<EOB
a:5:{i:0;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:1:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:16:"container_header";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"header";}}}}i:1;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:85:"<div class="slide_wrapper">	<div class="home_main_slideshow">{{content}}</div></div>	";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:14:"main_slideshow";}}i:2;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:19:{i:0;a:11:{s:6:"column";s:2:"10";s:4:"push";s:2:"14";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:8:"bg_white";s:10:"inner_html";s:45:"<div class="bg_white_inner">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area1";}}i:1;s:5:"clear";i:2;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:11:"round_black";s:10:"inner_html";s:48:"<div class="round_black_inner">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area2";}}i:3;s:5:"clear";i:4;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:11:"breadcrumbs";}}i:5;s:5:"clear";i:6;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:47:"<div class="col-left sidebar">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:4:"left";}}i:7;a:11:{s:6:"column";s:2:"12";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:12:"col3-wrapper";s:10:"inner_html";s:39:"<div class="col-main">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:2:{i:0;s:15:"global_messages";i:1;s:7:"content";}}i:8;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:47:"<div class="col-left sidebar">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"right";}}i:9;s:5:"clear";i:10;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:13:"homepage_deal";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area3";}}i:11;s:5:"clear";i:12;a:11:{s:6:"column";s:2:"14";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area4";}}i:13;a:11:{s:6:"column";s:2:"10";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area5";}}i:14;s:5:"clear";i:15;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area6";}}i:16;s:5:"clear";i:17;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area7";}}i:18;s:5:"clear";}}i:3;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:48:"<div class="wrapper_bg_footer">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:5:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:8:"bg_black";s:10:"inner_html";s:45:"<div class="bg_black_inner">{{content}}</div>";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area8";}}i:1;s:5:"clear";i:2;a:11:{s:6:"column";s:2:"16";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"area9";}}i:3;a:11:{s:6:"column";s:1:"8";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:14:"gallery_footer";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"area10";}}i:4;s:5:"clear";}}i:4;a:6:{s:10:"custom_css";s:10:"footer_end";s:10:"inner_html";s:0:"";s:10:"outer_html";s:55:"<div class="wrapper_bg_footer_bottom">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:5:{i:0;a:11:{s:6:"column";s:2:"16";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"area11";}}i:1;a:11:{s:6:"column";s:1:"8";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"area12";}}i:2;s:5:"clear";i:3;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:18:"container_body_end";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:15:"before_body_end";}}i:4;s:5:"clear";}}}
EOB
),
	'is_active' => 1
);
$model->setData($data)->setStores(array(0))->save();

$installer->addAttribute('catalog_product', 'EM_Featured', array(
        'group'             => 'General',
        'type'              => 'int',
        'backend'           => '',
        'frontend'          => '',
        'label'             => 'Featured Product',
        'input'             => 'boolean',
        'class'             => '',
        'source'            => '',
        'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'visible'           => true,
        'required'          => false,
        'user_defined'      => true,
        'default'           => '0',
        'searchable'        => false,
        'filterable'        => false,
        'comparable'        => false,
        'visible_on_front'  => false,
        'unique'            => false,
        'apply_to'          => 'simple,configurable,virtual,bundle,downloadable',
        'is_configurable'   => false
    ));

$installer->addAttribute('catalog_product', 'EM_Deal', array(
        'group'             => 'General',
        'type'              => 'int',
        'backend'           => '',
        'frontend'          => '',
        'label'             => 'Deal Product',
        'input'             => 'boolean',
        'class'             => '',
        'source'            => '',
        'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'visible'           => true,
        'required'          => false,
        'user_defined'      => true,
        'default'           => '0',
        'searchable'        => false,
        'filterable'        => false,
        'comparable'        => false,
        'visible_on_front'  => false,
        'unique'            => false,
        'apply_to'          => 'simple,configurable,virtual,bundle,downloadable',
        'is_configurable'   => false
    ));

$block = Mage::getModel('cms/block');
$page = Mage::getModel('cms/page');
$widgetInstance = Mage::getModel('widget/widget_instance');
//$stores = array_keys(Mage::getSingleton('adminhtml/system_store')->getStoreOptionHash());

$stores = array(0);

// Config perfix for identifier of static block and static page
$prefixBlock = 'em0057_';
$prefixPage = 'em0057_';


####################################################################################################
# INSERT STATIC BLOCKS
####################################################################################################

$dataBlock = array(
	'title' => 'EM0057 Mega Menu',
	'identifier' => $prefixBlock.'megamenu',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<ul class="menu"><!-- BEGIN MENU -->
<li class="first"><a class="drop level-top" href="{{store direct_url='apparel.html'}}"><span>Chair </span></a>
<div class="dropdown_6columns">
<div class="inner"><span class="title">Equipments</span>
<p class="note first">This is an example of a large contaner with 6 columns</p>
<div class="col_6 firstcolumn">
<div class="col_1 firstcolumn"><span class="title_col">LobortisLputate</span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{store direct_url='furniture.html'}}">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='furniture.html'}}">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='apparel.html'}}">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
</ul>
</div>
<div class="col_1"><span class="title_col">Malesuada </span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{config path='web/unsecure/base_url'}}top-part.html">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='furniture.html'}}">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{config path='web/unsecure/base_url'}}wheels.html">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
</ul>
</div>
<div class="col_1"><span class="title_col">Lobortis Vulpu</span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{config path='web/unsecure/base_url'}}replacements.html">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{config path='web/unsecure/base_url'}}accessories.html">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='apparel.html'}}">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
</ul>
</div>
<div class="col_1"><span class="title_col">Vulputate</span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{store direct_url='furniture.html'}}">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='apparel.html'}}">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='apparel.html'}}">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
</ul>
</div>
<div class="col_1"><span class="title_col">Phasellus lec</span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{store direct_url='apparel/shirts.html'}}">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='apparel/shirts.html'}}">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='apparel.html'}}">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
</ul>
</div>
<div class="col_1"><span class="title_col">Malesuada </span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{store direct_url='apparel/shirts.html'}}">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='furniture.html'}}">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='apparel.html'}}">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
</ul>
</div>
</div>
<div class="col_6">
<div class="col_2 firstcolumn">
<p class="note">Here is some contents with side images</p>
<div class="img"><a class="img" href="#"><img src="{{skin url='images/media/menu/img_menu_1.jpg'}}" alt="" /></a></div>
</div>
<div class="col_2">
<p class="first">Aliquam tristique faucibus metus malesuada liberom viverra at. Quisque ornare neque est.</p>
<p>Nam vehicula, dui in ultricies porttitorue non duieget aenean laoreet sapien id urna placerat sollicitudins erat volutpat. Curabitur pretium, nisi vitae pretiumeo volutpat, ligula elit suscipit libero, et fringilla enimnu Etiam sit amet sem nibh, id tincidunt diam.Feugiat ullamcorper venenatis vel, tincidunt sit amet justo.</p>
</div>
<div class="col_2">
<p class="note">This is a blackbox, you can use it to highlight some contens</p>
<p>Curabitur tempus tellus sit amet tristique comlectus nisi commodo libero, id cursus lacus nibh vitae nibh.</p>
<p>Nam vehicula, dui in ultricies porttitorue non duieget aenean laoreet sapien id urna placerat sollicitudins erat volutpat. Curabitur pretium, nisi vitae pretiumeo volutpat, ligula elit suscipit libero, et fringilla enimnu Etiam sit amet sem nibh, id tincidunt diam.Feugiat ullamcorper venenatis vel, tincidunt sit amet justo.</p>
</div>
</div>
</div>
</div>
<!-- End 6 column Item --></li>
<li><a class="drop level-top" href="{{store direct_url='furniture.html'}}"><span>Armchair</span></a><!-- Begin 1 columns Item -->
<div class="dropdown_6columns">
<div class="inner"><span class="title">Performance</span>
<div class="col_6">
<div class="col_2 firstcolumn"><a class="img" href="#"><img src="{{skin url='images/media/menu/logo_menu2.png'}}" alt="" /></a>
<p>Aliquam tristique faucibus metus, nec malesuada bibe libero viverra at. Quisque ornare neque est. Nulla leon sapien, placerat ac fringilla sit amet, sagittisn tincidunt enim malesuada lectus. Sed a orci ligula. Maecetortor urna aliquet dignissim maecenas dolor eros.</p>
<p>Fusce dignissim, justo quis aliquam imperdiet, elit urna porttitor odio, vitae imperdiet justo purus id tellus. Nulla facilisi. Aliquam auctor molestie madictum cidunt rhoncus. Quisque diam sapien, viverra ut tincidunt vitae, tempor ac leo. Donec at pharetra velit. Curabitur porttitor venenatis nisi, sit amet accumsan tellus urna laoreet non. Vestibulum ac tincidunt enim. Nullam leo metus, dictum consectetur pulvinar sed, tincidunt ut urna. Cras vel dui velit, pretium lacinia. Pellentesque massa dolor, fermentum consectetur</p>
</div>
<div class="col_1"><span class="title_col">Sem Eleifend </span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{config path='web/unsecure/base_url'}}wheels.html">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='furniture.html'}}">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='apparel/shirts.html'}}">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
<li class="level1 nav-3-5"><a href="{{store direct_url='apparel/shirts.html'}}">Amet Bibendum </a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='apparel/shirts.html'}}">Tristique Turpis</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='furniture.html'}}">Phasellus leo</a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='furniture.html'}}">Amet Bibendum</a></li>
<li class="level1 nav-3-5"><a href="{{store direct_url='apparel.html'}}">Tristique Turpis</a></li>
</ul>
</div>
<div class="col_1"><span class="title_col">Lobortis Nunc </span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{store direct_url='furniture.html'}}">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='furniture.html'}}">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='apparel.html'}}">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
<li class="level1 nav-3-5"><a href="{{store direct_url='furniture.html'}}">Amet Bibendum </a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='furniture.html'}}">Tristique Turpis</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='furniture.html'}}">Phasellus leo</a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='furniture.html'}}">Amet Bibendum</a></li>
<li class="level1 nav-3-5"><a href="{{store direct_url='apparel.html'}}">Tristique Turpis</a></li>
</ul>
</div>
<div class="col_1"><span class="title_col">Sem Eleifend </span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{store direct_url='furniture.html'}}">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='furniture.html'}}">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='apparel.html'}}">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
<li class="level1 nav-3-5"><a href="{{store direct_url='apparel/shirts.html'}}">Amet Bibendum </a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='electronics/computers.html'}}">Tristique Turpis</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='furniture.html'}}">Phasellus leo</a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='furniture.html'}}">Amet Bibendum</a></li>
<li class="level1 nav-3-5"><a href="{{store direct_url='apparel.html'}}">Tristique Turpis</a></li>
</ul>
</div>
<div class="col_1 most_popular"><span class="title_col"> NEW ARRIVAL </span>
<div class="product">{{widget type="catalog/product_widget_new" products_count="1" template="catalog/product/widget/new/content/menu_new_arrival.phtml"}}</div>
</div>
</div>
</div>
</div>
<!-- End 3 columns container --></li>
<li><a class="drop level-top" href="{{store direct_url='electronics/computers.html'}}"><span>Table &amp; Desk</span></a>
<div class="dropdown_6columns">
<div class="inner"><span class="title">Brakes</span>
<div class="col_6 firstcolumn">
<div class="col_1 no-icon first"><a href="#"><img title="Ikea" src="{{skin url='images/media/menu/1.png'}}" alt="Ikea" /></a></div>
<div class="col_1 no-icon"><a href="#"><img title="Furniture Brands" src="{{skin url='images/media/menu/2.png'}}" alt="Furniture Brands" /></a></div>
<div class="col_1 no-icon"><a href="#"><img title="Casabella" src="{{skin url='images/media/menu/3.png'}}" alt="Casabella" /></a></div>
<div class="col_1 no-icon"><a href="#"><img title="Kronheims" src="{{skin url='images/media/menu/4.png'}}" alt="Kronheims" /></a></div>
<div class="col_1 no-icon "><a href="#"><img title="Nick scali" src="{{skin url='images/media/menu/5.png'}}" alt="Nick scali" /></a></div>
<div class="col_1 no-icon last"><a href="#"><img title="Natuzzi" src="{{skin url='images/media/menu/6.png'}}" alt="Natuzzi" /></a></div>
</div>
</div>
<!-- End6 column container --></div>
</li>
<li><a class="drop level-top" href="{{store direct_url='electronics/computers.html'}}"><span>Mirrors </span></a>
<div class="dropdown_6columns">
<div class="inner"><span class="title">Accessories</span>
<div class="col_6">
<div class="col_2">
<div class="col_2 firstcolumn"><a class="logo-menu" href="#"><img src="{{skin url='images/media/menu/logo_menu2.png'}}" alt="" /></a>
<p>Quisque rhoncus mi non ligula iaculis eu consequat lectus eleifend. Vestibulum consectetur erat in lacus mollis luctus</p>
</div>
<div class="col_2 new-product"><span class="title_col">TOP FAVORITE</span>
<div class="product">{{widget type="flexiblewidget/list" column_count="1" limit_count="1" order_by="name asc" category="35" template="custom_template" custom_theme="flexiblewidget/menu_top_favorite.phtml"}}</div>
</div>
</div>
<div class="col_1"><span class="title_col">Pellentesque </span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{store direct_url='furniture.html'}}">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='furniture.html'}}">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='apparel.html'}}">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
<li class="level1 nav-3-5"><a href="{{store direct_url='electronics/computers.html'}}">Amet Bibendum </a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='electronics/computers.html'}}">Tristique Turpis</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='furniture.html'}}">Phasellus leo</a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='furniture.html'}}">Amet Bibendum</a></li>
<li class="level1 nav-3-5"><a href="{{store direct_url='apparel.html'}}">Tristique Turpis</a></li>
</ul>
</div>
<div class="col_1"><span class="title_col">Pellentesque</span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{store direct_url='electronics/computers.html'}}">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='furniture.html'}}">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='electronics/computers.html'}}">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
<li class="level1 nav-3-5"><a href="{{store direct_url='electronics/computers.html'}}">Amet Bibendum </a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='electronics/computers.html'}}">Tristique Turpis</a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='electronics/computers.html'}}">Amet Bibendum</a></li>
<li class="level1 nav-3-5"><a href="{{store direct_url='apparel.html'}}">Tristique Turpis</a></li>
</ul>
</div>
<div class="col_2 last"><span class="title_col">Malesuada Tristique</span>
<div class="product">
<div class="emmediawidget "><object style="width: 280px; height: 158px;" width="320" height="240" data="http://www.youtube.com/v/NTH6e-5OXtU?version=3" type="application/x-shockwave-flash"><param name="allowFullScreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="src" value="http://www.youtube.com/v/NTH6e-5OXtU?version=3" /></object></div>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing Aliquam erat volutpat. Phasellus leo sapien</p>
</div>
</div>
</div>
</div>
</li>
<li><a class="drop level-top" href="{{store direct_url='furniture.html'}}"><span>Wardrobes &amp; Drawers </span> </a>
<div class="dropdown_2columns">
<div class="inner"><span class="title">Wheels</span>
<div class="col_2 firstcolumn wrapper_col">
<div class="col_1"><span class="title_col">Lorem Ipsum </span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{config path='web/unsecure/base_url'}}customer-s-choice.html">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='furniture.html'}}">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{config path='web/unsecure/base_url'}}replacements.html">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
<li class="level1 nav-3-5"><a href="{{config path='web/unsecure/base_url'}}apparel/shoes.html">Amet Bibendum </a></li>
<li class="level1 nav-3-2"><a href="{{config path='web/unsecure/base_url'}}electronics/computers.html">Tristique Turpis</a></li>
<li class="level1 nav-3-4"><a href="{{config path='web/unsecure/base_url'}}customer-s-choice..html">Amet Bibendum</a></li>
</ul>
</div>
<div class="col_1"><span class="title_col">Vulputate</span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{config path='web/unsecure/base_url'}}customer-s-choice..html">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{config path='web/unsecure/base_url'}}replacements.html">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='apparel.html'}}">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
<li class="level1 nav-3-5"><a href="{{config path='web/unsecure/base_url'}}apparel/shoes.html">Amet Bibendum </a></li>
<li class="level1 nav-3-2"><a href="{{config path='web/unsecure/base_url'}}electronics/computers.html">Tristique Turpis</a></li>
<li class="level1 nav-3-4"><a href="{{config path='web/unsecure/base_url'}}wheels.html">Amet Bibendum</a></li>
</ul>
</div>
</div>
<div class="col_2 wrapper_col">
<div class="col_1"><span class="title_col">Lorem Ipsum </span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{config path='web/unsecure/base_url'}}wheels.html">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{store direct_url='furniture.html'}}">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='apparel.html'}}">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
<li class="level1 nav-3-5"><a href="{{config path='web/unsecure/base_url'}}apparel/shoes.html">Amet Bibendum </a></li>
<li class="level1 nav-3-2"><a href="{{config path='web/unsecure/base_url'}}electronics/computers.html">Tristique Turpis</a></li>
<li class="level1 nav-3-4"><a href="{{config path='web/unsecure/base_url'}}replacements.html">Amet Bibendum</a></li>
</ul>
</div>
<div class="col_1"><span class="title_col">Vulputate</span>
<ul>
<li class="level1 nav-3-1 first"><a href="{{config path='web/unsecure/base_url'}}replacements.html">Phasellus Purus</a></li>
<li class="level1 nav-3-2"><a href="{{config path='web/unsecure/base_url'}}accessories.html">Laoreet Sed</a></li>
<li class="level1 nav-3-3"><a href="{{store direct_url='apparel.html'}}">Nulla Quam </a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='apparel/shirts.html'}}">Morbi Odio</a></li>
<li class="level1 nav-3-5"><a href="{{config path='web/unsecure/base_url'}}apparel/shoes.html">Amet Bibendum </a></li>
<li class="level1 nav-3-2"><a href="{{config path='web/unsecure/base_url'}}electronics/computers.html">Tristique Turpis</a></li>
<li class="level1 nav-3-4"><a href="{{store direct_url='furniture.html'}}">Amet Bibendum</a></li>
</ul>
</div>
</div>
</div>
</div>
<!-- End2 column container --></li>
<li class="last"><a class="drop level-top" href="{{config path='web/unsecure/base_url'}}accessories.html"><span> Lighting</span></a>
<div class="dropdown_1columns">
<div class="col_1">{{widget type="megamenu/catalogmenu" none_li_first_class="1" none_li_last_class="1" ul_class="levels" category="18" template="em_megamenu/menu.phtml" set_layout_menu="other" max_row_per_column="10"}}</div>
</div>
</li>
</ul>
EOB
);
$megamenu	=	$block->setData($dataBlock)->save()->getId();

$dataBlock = array(
	'title' => 'EM0057 Home Service',
	'identifier' => $prefixBlock.'homeservice',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<ul class="home_service">
<li class="sempero"><a href="#"><img title="sempero" src="{{skin url='images/i_subbanner_1.png'}}" alt="sempero" /></a>
<h2>Aenean sempero</h2>
<h3>Phaseellus bibendume</h3>
</li>
<li class="fauci"><a href="#"><img title="fauci" src="{{skin url='images/i_subbanner_2.png'}}" alt="fauci" /></a>
<h2>Curabitur faucibum</h2>
<h3>Suspendisse ligulaeumsi</h3>
</li>
<li class="nulla"><a href="#"><img title="nulla" src="{{skin url='images/i_subbanner_3.png'}}" alt="nulla" /></a>
<h2>Nulla venenatiesmu</h2>
<h3>Morbi ormare pretonemon</h3>
</li>
<li class="egesta"><a href="#"><img title="egesta" src="{{skin url='images/i_subbanner_4.png'}}" alt="egesta" /></a>
<h2>Egestas imperdum</h2>
<h3>Aenean semper torenos</h3>
</li>
</ul>
EOB
);
$homeservice	=	$block->setData($dataBlock)->save()->getId();

$dataBlock = array(
	'title' => 'EM0057 Footer Brand',
	'identifier' => $prefixBlock.'slideshow_footer_brand',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="footer_slideshow_brand">
<div id="slideshow_footer_brand" class="slideshow_footer_brand">
<div class="slideshow-box">
<ul class="jcarousel-skin-tango">
<li class="item"><a href="#"><img src="{{skin url="images/slideshow/1.png"}}" alt="" /></a></li>
<li class="item"><a href="#"><img src="{{skin url="images/slideshow/2.png"}}" alt="" /></a></li>
<li class="item"><a href="#"><img src="{{skin url="images/slideshow/3.png"}}" alt="" /></a></li>
<li class="item"><a href="#"><img src="{{skin url="images/slideshow/4.png"}}" alt="" /></a></li>
<li class="item"><a href="#"><img src="{{skin url="images/slideshow/5.png"}}" alt="" /></a></li>
<li class="item"><a href="#"><img src="{{skin url="images/slideshow/6.png"}}" alt="" /></a></li>
</ul>
</div>
</div>
<script type="text/javascript">// <![CDATA[
		jQuery(document).ready(function() {
			jQuery('#slideshow_footer_brand > div > ul').jcarousel({
				wrap: 'circular',
				auto:1,
				buttonNextHTML:'<a class="next" href="javascript:void(0);">Next</a>',
				buttonPrevHTML:'<a class="previous" href="javascript:void(0);">Pre</a>',
				scroll:1,
				animation:'slow'
			});
		});
// ]]></script>
</div>
EOB
);
$slideshow_footer_brand	=	$block->setData($dataBlock)->save()->getId();

$dataBlock = array(
	'title' => 'EM0057 Customer Testimonials',
	'identifier' => $prefixBlock.'customer_testimonials',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="customer_choice">
<div class="customer_choice_top">
<h3>Customer's Testimonials</h3>
<a title="" href="#&quot;"><span>Read more</span></a></div>
<div class="customer_choice_info">
<ul>
<li><img src="{{skin url='images/media/customer_1.jpg'}}" alt="" />
<div class="item_content">
<p>Lorem ipsum dolor sit consectetur eros adipiscing tacitisociosqu litora torquen per conubia nostra quis</p>
<p><span class="author">Paul Saber</span> Interior designer</p>
</div>
</li>
<li><img src="{{skin url='images/media/customer_2.jpg'}}" alt="" />
<div class="item_content">
<p>Lorem ipsum dolor sit consectetur eros adipiscing tacitisociosqu litora torquen per conubia nostra quis</p>
<p><span class="author">Paul Saber</span> Interior designer</p>
</div>
</li>
<li><img src="{{skin url='images/media/customer_3.jpg'}}" alt="" />
<div class="item_content">
<p>Lorem ipsum dolor sit consectetur eros adipiscing tacitisociosqu litora torquen per conubia nostra quis</p>
<p><span class="author">Paul Saber</span> Interior designer</p>
</div>
</li>
</ul>
</div>
</div>
EOB
);
$customer_testimonials	=	$block->setData($dataBlock)->save()->getId();

$dataBlock = array(
	'title' => 'EM0057 Featured Category',
	'identifier' => $prefixBlock.'featured_category',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div>{{block type="core/template" name="featured_category" template="cms/featured_category.phtml"}}</div>
EOB
);
$featured_category	=	$block->setData($dataBlock)->save()->getId();

$dataBlock = array(
	'title' => 'EM0057 Footer Friend',
	'identifier' => $prefixBlock.'footer_friend',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="footer_friend">
<h3>Let's be friend</h3>
<ul>
<li><a title="" href="http://www.facebook.com/"><img title="facebook" src="{{skin url='images/media/i_fb.png'}}" alt="facebook" /></a></li>
<li><a title="" href="https://plus.google.com/"><img title="google" src="{{skin url='images/media/i_gg.png'}}" alt="google" /></a></li>
<li><a title="" href="#"><img title="rss" src="{{skin url='images/media/i_rss.png'}}" alt="rss" /></a></li>
<li><a class="flick" title="" href="http://www.flickr.com/"><img title="flickr" src="{{skin url='images/media/i_fl.png'}}" alt="flickr" /></a></li>
<li><a title="" href="http://vimeo.com/"><img title="vimeo" src="{{skin url='images/media/i_v.png'}}" alt="vimeo" /></a></li>
</ul>
</div>
EOB
);
$footer_friend	=	$block->setData($dataBlock)->save()->getId();

$dataBlock = array(
	'title' => 'EM0057 Footer Newsletter',
	'identifier' => $prefixBlock.'newsletter',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div>{{block type="newsletter/subscribe" name="left.newsletter" template="newsletter/subscribe.phtml"}}</div>
EOB
);
$newsletter	=	$block->setData($dataBlock)->save()->getId();

$dataBlock = array(
	'title' => 'EM0057 Follow Us',
	'identifier' => $prefixBlock.'follow_us',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="follow_us">
<h3>Follow Us On</h3>
<a title="" href="https://twitter.com/"><img title="twitter" src="{{skin url='images/media/twitter.png'}}" alt="twitter" /></a></div>
EOB
);
$follow_us	=	$block->setData($dataBlock)->save()->getId();

$dataBlock = array(
	'title' => 'EM0057 Footer Gallery',
	'identifier' => $prefixBlock.'footer_gallery',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="footer_gallery">
<h3>Gallery On <a><img src="{{skin url='images/media/flick.png'}}" alt="" /></a></h3>
<ul>
<li><a href="#"><img src="{{skin url='images/media/gallery_1.jpg'}}" alt="" /></a></li>
<li><a href="#"><img src="{{skin url='images/media/gallery_2.jpg'}}" alt="" /></a></li>
<li><a href="#"><img src="{{skin url='images/media/gallery_3.jpg'}}" alt="" /></a></li>
<li><a href="#"><img src="{{skin url='images/media/gallery_4.jpg'}}" alt="" /></a></li>
<li><a href="#"><img src="{{skin url='images/media/gallery_5.jpg'}}" alt="" /></a></li>
<li><a href="#"><img src="{{skin url='images/media/gallery_6.jpg'}}" alt="" /></a></li>
<li><a href="#"><img src="{{skin url='images/media/gallery_7.jpg'}}" alt="" /></a></li>
<li class="last"><a href="#"><img src="{{skin url='images/media/gallery_8.jpg'}}" alt="" /></a></li>
</ul>
</div>
EOB
);
$footer_gallery	=	$block->setData($dataBlock)->save()->getId();

$dataBlock = array(
	'title' => 'EM0057 Footer Link',
	'identifier' => $prefixBlock.'footer_link',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="footer_link">
<ul>
<li><a title="" href="#">Shopping Deals</a><span>|</span></li>
<li><a title="" href="#">Information Deals</a><span>|</span></li>
<li><a title="" href="#">Best Seller</a><span>|</span></li>
<li><a title="" href="#">Sale Program</a><span>|</span></li>
<li><a title="" href="#">Free Return</a></li>
</ul>
</div>
EOB
);
$footer_link	=	$block->setData($dataBlock)->save()->getId();

$dataBlock = array(
	'title' => 'EM0057 Copyright',
	'identifier' => $prefixBlock.'copyright',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div>{{block type="page/html_footer" name="featured_category" template="cms/copyright.phtml"}}</div>
EOB
);
$copyright	=	$block->setData($dataBlock)->save()->getId();

$dataBlock = array(
	'title' => 'EM0057 Language Currency',
	'identifier' => $prefixBlock.'language_curency',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div>{{block type="page/switch" name="store_language" as="store_language" template="page/switch/languages.phtml"}}</div>
<div>{{block type="directory/currency" name="currency" before="catalog.leftnav" template="directory/currency.phtml"}}</div>
EOB
);
$language_curency	=	$block->setData($dataBlock)->save()->getId();

$dataBlock = array(
	'title' => 'EM0057 Payment',
	'identifier' => $prefixBlock.'payment',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="payment">
<ul>
<li><a title="" href="#"><img title="visa" src="{{skin url='images/media/visa.png'}}" alt="visa" /></a></li>
<li><a title="" href="#"><img title="master card" src="{{skin url='images/media/master.png'}}" alt="master card" /></a></li>
<li><a title="" href="#"><img title="american express" src="{{skin url='images/media/express.png'}}" alt="express" /></a></li>
<li><a title="" href="#"><img title="paypal" src="{{skin url='images/media/paypal.png'}}" alt="paypal" /></a></li>
<li class="last"><a title="" href="#"><img title="bcc" src="{{skin url='images/media/bcc.png'}}" alt="bcc" /></a></li>
</ul>
</div>
EOB
);
$payment	=	$block->setData($dataBlock)->save()->getId();

$dataBlock = array(
	'title' => 'EM0057 Callout Left',
	'identifier' => $prefixBlock.'callout_left',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="callout_left"><a title="" href="#"><img src="{{skin url='images/media/callout_left.jpg'}}" alt="" /></a></div>
EOB
);
$callout_left	=	$block->setData($dataBlock)->save()->getId();

$dataBlock = array(
	'title' => 'EM0057 Callout Left Checkout Page',
	'identifier' => $prefixBlock.'callout_left_checkout_page',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="callout_left"><a title="" href="#"><img src="{{skin url='images/media/callout_left_checkout.jpg'}}" alt="" /></a></div>
EOB
);
$callout_left_checkout_page	=	$block->setData($dataBlock)->save()->getId();


####################################################################################################
# INSERT PAGE
####################################################################################################

$dataPage = array(
	'title'				=> 'Magento Theme',
	'identifier' 		=> $prefixPage.'home',
	'stores'			=> $stores,
	'content_heading'	=> '',
	'content'			=> <<<EOB
<div>&nbsp;</div>
EOB
,
	'root_template'		=> 'one_column',
);
$homepageId = $page->setData($dataPage)->save()->getId();

$dataPage = array(
	'title'				=> 'em0057_typography',
	'identifier' 		=> $prefixPage.'typography',
	'stores'			=> $stores,
	'content_heading'	=> '',
	'content'			=> <<<EOB
<h1>Heading H1</h1>
<h2>Heading H2</h2>
<h3>Heading H3</h3>
<h4>Heading H4</h4>
<h5>Heading H5</h5>
<h6>Heading H6</h6>
<ul>
<li>Bullet list 1</li>
<li>Bullet list 2
<ul>
<li>Bullet list 2.1</li>
<li>Bullet list 2.2
<ul>
<li>Bullet list 2.2.1</li>
<li>Bullet list 2.2.2</li>
<li>Bullet list 2.2.3</li>
</ul>
</li>
<li>Bullet list 2.3</li>
</ul>
</li>
<li>Bullet list 3</li>
<li>Bullet list 4
<ul>
<li>Bullet list 4.1</li>
<li>Bullet list 4.2</li>
</ul>
</li>
</ul>
<ol>
<li>Numbered list 1</li>
<li>Numbered list 2<ol>
<li>Numbered list 2.1</li>
<li>Numbered list 2.2<ol>
<li>Numbered list 2.2.1</li>
<li>Numbered list 2.2.2</li>
<li>Numbered list 2.2.3</li>
</ol></li>
<li>Numbered list 2.3</li>
</ol></li>
<li>Numbered list 3<ol>
<li>Numbered list 3.1</li>
<li>Numbered list 3.2</li>
<li>Numbered list 3.3</li>
</ol></li>
</ol><dl><dt>definition title dt</dt><dd>definition description dd</dd><dt>definition title dt</dt><dd>definition description dd</dd></dl>
<p><code>Code tag<br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</code></p>
<blockquote>Blockquote tag<br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>
<pre>Pre tag<br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</pre>
<p>table with class <strong>data-table</strong></p>
<table class="data-table">
<thead>
<tr><th>thead th 1</th><th>thead th 2</th><th>thead th 3</th><th>thead th 4</th></tr>
</thead>
<tfoot>
<tr>
<td>tfoot td 1</td>
<td>tfoot td 2</td>
<td>tfoot td 3</td>
<td>tfoot td 4</td>
</tr>
</tfoot>
<tbody>
<tr class="odd">
<td>tbody td1</td>
<td>tbody td2</td>
<td>tbody td3</td>
<td>tbody td4</td>
</tr>
<tr class="even">
<td>tbody td1</td>
<td>tbody td2</td>
<td>tbody td3</td>
<td>tbody td4</td>
</tr>
<tr class="odd">
<td>tbody td1</td>
<td>tbody td2</td>
<td>tbody td3</td>
<td>tbody td4</td>
</tr>
<tr class="even">
<td>tbody td1</td>
<td>tbody td2</td>
<td>tbody td3</td>
<td>tbody td4</td>
</tr>
</tbody>
</table>
<p><strong>Column Layout:</strong></p>
<div class="cols-set-12">
<div class="col3 col-first">
<div class="col-inner">
<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col3 col-first"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
</div>
</div>
<div class="col3">
<div class="col-inner">
<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col3"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
</div>
</div>
<div class="col6 col-last">
<div class="col-inner">
<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col6 col-last"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
</div>
</div>
</div>
<p>Text after column layout</p>
<div class="cols-set-12">
<div class="col2 col-first">
<div class="col-inner">
<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col2 col-first"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
</div>
</div>
<div class="col2">
<div class="col-inner">
<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col2"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
</div>
</div>
<div class="col2">
<div class="col-inner">
<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col2"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
</div>
</div>
<div class="col2">
<div class="col-inner">
<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col2"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
</div>
</div>
<div class="col2">
<div class="col-inner">
<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col2"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
</div>
</div>
<div class="col2 col-last">
<div class="col-inner">
<p><code> &lt;div class="cols-set-12"&gt;<br /> &lt;div class="col2 col-last"&gt;<br /> &lt;div class="col-inner"&gt;...&lt;/div&gt;<br /> &lt;/div&gt;<br /> &lt;/div&gt; </code></p>
</div>
</div>
</div>
EOB
,
	'root_template'		=> 'one_column',
);
$page->setData($dataPage)->save();


####################################################################################################
# INSERT Widget Instance
####################################################################################################
	
	$package_theme	=	'default/em0057';

$widget = array(	
	'title' => 'EM0057 Deal Products',	
	'store_ids' => $stores,	
	'widget_parameters'	=> <<<EOB
a:7:{s:12:"column_count";s:2:"15";s:11:"limit_count";s:2:"15";s:13:"attribute_set";s:0:"";s:2:"if";s:9:"EM_Deal=1";s:8:"order_by";s:8:"name asc";s:8:"category";s:0:"";s:12:"custom_theme";s:33:"flexiblewidget/deal_product.phtml";}
EOB
,
	'sort_order' => 0,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"1";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"1";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"1";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"1";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"1";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"1";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"1";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"1";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"1";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:1:"1";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:5:{s:7:"page_id";s:1:"1";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:5:"area3";s:8:"template";s:33:"flexiblewidget/deal_product.phtml";}}}a:1:{i:0;a:8:{s:7:"page_id";s:1:"1";s:5:"group";s:5:"pages";s:13:"layout_handle";s:15:"cms_index_index";s:3:"for";s:3:"all";s:15:"block_reference";s:5:"area3";s:8:"entities";s:0:"";s:21:"layout_handle_updates";a:1:{i:0;s:15:"cms_index_index";}s:8:"template";s:33:"flexiblewidget/deal_product.phtml";}}
EOB
)
);
$widgetInstance->setData($widget)->setType('flexiblewidget/list')->setPackageTheme($package_theme)->save();

$widget = array(	
	'title' => 'EM0057 Featured Products',	
	'store_ids' => $stores,	
	'widget_parameters'	=> <<<EOB
a:7:{s:12:"column_count";s:2:"10";s:11:"limit_count";s:2:"10";s:13:"attribute_set";s:0:"";s:2:"if";s:13:"EM_Featured=1";s:8:"order_by";s:8:"name asc";s:8:"category";s:0:"";s:12:"custom_theme";s:0:"";}
EOB
,
	'sort_order' => 0,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"2";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"2";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"2";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"2";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"2";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"2";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"2";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"2";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"2";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:1:"2";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:5:{s:7:"page_id";s:1:"2";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:5:"area4";s:8:"template";s:38:"flexiblewidget/featured_products.phtml";}}}
EOB
)
);
$widgetInstance->setData($widget)->setType('flexiblewidget/list')->setPackageTheme($package_theme)->save();

$widget = array(
	'title' => 'EM0057 New Products',	
	'store_ids' => $stores,	
	'widget_parameters'	=> <<<EOB
a:2:{s:14:"products_count";s:1:"5";s:14:"cache_lifetime";s:0:"";}
EOB
,
	'sort_order' => 0,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:5:{s:7:"page_id";s:1:"3";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:5:"area5";s:8:"template";s:49:"catalog/product/widget/new/content/new_grid.phtml";}}}
EOB
)
);
$widgetInstance->setData($widget)->setType('catalog/product_widget_new')->setPackageTheme($package_theme)->save();

//$static_block	=	unserialize('a:1:{s:8:"block_id";s:1:"9";}');
$static_block['block_id']	=	$homeservice;
$widget = array(
	'title' => 'EM0057 Home Service',
	'store_ids' => $stores,
	'widget_parameters'	=> serialize($static_block),
	'sort_order' => 0,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:5:{s:7:"page_id";s:1:"4";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:5:"area2";s:8:"template";s:37:"cms/widget/static_block/default.phtml";}}}
EOB
)
);
$widgetInstance->setData($widget)->setType('cms/widget_block')->setPackageTheme($package_theme)->save();

//$static_block	=	unserialize('a:1:{s:8:"block_id";s:2:"11";}');
$static_block['block_id']	=	$slideshow_footer_brand;
$widget = array(
	'title' => 'EM0057 Footer Brand',	
	'store_ids' => $stores,	
	'widget_parameters'	=> serialize($static_block),
	'sort_order' => 0,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:9:"all_pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:5:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";s:5:"block";s:5:"area6";s:8:"template";s:37:"cms/widget/static_block/default.phtml";}s:5:"pages";a:3:{s:7:"page_id";s:1:"5";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
)
);
$widgetInstance->setData($widget)->setType('cms/widget_block')->setPackageTheme($package_theme)->save();

//$static_block	=	unserialize('a:1:{s:8:"block_id";s:2:"12";}');
$static_block['block_id']	=	$customer_testimonials;
$widget = array(	
	'title' => 'EM0057 Customer Testimonials',	
	'store_ids' => $stores,	
	'widget_parameters'	=> serialize($static_block),
	'sort_order' => 0,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:9:"all_pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:5:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";s:5:"block";s:5:"area7";s:8:"template";s:37:"cms/widget/static_block/default.phtml";}s:5:"pages";a:3:{s:7:"page_id";s:1:"6";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
)
);
$widgetInstance->setData($widget)->setType('cms/widget_block')->setPackageTheme($package_theme)->save();

//$static_block	=	unserialize('a:1:{s:8:"block_id";s:2:"13";}');
$static_block['block_id']	=	$featured_category;
$widget = array(	
	'title' => 'EM0057 Featured Category',	
	'store_ids' => $stores,	
	'widget_parameters'	=> serialize($static_block),
	'sort_order' => 0,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:5:{s:7:"page_id";s:1:"7";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:7:"content";s:8:"template";s:37:"cms/widget/static_block/default.phtml";}}}
EOB
)
);
$widgetInstance->setData($widget)->setType('cms/widget_block')->setPackageTheme($package_theme)->save();

//$static_block	=	unserialize('a:1:{s:8:"block_id";s:2:"14";}');
$static_block['block_id']	=	$footer_friend;
$widget = array(
	'instance_type' => 'cms/widget_block',	
	'package_theme' => 'default/em0057',	
	'title' => 'EM0057 Footer Friend',	
	'store_ids' => $stores,	
	'widget_parameters'	=> serialize($static_block),
	'sort_order' => 0,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:9:"all_pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:5:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";s:5:"block";s:5:"area8";s:8:"template";s:37:"cms/widget/static_block/default.phtml";}s:5:"pages";a:3:{s:7:"page_id";s:1:"8";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
)
);
$widgetInstance->setData($widget)->save();

//$static_block	=	unserialize('a:1:{s:8:"block_id";s:2:"15";}');
$static_block['block_id']	=	$newsletter;
$widget = array(
	'instance_type' => 'cms/widget_block',	
	'package_theme' => 'default/em0057',	
	'title' => 'EM0057 Newsletter',	
	'store_ids' => $stores,	
	'widget_parameters'	=> serialize($static_block),
	'sort_order' => 1,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:9:"all_pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:5:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";s:5:"block";s:5:"area8";s:8:"template";s:37:"cms/widget/static_block/default.phtml";}s:5:"pages";a:3:{s:7:"page_id";s:1:"9";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
)
);
$widgetInstance->setData($widget)->save();

//$static_block	=	unserialize('a:1:{s:8:"block_id";s:2:"16";}');
$static_block['block_id']	=	$follow_us;
$widget = array(
	'instance_type' => 'cms/widget_block',	
	'package_theme' => 'default/em0057',	
	'title' => 'EM0057 Follow Us',	
	'store_ids' => $stores,	
	'widget_parameters'	=> serialize($static_block),
	'sort_order' => 2,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:9:"all_pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"10";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"10";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"10";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"10";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"10";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"10";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"10";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"10";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"10";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:5:{s:7:"page_id";s:2:"10";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";s:5:"block";s:5:"area8";s:8:"template";s:37:"cms/widget/static_block/default.phtml";}s:5:"pages";a:3:{s:7:"page_id";s:2:"10";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
)
);
$widgetInstance->setData($widget)->save();

//$static_block	=	unserialize('a:1:{s:8:"block_id";s:2:"17";}');
$static_block['block_id']	=	$footer_gallery;
$widget = array(
	'instance_type' => 'cms/widget_block',	
	'package_theme' => 'default/em0057',	
	'title' => 'EM0057 Footer Gallery',	
	'store_ids' => $stores,	
	'widget_parameters'	=> serialize($static_block),
	'sort_order' => 0,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:9:"all_pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:5:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";s:5:"block";s:6:"area10";s:8:"template";s:37:"cms/widget/static_block/default.phtml";}s:5:"pages";a:3:{s:7:"page_id";s:2:"11";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
)
);
$widgetInstance->setData($widget)->save();

//$static_block	=	unserialize('a:1:{s:8:"block_id";s:2:"18";}');
$static_block['block_id']	=	$footer_link;
$widget = array(
	'instance_type' => 'cms/widget_block',	
	'package_theme' => 'default/em0057',	
	'title' => 'EM0057 Footer Link',	
	'store_ids' => $stores,	
	'widget_parameters'	=> serialize($static_block),
	'sort_order' => 0,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:9:"all_pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:5:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";s:5:"block";s:6:"area11";s:8:"template";s:37:"cms/widget/static_block/default.phtml";}s:5:"pages";a:3:{s:7:"page_id";s:2:"12";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
)
);
$widgetInstance->setData($widget)->save();

//$static_block	=	unserialize('a:1:{s:8:"block_id";s:2:"19";}');
$static_block['block_id']	=	$copyright;
$widget = array(
	'instance_type' => 'cms/widget_block',	
	'package_theme' => 'default/em0057',	
	'title' => 'EM0057 Copyright',	
	'store_ids' => $stores,	
	'widget_parameters'	=> serialize($static_block),
	'sort_order' => 1,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:9:"all_pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:5:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";s:5:"block";s:6:"area11";s:8:"template";s:37:"cms/widget/static_block/default.phtml";}s:5:"pages";a:3:{s:7:"page_id";s:2:"13";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
)
);
$widgetInstance->setData($widget)->save();

//$static_block	=	unserialize('a:1:{s:8:"block_id";s:2:"21";}');
$static_block['block_id']	=	$language_curency;
$widget = array(
	'instance_type' => 'cms/widget_block',	
	'package_theme' => 'default/em0057',	
	'title' => 'EM0057 Language Currency',	
	'store_ids' => $stores,	
	'widget_parameters'	=> serialize($static_block),
	'sort_order' => 2,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:9:"all_pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"15";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"15";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"15";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"15";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"15";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"15";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"15";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"15";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"15";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:5:{s:7:"page_id";s:2:"15";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";s:5:"block";s:6:"area11";s:8:"template";s:37:"cms/widget/static_block/default.phtml";}s:5:"pages";a:3:{s:7:"page_id";s:2:"15";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
)
);
$widgetInstance->setData($widget)->save();

//$static_block	=	unserialize('a:1:{s:8:"block_id";s:2:"22";}');
$static_block['block_id']	=	$payment;
$widget = array(
	'instance_type' => 'cms/widget_block',	
	'package_theme' => 'default/em0057',	
	'title' => 'EM0057 Payment',	
	'store_ids' => $stores,	
	'widget_parameters'	=> serialize($static_block),
	'sort_order' => 0,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:9:"all_pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:5:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";s:5:"block";s:6:"area12";s:8:"template";s:37:"cms/widget/static_block/default.phtml";}s:5:"pages";a:3:{s:7:"page_id";s:2:"16";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
)
);
$widgetInstance->setData($widget)->save();

//$static_block	=	unserialize('a:1:{s:8:"block_id";s:2:"23";}');
$static_block['block_id']	=	$callout_left;
$widget = array(
	'instance_type' => 'cms/widget_block',	
	'package_theme' => 'default/em0057',	
	'title' => 'EM0057 Callout Left',	
	'store_ids' => $stores,	
	'widget_parameters'	=> serialize($static_block),
	'sort_order' => 0,
	'page_groups'=>	unserialize(<<<EOB
a:2:{i:1;a:12:{s:10:"page_group";s:12:"all_products";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"27";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"27";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:8:{s:7:"page_id";s:2:"27";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:5:"block";s:4:"left";s:8:"template";s:37:"cms/widget/static_block/default.phtml";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"27";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"27";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"27";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"27";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"27";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"27";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"27";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"27";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}i:0;a:12:{s:10:"page_group";s:17:"anchor_categories";s:17:"anchor_categories";a:8:{s:7:"page_id";s:2:"18";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:5:"block";s:4:"left";s:8:"template";s:37:"cms/widget/static_block/default.phtml";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"18";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"18";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"18";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"18";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"18";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"18";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"18";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"18";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"18";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"18";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
)
);
$widgetInstance->setData($widget)->save();

$widget = array(
	'instance_type' => 'flexiblewidget/list',	
	'package_theme' => 'default/em0057',	
	'title' => 'EM0057 Most Popular',	
	'store_ids' => $stores,	
	'widget_parameters'	=> <<<EOB
a:7:{s:12:"column_count";s:1:"2";s:11:"limit_count";s:1:"2";s:13:"attribute_set";s:0:"";s:2:"if";s:0:"";s:8:"order_by";s:8:"name asc";s:8:"category";s:2:"42";s:12:"custom_theme";s:0:"";}
EOB
,
	'sort_order' => 0,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"19";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"19";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"19";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"19";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"19";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"19";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"19";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"19";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"19";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"19";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:5:{s:7:"page_id";s:2:"19";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:5:"area1";s:8:"template";s:25:"flexiblewidget/grid.phtml";}}}
EOB
)
);
$widgetInstance->setData($widget)->save();

$widget = array(
	'instance_type' => 'recentreviewproducts/list',	
	'package_theme' => 'default/em0057',	
	'title' => 'EM0057 Latest Review',	
	'store_ids' => $stores,	
	'widget_parameters'	=> <<<EOB
a:6:{s:12:"new_category";a:26:{i:0;s:1:"3";i:1;s:2:"10";i:2;s:2:"22";i:3;s:2:"23";i:4;s:2:"13";i:5;s:1:"8";i:6;s:2:"12";i:7;s:2:"25";i:8;s:2:"26";i:9;s:2:"15";i:10;s:2:"27";i:11;s:2:"28";i:12;s:2:"29";i:13;s:2:"30";i:14;s:2:"31";i:15;s:2:"32";i:16;s:2:"33";i:17;s:2:"34";i:18;s:2:"18";i:19;s:1:"4";i:20;s:1:"5";i:21;s:2:"16";i:22;s:2:"17";i:23;s:2:"19";i:24;s:2:"24";i:25;s:2:"20";}s:11:"limit_count";s:1:"3";s:12:"column_count";s:1:"1";s:15:"choose_template";s:48:"em_recentviewproducts/grid_products_simple.phtml";s:12:"custom_theme";s:0:"";s:14:"cache_lifetime";s:0:"";}
EOB
,
	'sort_order' => 0,
	'page_groups'=>	unserialize(<<<EOB
a:3:{i:2;a:12:{s:10:"page_group";s:17:"anchor_categories";s:17:"anchor_categories";a:8:{s:7:"page_id";s:2:"22";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:5:"block";s:4:"left";s:8:"template";s:48:"em_recentviewproducts/grid_products_simple.phtml";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"22";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"22";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"22";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"22";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"22";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"22";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"22";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"22";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"22";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"22";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}i:1;a:12:{s:10:"page_group";s:20:"notanchor_categories";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"21";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:8:{s:7:"page_id";s:2:"21";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:5:"block";s:4:"left";s:8:"template";s:48:"em_recentviewproducts/grid_products_simple.phtml";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"21";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"21";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"21";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"21";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"21";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"21";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"21";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"21";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"21";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}i:0;a:12:{s:10:"page_group";s:12:"all_products";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"20";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"20";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:8:{s:7:"page_id";s:2:"20";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:5:"block";s:4:"left";s:8:"template";s:48:"em_recentviewproducts/grid_products_simple.phtml";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"20";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"20";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"20";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"20";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"20";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"20";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"20";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"20";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
)
);
$widgetInstance->setData($widget)->save();

//$static_block	=	unserialize('a:1:{s:8:"block_id";s:2:"24";}');
$static_block['block_id']	=	$callout_left_checkout_page;
$widget = array(
	'instance_type' => 'cms/widget_block',	
	'package_theme' => 'default/em0057',	
	'title' => 'EM0057 Callout Left Checkout Page',	
	'store_ids' => $stores,	
	'widget_parameters'	=> serialize($static_block),
	'sort_order' => 0,
	'page_groups'=>	unserialize(<<<EOB
a:3:{i:2;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"26";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"26";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"26";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"26";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"26";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"26";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"26";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"26";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"26";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"26";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:5:{s:7:"page_id";s:2:"26";s:3:"for";s:3:"all";s:13:"layout_handle";s:22:"checkout_onepage_index";s:5:"block";s:4:"left";s:8:"template";s:37:"cms/widget/static_block/default.phtml";}}i:1;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"25";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"25";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"25";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"25";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"25";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"25";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"25";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"25";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"25";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"25";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:5:{s:7:"page_id";s:2:"25";s:3:"for";s:3:"all";s:13:"layout_handle";s:24:"checkout_onepage_failure";s:5:"block";s:4:"left";s:8:"template";s:37:"cms/widget/static_block/default.phtml";}}i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"23";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"23";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"23";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"23";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"23";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"23";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"23";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"23";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"23";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"23";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:5:{s:7:"page_id";s:2:"23";s:3:"for";s:3:"all";s:13:"layout_handle";s:24:"checkout_onepage_success";s:5:"block";s:4:"left";s:8:"template";s:37:"cms/widget/static_block/default.phtml";}}}
EOB
)
);
$widgetInstance->setData($widget)->save();

$widget = array(
	'instance_type' => 'slideshowwidget/create',	
	'package_theme' => 'default/em0057',	
	'title' => 'EM0057 Main Slideshow',	
	'store_ids' => $stores,	
	'widget_parameters'	=> <<<EOB
a:45:{s:5:"text1";s:270:"<p><span class="text_slideshow_1">COLLECTION </span><span class="text_slideshow_2">RED FURNITURE</span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam </span></p><div class="action"><button class="button"><span><span>shop now</span></span></button>";s:4:"url1";s:16:"electronics.html";s:6:"image1";s:11:"banner1.jpg";s:5:"text2";s:270:"<p><span class="text_slideshow_1">COLLECTION </span><span class="text_slideshow_2">RED FURNITURE</span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam </span></p><div class="action"><button class="button"><span><span>shop now</span></span></button>";s:4:"url2";s:14:"furniture.html";s:6:"image2";s:11:"banner2.jpg";s:5:"text3";s:270:"<p><span class="text_slideshow_1">COLLECTION </span><span class="text_slideshow_2">RED FURNITURE</span><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam </span></p><div class="action"><button class="button"><span><span>shop now</span></span></button>";s:4:"url3";s:12:"apparel.html";s:6:"image3";s:11:"banner3.jpg";s:5:"text4";s:0:"";s:4:"url4";s:0:"";s:6:"image4";s:0:"";s:5:"text5";s:0:"";s:4:"url5";s:0:"";s:6:"image5";s:0:"";s:5:"text6";s:0:"";s:4:"url6";s:0:"";s:6:"image6";s:0:"";s:5:"text7";s:0:"";s:4:"url7";s:0:"";s:6:"image7";s:0:"";s:5:"text8";s:0:"";s:4:"url8";s:0:"";s:6:"image8";s:0:"";s:5:"text9";s:0:"";s:4:"url9";s:0:"";s:6:"image9";s:0:"";s:5:"width";s:4:"1900";s:6:"height";s:3:"545";s:5:"delay";s:4:"5000";s:13:"displaybutton";s:4:"true";s:9:"autostart";s:4:"true";s:10:"transition";s:6:"random";s:15:"transitionspeed";s:3:"800";s:10:"autocenter";s:5:"false";s:11:"cpanelalign";s:2:"BR";s:14:"cpanelposition";s:6:"inside";s:10:"timeralign";s:3:"top";s:12:"displaytimer";s:4:"true";s:14:"mouseoverpause";s:5:"false";s:15:"cpanelmouseover";s:5:"false";s:13:"textmouseover";s:5:"false";s:10:"texteffect";s:4:"fade";s:8:"textsync";s:4:"true";s:7:"shuffle";s:5:"false";}
EOB
,
	'sort_order' => 0,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"28";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"28";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"28";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"28";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"28";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"28";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"28";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"28";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"28";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"28";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"28";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:14:"main_slideshow";}}}
EOB
)
);
$widgetInstance->setData($widget)->save();

$installer->endSetup(); 
