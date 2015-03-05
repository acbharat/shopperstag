<?php
$installer = $this;
$pathFile = Mage::getBaseDir('var').DS.'install_em0074.txt';
if(file_exists($pathFile)){
    echo 'Installing EM0074 theme, please come back in some minutes ...';
    exit;
}
$installer->startSetup();

####################################################################################################
# ADD THEMEFRAMEWORK LAYOUT
####################################################################################################

$model = Mage::getModel('themeframework/area');
	
$data = array(
	'package_theme'  => 'default/em0074',
	'layout'         => '1column',	
	'is_active'      => 1,
	'content_decode' => unserialize(<<<EOB
a:8:{i:0;a:6:{s:10:"custom_css";s:29:"container_24 container_header";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:4:{i:0;s:6:"header";i:1;s:8:"em_area2";i:2;s:11:"breadcrumbs";i:3;s:15:"global_messages";}}i:1;a:6:{s:10:"custom_css";s:7:"emarea2";s:10:"inner_html";s:79:"<div class="container_24"><div class="emarea2_position">{{content}}</div></div>";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:8:"em_area1";}}i:2;a:6:{s:10:"custom_css";s:19:"container_slideshow";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:5:{i:0;s:5:"clear";i:1;a:11:{s:6:"column";s:1:"5";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area3";}}i:2;a:11:{s:6:"column";s:2:"14";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area4";}}i:3;a:11:{s:6:"column";s:1:"5";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:1;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area5";}}i:4;s:5:"clear";}}i:3;a:6:{s:10:"custom_css";s:12:"container_24";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:3:{i:0;s:9:"em_area16";i:1;s:7:"content";i:2;s:9:"em_area17";}}i:4;a:6:{s:10:"custom_css";s:17:"container_banners";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:5:{i:0;s:5:"clear";i:1;a:11:{s:6:"column";s:2:"12";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area6";}}i:2;a:11:{s:6:"column";s:1:"7";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area7";}}i:3;a:11:{s:6:"column";s:1:"5";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:1;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area8";}}i:4;s:5:"clear";}}i:5;a:6:{s:10:"custom_css";s:12:"container_24";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:2:{i:0;s:8:"em_area9";i:1;s:9:"em_area18";}}i:6;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:45:"<div class="wrapper_footer">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:5:{i:0;a:11:{s:6:"column";s:2:"16";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area10";}}i:1;a:11:{s:6:"column";s:1:"8";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:1;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area11";}}i:2;s:5:"clear";i:3;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:1;s:10:"custom_css";s:13:"grid24_footer";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"footer";}}i:4;s:5:"clear";}}i:7;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:11:"{{content}}";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:15:"before_body_end";}}}
EOB
	)
);
$model->setData($data)->setStores(array(0))->save();

$data = array(
	'package_theme'  => 'default/em0074',
	'layout'         => '3columns',	
	'is_active'      => 1,
	'content_decode' => unserialize(<<<EOB
a:6:{i:0;a:6:{s:10:"custom_css";s:29:"container_24 container_header";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:4:{i:0;s:6:"header";i:1;s:8:"em_area2";i:2;s:11:"breadcrumbs";i:3;s:15:"global_messages";}}i:1;a:6:{s:10:"custom_css";s:7:"emarea2";s:10:"inner_html";s:79:"<div class="container_24"><div class="emarea2_position">{{content}}</div></div>";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:8:"em_area1";}}i:2;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:13:{i:0;s:5:"clear";i:1;a:11:{s:6:"column";s:1:"5";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area3";}}i:2;a:11:{s:6:"column";s:2:"14";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area4";}}i:3;a:11:{s:6:"column";s:1:"5";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:1;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area5";}}i:4;s:5:"clear";i:5;a:11:{s:6:"column";s:2:"14";s:4:"push";s:1:"5";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:12:"grid_content";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:3:{i:0;s:9:"em_area16";i:1;s:7:"content";i:2;s:9:"em_area17";}}i:6;a:11:{s:6:"column";s:1:"5";s:4:"push";s:0:"";s:4:"pull";s:2:"14";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:3:{i:0;s:9:"em_area12";i:1;s:4:"left";i:2;s:9:"em_area13";}}i:7;a:11:{s:6:"column";s:1:"5";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:1;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:3:{i:0;s:9:"em_area14";i:1;s:5:"right";i:2;s:9:"em_area15";}}i:8;s:5:"clear";i:9;a:11:{s:6:"column";s:2:"12";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area6";}}i:10;a:11:{s:6:"column";s:1:"7";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area7";}}i:11;a:11:{s:6:"column";s:1:"5";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:1;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area8";}}i:12;s:5:"clear";}}i:3;a:6:{s:10:"custom_css";s:12:"container_24";s:10:"inner_html";s:0:"";s:10:"outer_html";s:43:"<div class="footer_inner">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:2:{i:0;s:8:"em_area9";i:1;s:9:"em_area18";}}i:4;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:45:"<div class="wrapper_footer">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:5:{i:0;a:11:{s:6:"column";s:2:"16";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area10";}}i:1;a:11:{s:6:"column";s:1:"8";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:1;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area11";}}i:2;s:5:"clear";i:3;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:1;s:10:"custom_css";s:13:"grid24_footer";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"footer";}}i:4;s:5:"clear";}}i:5;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:15:"before_body_end";}}}
EOB
	)
);
$model->setData($data)->setStores(array(0))->save();

$data = array(
	'package_theme'  => 'default/em0074',
	'layout'         => '2columns-left',	
	'is_active'      => 1,
	'content_decode' => unserialize(<<<EOB
a:6:{i:0;a:6:{s:10:"custom_css";s:29:"container_24 container_header";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:4:{i:0;s:6:"header";i:1;s:8:"em_area2";i:2;s:11:"breadcrumbs";i:3;s:15:"global_messages";}}i:1;a:6:{s:10:"custom_css";s:7:"emarea2";s:10:"inner_html";s:79:"<div class="container_24"><div class="emarea2_position">{{content}}</div></div>";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:8:"em_area1";}}i:2;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:12:{i:0;s:5:"clear";i:1;a:11:{s:6:"column";s:1:"5";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area3";}}i:2;a:11:{s:6:"column";s:2:"14";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area4";}}i:3;a:11:{s:6:"column";s:1:"5";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:1;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area5";}}i:4;s:5:"clear";i:5;a:11:{s:6:"column";s:2:"19";s:4:"push";s:1:"5";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:1;s:10:"custom_css";s:12:"grid_content";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:3:{i:0;s:9:"em_area16";i:1;s:7:"content";i:2;s:9:"em_area17";}}i:6;a:11:{s:6:"column";s:1:"5";s:4:"push";s:0:"";s:4:"pull";s:2:"19";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:3:{i:0;s:9:"em_area12";i:1;s:4:"left";i:2;s:9:"em_area13";}}i:7;s:5:"clear";i:8;a:11:{s:6:"column";s:2:"12";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area6";}}i:9;a:11:{s:6:"column";s:1:"7";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area7";}}i:10;a:11:{s:6:"column";s:1:"5";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:1;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area8";}}i:11;s:5:"clear";}}i:3;a:6:{s:10:"custom_css";s:12:"container_24";s:10:"inner_html";s:0:"";s:10:"outer_html";s:43:"<div class="footer_inner">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:2:{i:0;s:8:"em_area9";i:1;s:9:"em_area18";}}i:4;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:45:"<div class="wrapper_footer">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:5:{i:0;a:11:{s:6:"column";s:2:"16";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area10";}}i:1;a:11:{s:6:"column";s:1:"8";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:1;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area11";}}i:2;s:5:"clear";i:3;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:1;s:10:"custom_css";s:13:"grid24_footer";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"footer";}}i:4;s:5:"clear";}}i:5;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:15:"before_body_end";}}}
EOB
	)
);
$model->setData($data)->setStores(array(0))->save();

$data = array(
	'package_theme'  => 'default/em0074',
	'layout'         => '2columns-right',	
	'is_active'      => 1,
	'content_decode' => unserialize(<<<EOB
a:6:{i:0;a:6:{s:10:"custom_css";s:29:"container_24 container_header";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:4:{i:0;s:6:"header";i:1;s:8:"em_area2";i:2;s:11:"breadcrumbs";i:3;s:15:"global_messages";}}i:1;a:6:{s:10:"custom_css";s:7:"emarea2";s:10:"inner_html";s:79:"<div class="container_24"><div class="emarea2_position">{{content}}</div></div>";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:8:"em_area1";}}i:2;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:12:{i:0;s:5:"clear";i:1;a:11:{s:6:"column";s:1:"5";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area3";}}i:2;a:11:{s:6:"column";s:2:"14";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area4";}}i:3;a:11:{s:6:"column";s:1:"5";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:1;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area5";}}i:4;s:5:"clear";i:5;a:11:{s:6:"column";s:2:"19";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:3:{i:0;s:9:"em_area16";i:1;s:7:"content";i:2;s:9:"em_area17";}}i:6;a:11:{s:6:"column";s:1:"5";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:1;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:3:{i:0;s:9:"em_area14";i:1;s:5:"right";i:2;s:9:"em_area15";}}i:7;s:5:"clear";i:8;a:11:{s:6:"column";s:2:"12";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area6";}}i:9;a:11:{s:6:"column";s:1:"7";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area7";}}i:10;a:11:{s:6:"column";s:1:"5";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:1;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area8";}}i:11;s:5:"clear";}}i:3;a:6:{s:10:"custom_css";s:12:"container_24";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:2:{i:0;s:8:"em_area9";i:1;s:9:"em_area18";}}i:4;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:45:"<div class="wrapper_footer">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:5:{i:0;a:11:{s:6:"column";s:2:"16";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area10";}}i:1;a:11:{s:6:"column";s:1:"8";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:1;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area11";}}i:2;s:5:"clear";i:3;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:1;s:10:"custom_css";s:13:"grid24_footer";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"footer";}}i:4;s:5:"clear";}}i:5;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:15:"before_body_end";}}}
EOB
	)
);
$model->setData($data)->setStores(array(0))->save();


####################################################################################################
# INSERT STATIC BLOCKS
####################################################################################################
$helper = Mage::helper('em0074settings');
$block = Mage::getModel('cms/block');
$stores = array(0);
$prefixBlock = 'em0074_';

// EM0074 - Area 1 - Text
$dataBlock = array(
	'title' => 'EM0074 - Area 1 - Text',
	'identifier' => $prefixBlock.'area1_text',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<ul class="none hoz">
<li class="hide-lte2"><span class="icon pack f-left">icon</span>
<p style="margin-left: 40px;"><span class="h5">FREE SHIPPING</span><br /><span class="secondary small">Maecenas neque augue portam</span></p>
</li>
<li class="hide-lte1"><span class="icon text f-left">icon</span>
<p style="margin-left: 40px;"><span class="h5">MEMBERSHIP CARD</span><br /><span class="secondary small">Pellentesque mauris tortor ornare</span></p>
</li>
<li class="hide-lte1"><span class="icon lock f-left">icon</span>
<p style="margin-left: 40px;"><span class="h5">PRIVACY POLICY</span><br /><span class="secondary small">Maecenas neque augue</span></p>
</li>
</ul>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area1_text'] = $block->getId();

// EM0074 - Area 2 - Text
$dataBlock = array(
	'title' => 'EM0074 - Area 2 - Text',
	'identifier' => $prefixBlock.'area2_text',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<!-- 
USE:
- .box: add line border around
- .hide-lte0: hide this block on mobile view
- .f-left: float the element to left
- .f-right: float the element to right
-->
<div class="box hide-lte0" style="margin: 0;">
<div class="f-left"><strong><span class="h2" style="color: #339966;">UNIQUE GIFTS</span> &amp; <span class="h2" style="color: #993300;">PERSONALISED GIFTS</span>&nbsp;</strong><span class="normal h4">Lorem ipsum dolor sit amet</span></div>
<div class="f-right">{{block type="newsletter/subscribe" name="area2.newsletter" template="newsletter/subscribe.phtml"}}</div>
</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area2_text'] = $block->getId();

// EM0074 - Area 3 - Links
$dataBlock = array(
	'title' => 'EM0074 - Area 3 - Links',
	'identifier' => $prefixBlock.'area3_links',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<!-- USE:
- .box: add line border around the element
- .hide-lte0: hide this block on mobile view
- .none: make the list have no circle indent and no padding
- .secondary2: use secondary 2 color as configured in the theme settings
-->
<div class="box hide-lte0">
<h5>MEN</h5>
<hr />
<ul class="none">
<li><a href="#">ipsum dolor sit amet</a></li>
<li><a href="#">consectetur adipisicing elit</a></li>
<li><a href="#">sed do eiusmod</a></li>
<li><a href="#">tempor incididunt ut labore</a></li>
<li><a href="#">dolore magna aliqua</a></li>
<li><a class="secondary2 underline small" href="#">MORE</a></li>
</ul>
<h5>WOMEN</h5>
<hr />
<ul class="none">
<li><a href="#">Ut enim ad minim</a></li>
<li><a href="#">quis nostrud exercitation</a></li>
<li><a href="#">ullamco laboris</a></li>
<li><a href="#">ut aliquip ex</a></li>
<li><a href="#">ea commodo consequat</a></li>
<li><a class="secondary2 underline small" href="#">MORE</a></li>
</ul>
<h5>BRANDS</h5>
<h5>SALE OFF</h5>
<h5>NEW!</h5>
</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area3_links'] = $block->getId();

// EM0074 - Area 5 - Banners
$dataBlock = array(
	'title' => 'EM0074 - Area 5 - Banners',
	'identifier' => $prefixBlock.'area5_banners',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p><a href="#"><img class="fluid" src="{{skin url="images/media/area5_banner1.jpg"}}" alt="area5_banner1" /></a></p>
<p><a href="#"><img class="fluid" src="{{skin url="images/media/area5_banner2.jpg"}}" alt="area5_banner2" /></a></p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area5_banners'] = $block->getId();

// EM0074 - Area 6 - Banner
$dataBlock = array(
	'title' => 'EM0074 - Area 6 - Banner',
	'identifier' => $prefixBlock.'area6_banner',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p><a href="#"><img class="fluid" src="{{skin url="images/media/area6_banner1.jpg"}}" alt="area6_banner1" /></a></p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area6_banner'] = $block->getId();

// EM0074 - Area 7 - Banners
$dataBlock = array(
	'title' => 'EM0074 - Area 7 - Banners',
	'identifier' => $prefixBlock.'area7_banners',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p><a href="#"><img class="fluid" src="{{skin url="images/media/area7_banner1.jpg"}}" alt="area7_banner1" /></a></p>
<p><a href="#"><img class="fluid" src="{{skin url="images/media/area7_banner2.jpg"}}" alt="area7_banner2" /></a></p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area7_banners'] = $block->getId();

// EM0074 - Area 8 - Banner
$dataBlock = array(
	'title' => 'EM0074 - Area 8 - Banner',
	'identifier' => $prefixBlock.'area8_banner',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p><a href="#"><img class="fluid" src="{{skin url="images/media/area8_banner1.jpg"}}" alt="area8_banner1" /></a></p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area8_banner'] = $block->getId();

// EM0074 - Area 9 - Brands
$dataBlock = array(
	'title' => 'EM0074 - Area 9 - Brands',
	'identifier' => $prefixBlock.'area9_brands',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<ul class="none hoz">
<li class="item"><a href="#"><span class="brand-logo mango">Mango</span></a></li>
<li class="item"><a href="#"><span class="brand-logo zara">Zara</span></a></li>
<li class="item"><a href="#"><span class="brand-logo levis">Levis</span></a></li>
<li class="item"><a href="#"><span class="brand-logo dior">Dior</span></a></li>
<li class="item"><a href="#"><span class="brand-logo forever21">Forever 21</span></a></li>
<li class="item"><a href="#"><span class="brand-logo diesel">Diesel</span></a></li>
<li class="item"><a href="#"><span class="brand-logo ck">Calvin Klein</span></a></li>
</ul>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area9_brands'] = $block->getId();

// EM0074 - Area 10 - Links
$dataBlock = array(
	'title' => 'EM0074 - Area 10 - Links',
	'identifier' => $prefixBlock.'area10_links',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="secondary">
<div class="grid_3 alpha">
<p class="h5">SUPPORT</p>
<ul class="none">
<li><a href="#">Consectetur adipiscing</a></li>
<li><a href="#">Mauris tincidunt </a></li>
<li><a href="#">Suspendisse lorem</a></li>
<li><a href="#">Vivamus quam</a></li>
<li><a href="#">Nam fermentum eros</a></li>
<li><a href="#">Elementum vel </a></li>
</ul>
</div>
<div class="grid_3">
<p class="h5">INFORMATION</p>
<ul class="none">
<li><a href="#">Suspendisse varius</a></li>
<li><a href="#">Fusce pharetra </a></li>
<li><a href="#">Praesent suscipit</a></li>
<li><a href="#">Sollicitudin non</a></li>
<li><a href="#">Imperdiet rhoncus</a></li>
<li><a href="#">Maecenas eget </a></li>
</ul>
</div>
<div class="grid_3">
<p class="h5">LET'S BE FRIENDS</p>
<ul class="none">
<li><span class="icon facebook">icon</span><a href="#">Facebook</a></li>
<li><span class="icon twitter">icon</span><a href="#"> Twitter</a></li>
<li><span class="icon googleplus">icon</span><a href="#"> Google Plus</a></li>
<li><span class="icon pinterest">icon</span><a href="#"> Pinterest</a></li>
<li><span class="icon feed">icon</span><a href="#"> RSS Feed</a></li>
</ul>
</div>
<div class="grid_6 omega">
<p class="h5">NETWORK PAYMENT SYSTEMS</p>
<p><small>Lorem ipsum dolor sit amet, consectetur adipiscing sed ornare pharetra placerat. Mauris et elit quam tincidunt </small></p>
<p><span class="custom-logo paymentmethods">Paypal - Visa - American Express - MasterCard</span></p>
<p class="h5">DELIVERY SERVICES</p>
<p><small>Lorem ipsum dolor sit amet, consectetur adipiscing sed ornare pharetra placerat. Mauris et elit quam tincidunt </small></p>
<p><span class="custom-logo shippingmethods">FedEx - DHL - UPS</span></p>
</div>
<hr class="clear" />
<div class="grid_9 alpha">
<p class="h5">OUR BRANDS</p>
<div class="grid_3 alpha">
<ul class="none">
<li><a href="#">Suspendisse varius</a></li>
<li><a href="#">Fusce pharetra </a></li>
<li><a href="#">Praesent suscipit</a></li>
<li><a href="#">Sollicitudin non</a></li>
<li><a href="#">Imperdiet rhoncus</a></li>
<li><a href="#">Maecenas eget </a></li>
<li><a href="#">Suspendisse varius</a></li>
<li><a href="#">Fusce pharetra </a></li>
<li><a href="#">Praesent suscipit</a></li>
<li><a href="#">Sollicitudin non</a></li>
<li><a href="#">Imperdiet rhoncus</a></li>
<li><a href="#">Maecenas eget </a></li>
<li><a href="#">Praesent suscipit</a></li>
<li><a href="#">Sollicitudin non</a></li>
<li><a href="#">Imperdiet rhoncus</a></li>
<li><a href="#">Maecenas eget </a></li>
<li><a href="#">Suspendisse varius</a></li>
</ul>
</div>
<div class="grid_3">
<ul class="none">
<li><a href="#">Consectetur adipiscing</a></li>
<li><a href="#">Mauris tincidunt </a></li>
<li><a href="#">Suspendisse lorem</a></li>
<li><a href="#">Vivamus quam</a></li>
<li><a href="#">Nam fermentum eros</a></li>
<li><a href="#">Elementum vel </a></li>
<li><a href="#">Praesent suscipit</a></li>
<li><a href="#">Sollicitudin non</a></li>
<li><a href="#">Imperdiet rhoncus</a></li>
<li><a href="#">Maecenas eget </a></li>
<li><a href="#">Suspendisse varius</a></li>
<li><a href="#">Fusce pharetra </a></li>
<li><a href="#">Praesent suscipit</a></li>
<li><a href="#">Consectetur adipiscing</a></li>
<li><a href="#">Sollicitudin non</a></li>
<li><a href="#">Imperdiet rhoncus</a></li>
<li><a href="#">Maecenas eget </a></li>
</ul>
</div>
<div class="grid_3 omega">
<ul class="none">
<li><a href="#">Suspendisse varius</a></li>
<li><a href="#">Fusce pharetra </a></li>
<li><a href="#">Praesent suscipit</a></li>
<li><a href="#">Sollicitudin non</a></li>
<li><a href="#">Imperdiet rhoncus</a></li>
<li><a href="#">Maecenas eget </a></li>
<li><a href="#">Suspendisse varius</a></li>
<li><a href="#">Fusce pharetra </a></li>
<li><a href="#">Praesent suscipit</a></li>
<li><a href="#">Sollicitudin non</a></li>
<li><a href="#">Praesent suscipit</a></li>
<li><a href="#">Sollicitudin non</a></li>
<li><a href="#">Imperdiet rhoncus</a></li>
<li><a href="#">Maecenas eget </a></li>
<li><a href="#">Sollicitudin non</a></li>
<li><a href="#">Imperdiet rhoncus</a></li>
<li><a href="#">Maecenas eget </a></li>
</ul>
</div>
</div>
<div class="grid_6 omega">
<p class="h5">TOP CATEGORIES</p>
<ul class="none">
<li><a href="#">Lorem consectetur adipiscing</a></li>
<li><a href="#">Sed ornare pharetra</a></li>
<li><a href="#">Mauris quam tincidunt</a></li>
<li><a href="#">Suspendisse lectus</a></li>
<li><a href="#">Cras vitae sem augue</a></li>
<li><a href="#">Quisque ultrices mauris </a></li>
<li><a href="#">Suspendisse varius</a></li>
<li><a href="#">Sollicitudin non</a></li>
<li><a href="#">Imperdiet rhoncus</a></li>
<li><a href="#">Maecenas eget </a></li>
<li><a href="#">Fusce pharetra </a></li>
<li><a href="#">Praesent suscipit</a></li>
<li><a href="#">Sollicitudin non</a></li>
<li><a href="#">Maecenas eget </a></li>
<li><a href="#">Praesent suscipit</a></li>
<li><a href="#">Sollicitudin non</a></li>
<li><a href="#">Imperdiet rhoncus</a></li>
</ul>
</div>
<hr class="clear" /></div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area10_links'] = $block->getId();

// EM0074 - Area 11 - Blocks
$dataBlock = array(
	'title' => 'EM0074 - Area 11 - Blocks',
	'identifier' => $prefixBlock.'area11_blocks',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="secondary">
<h5>FOLLOW US ON FACEBOOK</h5>
<div id="fb-root">&nbsp;</div>
<script type="text/javascript">// <![CDATA[
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
// ]]></script>
<div class="fb-like-box" data-href="http://www.facebook.com/emthemes" data-width="500" data-show-faces="true" data-stream="false" data-header="true">&nbsp;</div>
<script type="text/javascript">// <![CDATA[
jQuery(function($) {
$('head').append('<style type="text/css">.fb-like-box, .fb-like-box > span, .fb-like-box > span > iframe { width:100% !important } #fb-root { display:none }</style>');
});
// ]]></script>
<p>&nbsp;</p>
<h5>INFORMATION SECURITY</h5>
<div class="box">
<p class="custom-logo norton f-left" style="margin-right: 30px;">norton secured</p>
<div class="custom-text">
<ul class="tick">
<li>Suspendisse elementu lorem consectetur puruse</li>
<li>Nunc euismod amet fermentum libero mattis lacu mauris ultrices vitae blandit sodales</li>
</ul>
</div>
<hr />
<ul class="tick">
<li>Donec dui nisl, suscipit at sollicitudin non imperdiet lacinia vulputate</li>
<li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</li>
</ul>
</div>
<h5>LANGUAGES</h5>
<div class="box">{{block type="page/switch" template="page/switch/flags.phtml"}}</div>
<h5>OUR PARTNER</h5>
<div class="box">
<ul class="none hoz">
<li><a href="#"><span class="brand-logo mango">Mango</span></a></li>
<li><a href="#"><span class="brand-logo forever21">Forever21</span></a></li>
<li><a href="#"><span class="brand-logo calvin">CalvinKlein</span></a></li>
</ul>
</div>
</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area11_blocks'] = $block->getId();

// EM0074 - Area 18 - Text
$dataBlock = array(
	'title' => 'EM0074 - Area 18 - Text',
	'identifier' => $prefixBlock.'area18_text',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="grid_6 alpha">
<p><span class="icon cart large f-left">icon</span><span class="h5">SHOPPING AT FASHIONISTA TODAY!</span><br /><span class="secondary small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</span></p>
</div>
<div class="grid_6">
<p><span class="icon tag large f-left">icon</span><span class="h5">SHOPPING DEAL ON HOLIDAY</span><br /><span class="secondary small">adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</span></p>
</div>
<div class="grid_6">
<p><span class="icon pack large f-left">icon</span><span class="h5">RETURN DAY &amp; SHIPPING</span><br /><span class="secondary small">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</span></p>
</div>
<div class="grid_6 omega">
<p><span class="icon mail large f-left">icon</span><span class="h5">CONTACT US NOW!</span><br /><span class="secondary small">ex ea commodo consequat. Duis aute irure dolor in reprehenderit</span></p>
</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area18_text'] = $block->getId();

// EM0074 - Area 13 - Left Callout
$dataBlock = array(
	'title' => 'EM0074 - Area 13 - Left Callout',
	'identifier' => $prefixBlock.'area13_leftcallout',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<a href="#"><img class="fluid" src="{{skin url='images/media/col_left_callout.jpg'}}" alt="" /></a>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area13_leftcallout'] = $block->getId();

// EM0074 - Area 15 - Right Callout
$dataBlock = array(
	'title' => 'EM0074 - Area 15 - Right Callout',
	'identifier' => $prefixBlock.'area15_rightcallout',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<a href="#"><img class="fluid" src="{{skin url='images/media/col_right_callout.jpg'}}" alt="" /></a>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area15_rightcallout'] = $block->getId();

// EM0074 - Product Collateral Sample
$dataBlock = array(
	'title' => 'EM0074 - Product Collateral Sample',
	'identifier' => $prefixBlock.'product_collateral_sample',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p>A sample of additional collateral tabs that you can insert as a widget in static the backend.</p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['product_collateral_sample'] = $block->getId();

// EM0074 - Area 16 - Sample Block
$dataBlock = array(
	'title' => 'EM0074 - Area 16 - Sample Block',
	'identifier' => $prefixBlock.'area16_sample_block',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="box" style="background-color: #ffff99;">This is a sample content in position <strong>Area 16</strong>. You can add your own content by insert widget into position <strong>Area 16</strong>.</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area16_sample_block'] = $block->getId();

// EM0074 - Area 17 - Sample Block
$dataBlock = array(
	'title' => 'EM0074 - Area 17 - Sample Block',
	'identifier' => $prefixBlock.'area17_sample_block',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="box" style="background-color: #ffff99;">This is a sample content in position <strong>Area 17</strong>. You can add your own content by insert widget into position <strong>Area 17</strong>.</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area17_sample_block'] = $block->getId();

// EM0074 - Extra Hint
$dataBlock = array(
	'title' => 'EM0074 - Extra Hint',
	'identifier' => $prefixBlock.'extra_hint',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="box" style="background-color: #ffff99;">This is a sample content in position <strong>Extra Hint</strong>. You can add your own content by insert widget into position <strong>Extra Hint</strong>.</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['extra_hint'] = $block->getId();

// EM0074 - Alert Urls
$dataBlock = array(
	'title' => 'EM0074 - Alert Urls',
	'identifier' => $prefixBlock.'alert_urls',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="box" style="background-color: #ffff99;">This is a sample content in position <strong>Alert Urls</strong>. You can add your own content by insert widget into position <strong>Alert Urls</strong>.</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['alert_urls'] = $block->getId();

// EM0074 - Product View Short Description After
$dataBlock = array(
	'title' => 'EM0074 - Product View Short Description After',
	'identifier' => $prefixBlock.'product_view_short_description_after',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="box" style="background-color: #ffff99;">This is a sample content in position <strong>Product View Short Description After</strong>. You can add your own content by insert widget into position <strong>Product View Short Description After</strong>.</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['product_view_short_description_after'] = $block->getId();

####################################################################################################
# INSERT PAGE
####################################################################################################
 
$prefixPage = 'em0074_';
$page = Mage::getModel('cms/page');

// Home
$dataPage = array(
	'title'				=> 'EM0074 Fashionista Magento Theme - Homepage',
	'identifier' 		=> $prefixPage.'home',
	'stores'			=> $stores,
	'content_heading'	=> '',
	'root_template'		=> 'one_column',
	'content'			=> <<<EOB
<!-- empty -->
EOB
);
$helper->insertPage($dataPage);

// Typography
$dataPage = array(
	'title'				=> 'EM0074 Typography',
	'identifier' 		=> 'em0074_typography',
	'stores'			=> $stores,
	'content_heading'	=> 'EM0074 Typography',
	'root_template'		=> 'one_column',
	'content'			=> <<<EOB
<h2>General Elements</h2>
<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<ul>
<li>Bullet List 1</li>
<ul>
<li>Bullet List 1.1</li>
<li>Bullet List 1.2</li>
<li>Bullet List 1.3</li>
<li>Bullet List 1.4</li>
</ul>
<li>Bullet List 2</li>
<li>Bullet List 3</li>
<li>Bullet List 4</li>
</ul>
<ol>
<li>Number List 1</li>
<ol>
<li>Number List 1.1</li>
<li>Number List 1.2</li>
<li>Number List 1.3</li>
<li>Number List 1.4</li>
</ol>
<li>Number List 2</li>
<li>Number List 3</li>
<li>Number List 4</li>
</ol><dl><dt>Definition title dt</dt><dd>Defination description dd</dd><dt>Definition title dt</dt><dd>Defination description dd</dd></dl>
<p><code>Code tag:&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</code></p>
<blockquote>
<p>block quote&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</blockquote>
<div class="box f-left">element with class <strong>.f-left</strong></div>
<div class="box f-right">element with class <strong>.f-right</strong></div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<h2>Tables</h2>
<p>Table with class <strong>.data-table</strong></p>
<table class="data-table" style="width: 100%;" border="0">
<thead>
<tr><th>THEAD TH</th><th>THEAD TH</th><th>THEAD TH</th><th>THEAD TH</th><th>THEAD TH</th></tr>
</thead>
<tbody>
<tr>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
</tr>
<tr>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
</tr>
<tr>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
</tr>
</tbody>
</table>
<h2>Custom CSS Classes</h2>
<p class="normal">this is a paragraph with class <strong>.normal</strong></p>
<p class="primary">this is a paragraph with class <strong>.primary</strong></p>
<p class="secondary">this is a paragraph with class <strong>.secondary</strong></p>
<p class="secondary2">this is a paragraph with class <strong>.secondary2</strong></p>
<p class="small">tag <strong>small</strong> and class <strong>.small</strong></p>
<p class="underline">element with class <strong>.underline</strong></p>
<p><strong>ul.none</strong> and <strong>ol.none</strong>:</p>
<ul class="none">
<li>Bullet List 1</li>
<ul>
<li>Bullet List 1.1</li>
<li>Bullet List 1.2</li>
<li>Bullet List 1.3</li>
<li>Bullet List 1.4</li>
</ul>
<li>Bullet List 2</li>
<li>Bullet List 3</li>
<li>Bullet List 4</li>
</ul>
<p><strong>ul.hoz</strong> and <strong>ol.hoz</strong>:</p>
<ul class="hoz">
<li>Bullet List 1</li>
<li>Bullet List 2</li>
<li>Bullet List 3</li>
<li>Bullet List 4</li>
</ul>
<div class="box">
<p>paragraph with class <strong>.box</strong>:</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<p class="bottom">Paragraph with class <strong>.bottom</strong> always has margin-bottom = 0.</p>
<p>Add class <strong>.hide-lte2</strong> to hide element when screen's width less than 1280px.</p>
<p class="box hide-lte2">This block will disappear when resize window less than 1280px</p>
<p>Add class <strong>.hide-lte1</strong> to hide element when screen's width less than 980px.</p>
<p class="box hide-lte1">This block will disappear when resize window less than 980px</p>
<p>Add class <strong>.hide-lte0</strong> to hide element when screen's width less than 760px.</p>
<p class="box hide-lte0">This block will disappear when resize window less than 760px</p>
<h2>Icons</h2>
<table class="data-table" border="0">
<tbody>
<tr>
<td align="center" valign="top">
<p>.icon.pack</p>
<p><span class="icon pack">span.icon.pack</span></p>
</td>
<td align="center" valign="top">
<p>.icon.text</p>
<p><span class="icon text">span.icon.text</span></p>
</td>
<td align="center" valign="top">
<p>.icon.lock</p>
<p><span class="icon lock">span.icon.lock</span></p>
</td>
<td align="center" valign="top">
<p>.icon.cart</p>
<p><span class="icon cart">span.icon.cart</span></p>
</td>
</tr>
<tr>
<td align="center" valign="top">
<p>.icon.cart.large</p>
<p><span class="icon cart large">span.icon.cart.large</span></p>
</td>
<td align="center" valign="top">
<p>.icon.tag.large</p>
<p><span class="icon tag large">span.icon.tag.large</span></p>
</td>
<td align="center" valign="top">
<p>.icon.tag.pack</p>
<p><span class="icon pack large">span.icon.pack.large</span></p>
</td>
<td align="center" valign="top">
<p>.icon.mail.large</p>
<p><span class="icon mail large">span.icon.mail.large</span></p>
</td>
</tr>
<tr>
<td align="center" valign="top">
<p>.icon.facebook</p>
<p><span class="icon facebook">span.icon.facebook</span></p>
</td>
<td align="center" valign="top">
<p>.icon.twitter</p>
<p><span class="icon twitter">span.icon.twitter</span></p>
</td>
<td align="center" valign="top">
<p>.icon.googleplus</p>
<p><span class="icon googleplus">span.icon.googleplus</span></p>
</td>
<td align="center" valign="top">
<p>.icon.pinterest</p>
<p><span class="icon pinterest">span.icon.pinterest</span></p>
</td>
<td align="center" valign="top">
<p>.icon.feed</p>
<p><span class="icon feed">span.icon.feed</span></p>
</td>
</tr>
<tr>
<td align="center" valign="top">
<p>.icon.search</p>
<p><span class="icon search">span.icon.search</span></p>
</td>
<td align="center" valign="top">
<p>.icon.tick</p>
<p><span class="icon tick">span.icon.tick</span></p>
</td>
</tr>
<tr>
<td align="center" valign="top">
<p>.icon.flag.uk</p>
<p><span class="icon flag uk">span.icon.flag.uk</span></p>
</td>
<td align="center" valign="top">
<p>.icon.flag.us</p>
<p><span class="icon flag us">span.icon.flag.us</span></p>
</td>
<td align="center" valign="top">
<p>.icon.flag.ca</p>
<p><span class="icon flag ca">span.icon.flag.ca</span></p>
</td>
<td align="center" valign="top">
<p>.icon.flag.fr</p>
<p><span class="icon flag fr">span.icon.flag.fr</span></p>
</td>
<td align="center" valign="top">
<p>.icon.flag.de</p>
<p><span class="icon flag de">span.icon.flag.de</span></p>
</td>
</tr>
</tbody>
</table>
<h2>Brands</h2>
<table class="data-table" border="0">
<tbody>
<tr>
<td align="center" valign="top">
<p>.brand-logo.mango</p>
<p><span class="brand-logo mango">span.brand-logo.mango</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.zara</p>
<p><span class="brand-logo zara">span.brand-logo.zara</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.levis</p>
<p><span class="brand-logo levis">span.brand-logo.levis</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.dior</p>
<p><span class="brand-logo dior">span.brand-logo.dior</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.forever21</p>
<p><span class="brand-logo forever21">span.brand-logo.forever21</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.diesel</p>
<p><span class="brand-logo diesel">span.brand-logo.diesel</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.ck</p>
<p><span class="brand-logo ck">span.brand-logo.ck</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.lacoste</p>
<p><span class="brand-logo lacoste">span.brand-logo.lacoste</span></p>
</td>
</tr>
</tbody>
</table>
<h2>Logo</h2>
<table class="data-table" border="0">
<tbody>
<tr>
<td align="center" valign="top">
<p>.custom-logo.paymentmethods</p>
<p><span class="custom-logo paymentmethods">span.custom-logo.paymentmethods</span></p>
</td>
<td align="center" valign="top">
<p>.custom-logo.shippingmethods</p>
<p><span class="custom-logo shippingmethods">span.custom-logo.shippingmethods</span></p>
</td>
<td align="center" valign="top">
<p>.custom-logo.norton</p>
<p><span class="custom-logo norton">span.custom-logo.norton</span></p>
</td>
</tr>
</tbody>
</table>
<p>image with class <strong>.fluid</strong>:</p>
<p><img class="fluid" title="image with class .fluid" src="{{skin url="images/media/area5_banner1.jpg"}}" alt="image with class .fluid" /></p>
EOB
);
$helper->insertPage($dataPage);

// Widgets
$dataPage = array(
	'title'				=> 'Widgets',
	'identifier' 		=> 'widgets',
	'stores'			=> $stores,
	'content_heading'	=> '',
	'root_template'		=> 'one_column',
	'content'			=> <<<EOB
<h2>Demo EM Slideshow Widget</h2>
<div style="width: 500px;">{{widget type="slideshowwidget/create" text1="<span>Slide 1</span>" url1="#" image1="slide1.jpg" text2="<span>Slide 2</span>" url2="#" image2="slide2.jpg" text3="<span>Slide 3</span>" url3="#" image3="slide3.jpg" effect="random" slices="15" boxcols="8" boxrows="4" animspeed="500" pausetime="5000" directionnav="true" controlnav="true" controlnavthumbs="false" pauseonhover="true" prevtext="Prev" nexttext="Next" randomstart="true"}}</div>
<hr />
<h2>Demo EM Featured Products Widget</h2>
<table style="width: 100%;" border="0">
<tbody>
<tr>
<td style="width: 50%;" valign="top">
<h3>Grid View</h3>
<p>{{widget type="dynamicproducts/dynamicproducts" order_by="name asc" featured_choose="em_featured" limit_count="10" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_featured_products/featured_grid.phtml"}}</p>
</td>
<td style="width: 50%;" valign="top">
<h3>Grid View with column count = 3</h3>
<p>{{widget type="dynamicproducts/dynamicproducts" order_by="name asc" featured_choose="em_featured" limit_count="10" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_featured_products/featured_grid.phtml" column_count="3"}}</p>
<p>&nbsp;</p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<table style="width: 100%;" border="0">
<tbody>
<tr>
<td style="width: 50%;" valign="top">
<h3>List View</h3>
<p>{{widget type="dynamicproducts/dynamicproducts" order_by="name asc" featured_choose="em_featured" limit_count="10" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_featured_products/featured_list.phtml"}}</p>
</td>
<td style="width: 50%;" valign="top">
<h3>List View with column count = 2</h3>
<p>{{widget type="dynamicproducts/dynamicproducts" order_by="name asc" featured_choose="em_featured" limit_count="10" column_count="2" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_featured_products/featured_list.phtml"}}</p>
<p>&nbsp;</p>
</td>
</tr>
</tbody>
</table>
<hr />
<h2>Demo EM Bestseller Products Widget</h2>
<table style="width: 100%;" border="0">
<tbody>
<tr>
<td style="width: 50%;" valign="top">
<h3>Grid View</h3>
<p>{{widget type="bestsellerproducts/list" order_by="name asc" limit_count="10" frontend_title="Bestseller Products" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_bestseller_products/bestseller_grid.phtml" column_count="4"}}</p>
</td>
<td style="width: 50%;" valign="top">
<h3>List View</h3>
<p>{{widget type="bestsellerproducts/list" order_by="name asc" limit_count="10" frontend_title="Bestseller Products" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_bestseller_products/bestseller_list.phtml" column_count="4"}}</p>
<div>&nbsp;</div>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<hr />
<h2>&nbsp;Demo EM New Products Widget</h2>
<table style="width: 100%;" border="0">
<tbody>
<tr>
<td style="width: 50%;" valign="top">
<h3>Grid View</h3>
<p>{{widget type="newproducts/list" order_by="name asc" limit_count="10" frontend_title="Bestseller Products" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_new_products/new_grid.phtml" column_count="4"}}</p>
</td>
<td style="width: 50%;" valign="top">
<h3>List View</h3>
<p>{{widget type="newproducts/list" order_by="name asc" limit_count="10" frontend_title="Bestseller Products" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_new_products/new_list.phtml" column_count="4"}}</p>
<div>&nbsp;</div>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<hr />
<h2>&nbsp;Demo EM Sale Products Widget</h2>
<table style="width: 100%;" border="0">
<tbody>
<tr>
<td style="width: 50%;" valign="top">
<h3>Grid View</h3>
<p>{{widget type="saleproducts/list" order_by="name asc" limit_count="10" frontend_title="Bestseller Products" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_sale_products/sale_grid.phtml" column_count="4"}}</p>
</td>
<td style="width: 50%;" valign="top">
<h3>List View</h3>
<p>{{widget type="saleproducts/list" order_by="name asc" limit_count="10" frontend_title="Bestseller Products" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_sale_products/sale_list.phtml" column_count="4"}}</p>
<div>&nbsp;</div>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<hr />
<h2>&nbsp;Demo EM Slider Widget</h2>
<div class="grid_12">
<h3>Vertical Sliding</h3>
<div>{{widget type="sliderwidget/slide" instance="9" direction="1" container=".products-grid" slider_height="355" items_per_slide="2"}}</div>
</div>
<div class="grid_12">
<h3>Horizontal Sliding</h3>
<div>{{widget type="sliderwidget/slide" instance="9" container=".products-grid" items_per_slide="3"}}</div>
</div>
<p>&nbsp;</p>
<hr />
<h2>&nbsp;Demo EM Tabs Widget</h2>
<p>{{widget type="tabs/group" title_1="YTo0OntpOjA7czo1OiJUYWIgMSI7aToxO3M6MDoiIjtpOjM7czowOiIiO2k6MjtzOjA6IiI7fQ==" block_1="6" title_2="YTo0OntpOjA7czo1OiJUYWIgMiI7aToxO3M6MDoiIjtpOjM7czowOiIiO2k6MjtzOjA6IiI7fQ==" block_2="5" title_3="YTo0OntpOjA7czo1OiJUYWIgMyI7aToxO3M6MDoiIjtpOjM7czowOiIiO2k6MjtzOjA6IiI7fQ==" block_3="15" template="emtabs/group.phtml"}}</p>
<p>&nbsp;</p>
EOB
);
$helper->insertPage($dataPage);

####################################################################################################
# INSERT WIDGET INSTANCE
####################################################################################################

$widgetInstance = Mage::getModel('widget/widget_instance');
$package_theme  = 'default/em0074';

// EM0074 - Area 1 - Text
$widget = array(
	'type' => 'cmswidget/widget_block',
	'title' => 'EM0074 - Area 1 - Text',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:1:"6";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:9:"all_pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"1";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"1";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"1";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"1";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"1";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"1";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"1";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"1";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"1";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:4:{s:7:"page_id";s:1:"1";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";s:5:"block";s:8:"em_area1";}s:5:"pages";a:3:{s:7:"page_id";s:1:"1";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
	)
);
em0074_install_fix_widget_block_id($widget, $block_id['area1_text']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0074 - Area 2 - Text
$widget = array(
	'type' => 'cmswidget/widget_block',
	'title' => 'EM0074 - Area 2 - Text',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:1:"7";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:9:"all_pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"2";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"2";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"2";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"2";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"2";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"2";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"2";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"2";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"2";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:4:{s:7:"page_id";s:1:"2";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";s:5:"block";s:8:"em_area2";}s:5:"pages";a:3:{s:7:"page_id";s:1:"2";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
	)
);
em0074_install_fix_widget_block_id($widget, $block_id['area2_text']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0074 - Area 3 - Links
$widget = array(
	'title' => 'EM0074 - Area 3 - Links',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:1:"8";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:1:"3";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:8:"em_area3";}}}
EOB
	)
);
em0074_install_fix_widget_block_id($widget, $block_id['area3_links']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0074 - Area 5 - Banners
$widget = array(
	'title' => 'EM0074 - Area 5 - Banners',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:1:"9";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:1:"4";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:8:"em_area5";}}}
EOB
	)
);
em0074_install_fix_widget_block_id($widget, $block_id['area5_banners']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0074 - Area 4 - Slideshow
$widget = array(
	'title' => 'EM0074 - Area 4 - Slideshow',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:50:{s:5:"text1";s:85:"<span>GLAMOUR</span><span> Malesuada felis</span> <a href="#">shop new collection</a>";s:12:"thumbsimage1";s:0:"";s:4:"url1";s:14:"furniture.html";s:6:"image1";s:10:"slide1.jpg";s:5:"text2";s:85:"<span>GLAMOUR</span><span> Malesuada felis</span> <a href="#">shop new collection</a>";s:12:"thumbsimage2";s:0:"";s:4:"url2";s:16:"electronics.html";s:6:"image2";s:10:"slide2.jpg";s:5:"text3";s:85:"<span>GLAMOUR</span><span> Malesuada felis</span> <a href="#">shop new collection</a>";s:12:"thumbsimage3";s:0:"";s:4:"url3";s:12:"apparel.html";s:6:"image3";s:10:"slide3.jpg";s:5:"text4";s:0:"";s:12:"thumbsimage4";s:0:"";s:4:"url4";s:0:"";s:6:"image4";s:0:"";s:5:"text5";s:0:"";s:12:"thumbsimage5";s:0:"";s:4:"url5";s:0:"";s:6:"image5";s:0:"";s:5:"text6";s:0:"";s:12:"thumbsimage6";s:0:"";s:4:"url6";s:0:"";s:6:"image6";s:0:"";s:5:"text7";s:0:"";s:12:"thumbsimage7";s:0:"";s:4:"url7";s:0:"";s:6:"image7";s:0:"";s:5:"text8";s:0:"";s:12:"thumbsimage8";s:0:"";s:4:"url8";s:0:"";s:6:"image8";s:0:"";s:5:"text9";s:0:"";s:12:"thumbsimage9";s:0:"";s:4:"url9";s:0:"";s:6:"image9";s:0:"";s:6:"effect";s:6:"random";s:6:"slices";s:2:"15";s:7:"boxcols";s:1:"8";s:7:"boxrows";s:1:"4";s:9:"animspeed";s:3:"500";s:9:"pausetime";s:4:"5000";s:10:"startslide";s:1:"0";s:12:"directionnav";s:5:"false";s:10:"controlnav";s:4:"true";s:16:"controlnavthumbs";s:5:"false";s:12:"pauseonhover";s:4:"true";s:8:"prevtext";s:4:"Prev";s:8:"nexttext";s:4:"Next";s:11:"randomstart";s:4:"true";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:1:"5";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:8:"em_area4";}}}
EOB
	)
);
$widgetInstance->setData($widget)->setType('slideshowwidget/create')->setPackageTheme($package_theme)->save();

// EM0074 - Area 6 - Banner
$widget = array(
	'title' => 'EM0074 - Area 6 - Banner',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"10";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:1:"6";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:8:"em_area6";}}}
EOB
	)
);
em0074_install_fix_widget_block_id($widget, $block_id['area6_banner']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0074 - Area 7 - Banners
$widget = array(
	'title' => 'EM0074 - Area 7 - Banners',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"11";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:1:"7";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:8:"em_area7";}}}
EOB
	)
);
em0074_install_fix_widget_block_id($widget, $block_id['area7_banners']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0074 - Area 8 - Banner
$widget = array(
	'title' => 'EM0074 - Area 8 - Banner',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"12";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:1:"8";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:8:"em_area8";}}}
EOB
	)
);
em0074_install_fix_widget_block_id($widget, $block_id['area8_banner']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0074 - Area 9 - Customer's Choice
$widget = array(
	'title' => 'EM0074 - Area 9 - Customer\'s Choice',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:25:{s:8:"order_by";s:8:"name asc";s:15:"featured_choose";s:11:"em_featured";s:11:"limit_count";s:2:"16";s:12:"column_count";s:2:"99";s:12:"custom_class";s:0:"";s:14:"frontend_title";s:17:"Customer's Choice";s:10:"item_class";s:0:"";s:20:"frontend_description";s:0:"";s:10:"item_width";s:3:"110";s:11:"item_height";s:3:"275";s:12:"item_spacing";s:2:"40";s:15:"thumbnail_width";s:2:"95";s:16:"thumbnail_height";s:2:"95";s:17:"show_product_name";s:4:"true";s:14:"show_thumbnail";s:4:"true";s:7:"alt_img";s:0:"";s:16:"show_description";s:4:"true";s:10:"show_price";s:4:"true";s:12:"show_reviews";s:4:"true";s:14:"show_addtocart";s:5:"false";s:10:"show_addto";s:5:"false";s:10:"show_label";s:4:"true";s:15:"choose_template";s:40:"em_featured_products/featured_grid.phtml";s:12:"custom_theme";s:0:"";s:14:"cache_lifetime";s:0:"";}
EOB
	,
	'page_groups'=>	null
);
$widgetInstance->setData($widget)->setType('dynamicproducts/dynamicproducts')->setPackageTheme($package_theme)->save();
$widget_id = $widgetInstance->getId();

// EM0074 - Area 9 - Customer's Choice Slider
$widget = array(
	'title' => 'EM0074 - Area 9 - Customer\'s Choice Slider',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:9:{s:8:"instance";s:1:"9";s:9:"direction";s:1:"0";s:9:"container";s:14:".products-grid";s:12:"slider_width";s:0:"";s:13:"slider_height";s:0:"";s:12:"auto_sliding";s:0:"";s:8:"circular";s:1:"0";s:15:"items_per_slide";s:1:"1";s:9:"css_class";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:1:"9";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:8:"em_area9";}}}
EOB
	)
);
em0074_install_fix_widget_instance_id($widget, $widget_id);
$widgetInstance->setData($widget)->setType('sliderwidget/slide')->setPackageTheme($package_theme)->save();

// EM0074 - Area 9 - Brands
$widget = array(
	'title' => 'EM0074 - Area 9 - Brands',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"13";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:6:"Brands";}
EOB
	,
	'page_groups'=>	null
);
em0074_install_fix_widget_block_id($widget, $block_id['area9_brands']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();
$widget_id = $widgetInstance->getId();

// EM0074 - Area 9 - Brands Slider
$widget = array(
	'title' => 'EM0074 - Area 9 - Brands Slider',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:8:{s:8:"instance";s:2:"11";s:9:"direction";s:1:"0";s:9:"container";s:2:"ul";s:12:"slider_width";s:0:"";s:13:"slider_height";s:0:"";s:12:"auto_sliding";s:1:"0";s:15:"items_per_slide";s:1:"3";s:9:"css_class";s:6:"bottom";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"11";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:8:"em_area9";}}}
EOB
	)
);
em0074_install_fix_widget_instance_id($widget, $widget_id);
$widgetInstance->setData($widget)->setType('sliderwidget/slide')->setPackageTheme($package_theme)->save();

// EM0074 - Area 18 - Text
$widget = array(
	'title' => 'EM0074 - Area 18 - Text',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"14";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:9:"all_pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:4:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";s:5:"block";s:9:"em_area18";}s:5:"pages";a:3:{s:7:"page_id";s:2:"12";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
	)
);
em0074_install_fix_widget_block_id($widget, $block_id['area18_text']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0074 - Area 10 - Links
$widget = array(
	'title' => 'EM0074 - Area 10 - Links',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"15";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:9:"all_pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:4:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";s:5:"block";s:9:"em_area10";}s:5:"pages";a:3:{s:7:"page_id";s:2:"13";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
	)
);
em0074_install_fix_widget_block_id($widget, $block_id['area10_links']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0074 - Area 11 - Blocks
$widget = array(
	'title' => 'EM0074 - Area 11 - Blocks',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"16";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:9:"all_pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"14";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"14";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"14";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"14";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"14";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"14";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"14";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"14";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"14";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:4:{s:7:"page_id";s:2:"14";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";s:5:"block";s:9:"em_area11";}s:5:"pages";a:3:{s:7:"page_id";s:2:"14";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
	)
);
em0074_install_fix_widget_block_id($widget, $block_id['area11_blocks']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0074 - Area 13 - Left Callout
$widget = array(
	'title' => 'EM0074 - Area 13 - Left Callout',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:1:{s:8:"block_id";s:2:"17";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:9:"all_pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:5:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";s:5:"block";s:9:"em_area13";s:8:"template";s:37:"cms/widget/static_block/default.phtml";}s:5:"pages";a:3:{s:7:"page_id";s:2:"16";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
	)
);
em0074_install_fix_widget_block_id($widget, $block_id['area13_leftcallout']);
$widgetInstance->setData($widget)->setType('cms/widget_block')->setPackageTheme($package_theme)->save();

// EM0074 - Area 15 - Right Callout
$widget = array(
	'title' => 'EM0074 - Area 15 - Right Callout',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:1:{s:8:"block_id";s:2:"18";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"41";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"41";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"41";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"41";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"41";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"41";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"41";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"41";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"41";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"41";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:5:{s:7:"page_id";s:2:"41";s:3:"for";s:3:"all";s:13:"layout_handle";s:22:"checkout_onepage_index";s:5:"block";s:9:"em_area15";s:8:"template";s:37:"cms/widget/static_block/default.phtml";}}}
EOB
	)
);
em0074_install_fix_widget_block_id($widget, $block_id['area15_rightcallout']);
$widgetInstance->setData($widget)->setType('cms/widget_block')->setPackageTheme($package_theme)->save();

// EM0074 - Product Collateral Sample 1
$widget = array(
	'title' => 'EM0074 - Product Collateral Sample 1',
	'store_ids' => $stores,
	'sort_order' => 1,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"28";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:12:"Custom Tab 1";}
EOB
	,
	'page_groups'=> array(
		array(
			'page_group' => 'all_products',
			'all_products' => array(
				'layout_handle' => 'default,catalog_product_view',
				'for' => 'all',
				'block' => 'product.info.additonal_collateral'
			)
		)
	)
);
em0074_install_fix_widget_block_id($widget, $block_id['product_collateral_sample']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0074 - Product Collateral Sample N
$widget = array(
	'title' => 'EM0074 - Product Collateral Sample N',
	'store_ids' => $stores,
	'sort_order' => 2,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"28";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:12:"Custom Tab N";}
EOB
	,
	'page_groups'=> array(
		array(
			'page_group' => 'all_products',
			'all_products' => array(
				'layout_handle' => 'default,catalog_product_view',
				'for' => 'all',
				'block' => 'product.info.additonal_collateral'
			)
		)
	)
);
em0074_install_fix_widget_block_id($widget, $block_id['product_collateral_sample']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0074 - Area 16 - Sample Block
$widget = array(
	'title' => 'EM0074 - Area 16 - Sample Block',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> serialize(array(
		'block_id' => $block_id['area16_sample_block'],
		'custom_class' => '',
		'custom_html_wrapper_class' => '',
		'custom_html_wrapper_id' => '',
		'block_title' => '',
	)),
	'page_groups'=> array(
		array(
			'page_group' => 'all_products',
			'all_products' => array(
				'layout_handle' => 'default,catalog_product_view',
				'for' => 'all',
				'block' => 'em_area16'
			)
		)
	)
);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0074 - Area 17 - Sample Block
$widget = array(
	'title' => 'EM0074 - Area 17 - Sample Block',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> serialize(array(
		'block_id' => $block_id['area17_sample_block'],
		'custom_class' => '',
		'custom_html_wrapper_class' => '',
		'custom_html_wrapper_id' => '',
		'block_title' => '',
	)),
	'page_groups'=> array(
		array(
			'page_group' => 'all_products',
			'all_products' => array(
				'layout_handle' => 'default,catalog_product_view',
				'for' => 'all',
				'block' => 'em_area17'
			)
		)
	)
);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0074 - Extra Hint
$widget = array(
	'title' => 'EM0074 - Extra Hint',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> serialize(array(
		'block_id' => $block_id['extra_hint'],
		'custom_class' => '',
		'custom_html_wrapper_class' => '',
		'custom_html_wrapper_id' => '',
		'block_title' => '',
	)),
	'page_groups'=> array(
		array(
			'page_group' => 'all_products',
			'all_products' => array(
				'layout_handle' => 'default,catalog_product_view',
				'for' => 'all',
				'block' => 'product.info.extrahint'
			)
		)
	)
);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0074 - Alert Urls
$widget = array(
	'title' => 'EM0074 - Alert Urls',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> serialize(array(
		'block_id' => $block_id['alert_urls'],
		'custom_class' => '',
		'custom_html_wrapper_class' => '',
		'custom_html_wrapper_id' => '',
		'block_title' => '',
	)),
	'page_groups'=> array(
		array(
			'page_group' => 'all_products',
			'all_products' => array(
				'layout_handle' => 'default,catalog_product_view',
				'for' => 'all',
				'block' => 'alert.urls'
			)
		)
	)
);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0074 - Product View Short Description After 
$widget = array(
	'title' => 'EM0074 - Product View Short Description After ',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> serialize(array(
		'block_id' => $block_id['product_view_short_description_after'],
		'custom_class' => '',
		'custom_html_wrapper_class' => '',
		'custom_html_wrapper_id' => '',
		'block_title' => '',
	)),
	'page_groups'=> array(
		array(
			'page_group' => 'all_products',
			'all_products' => array(
				'layout_handle' => 'default,catalog_product_view',
				'for' => 'all',
				'block' => 'product.info.other'
			)
		)
	)
);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();


function em0074_install_fix_widget_block_id(&$widget, $block_id) {
	$params = unserialize($widget['widget_parameters']);
	$params['block_id'] = $block_id;
	$widget['widget_parameters'] = serialize($params);
}

function em0074_install_fix_widget_instance_id(&$widget, $instance_id) {
	$params = unserialize($widget['widget_parameters']);
	$params['instance'] = $instance_id;
	$widget['widget_parameters'] = serialize($params);
}

####################################################################################################
# ADD MEGAMENU PRO
####################################################################################################

$installer->run("

CREATE TABLE IF NOT EXISTS {$this->getTable('megamenupro')} (
  `megamenupro_id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `type` smallint(6) NOT NULL default '0',
  `content` text NOT NULL default '', 
  `status` smallint(6) NOT NULL default '0',
  `created_time` datetime NULL,
  `update_time` datetime NULL,
  PRIMARY KEY (`megamenupro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ");

# create menu of theme EM0074
$model = Mage::getModel('em0074settings/megamenupro');
$model->setData(array(
	'name' => "EM0074 Main Menu",
	'type' => "0",
	'content' => <<<EOB
a:45:{i:0;a:8:{s:4:"type";s:4:"link";s:5:"label";s:4:"Home";s:8:"sublabel";s:0:"";s:3:"url";s:0:"";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:1;a:8:{s:4:"type";s:4:"link";s:5:"label";s:5:"Shoes";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:2;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"container_24";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:3;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_8";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:4;a:5:{s:4:"type";s:4:"text";s:4:"text";s:1348:"PGgzPkZPUkVWRVIgMjE8L2gzPgo8cD48c21hbGw+TmFtIHZlaGljdWxhLCBkdWkgaW4gdWx0cmljaWVzIHBvcnR0aXRvcnVlIG5vbiBkdWllZ2V0IGFlbmVhbiBsYW9yZWV0IHNhcGllbiBpZCB1cm5hIHBsYWNlcmF0IHNvbGxpY2l0dWRpbnMgZXJhdCB2b2x1dHBhdC4gQ3VyYWJpdHVyIHByZXRpdW0gbmlzaSB2aXRhZSBwcmV0aXVtZW8gdm9sdXRwYXQsIGxpZ3VsYSBlbGl0IHN1c2NpcGl0IGxpYmVybywgZXQgZnJpbmdpbGxhIGVuaW1udSBFdGlhbSBzaXQgYW1ldCBzZW0gbmliaCwgaWQgdGluY2lkdW50IGRpYW0gdWxsYW1jb3JwZXIgdmVuZW5hdGlzIGxpZ3VsYSBmYXVjaWJ1cyBxdWFtLCBuZWMgc2NlbGVyaXNxdWUganVzdG8gdHVycGlzIGdyYXZpZGEgYXJjdSBhYyBqdXN0byBkaWduaXNzaW0gcmhvbmN1cy4gTnVsbGFtIHNjZWxlcmlzcXVlIGdyYXZpZGEgcGxhY2VyYXQgZWxpdCBhbGlxdWV0IGF0LiBQcm9pbiBzY2VsZXJpc3F1ZSBhdWd1ZSBwZWxsZW50ZXNxdWUgc2FwaWVuIHN1c2NpcGl0IGFsaXF1YW0uIEluIHZlbCBzZW1wZXIgb3JjaS4gQWxpcXVhbSBtYXVyaXMgaXBzdW0gdmFyaXVzIHF1aXMgPC9zbWFsbD48L3A+CjxkaXYgY2xhc3M9Im5vX3F1aWNrc2hvcCI+e3t3aWRnZXQgdHlwZT0iZHluYW1pY3Byb2R1Y3RzL2R5bmFtaWNwcm9kdWN0cyIgb3JkZXJfYnk9Im5hbWUgYXNjIiBmZWF0dXJlZF9jaG9vc2U9ImVtX2ZlYXR1cmVkIiBsaW1pdF9jb3VudD0iMSIgdGh1bWJuYWlsX3dpZHRoPSIxMzAiIHRodW1ibmFpbF9oZWlnaHQ9IjEzMCIgc2hvd19wcm9kdWN0X25hbWU9InRydWUiIHNob3dfdGh1bWJuYWlsPSJ0cnVlIiBzaG93X2Rlc2NyaXB0aW9uPSJ0cnVlIiBzaG93X3ByaWNlPSJ0cnVlIiBzaG93X3Jldmlld3M9InRydWUiIHNob3dfYWRkdG9jYXJ0PSJmYWxzZSIgc2hvd19hZGR0bz0iZmFsc2UiIHNob3dfbGFiZWw9ImZhbHNlIiBjaG9vc2VfdGVtcGxhdGU9ImVtX2ZlYXR1cmVkX3Byb2R1Y3RzL2ZlYXR1cmVkX2xpc3QucGh0bWwifX08L2Rpdj4=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:5;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:6;a:5:{s:4:"type";s:4:"text";s:4:"text";s:612:"PGg1PlNBTVBMRSBMSU5LUzwvaDU+Cjx1bD4KPGxpPjxhIGhyZWY9IiMiPmNvbnNlY3RldHVyIGFkaXBpc2ljaW5nPC9hPjwvbGk+CjxsaT48YSBocmVmPSIjIj5laXVzbW9kIHRlbXBvcjwvYT48L2xpPgo8bGk+PGEgaHJlZj0iIyI+bGFib3JlIGV0IGRvbG9yZTwvYT48L2xpPgo8bGk+PGEgaHJlZj0iIyI+bGFib3JpcyBuaXNpIHV0PC9hPjwvbGk+CjxsaT48YSBocmVmPSIjIj5EdWlzIGF1dGUgaXJ1cmU8L2E+PC9saT4KPGxpPjxhIGhyZWY9IiMiPmNvbnNlY3RldHVyIGFkaXBpc2ljaW5nPC9hPjwvbGk+CjxsaT48YSBocmVmPSIjIj5laXVzbW9kIHRlbXBvcjwvYT48L2xpPgo8bGk+PGEgaHJlZj0iIyI+bGFib3JlIGV0IGRvbG9yZTwvYT48L2xpPgo8bGk+PGEgaHJlZj0iIyI+bGFib3JpcyBuaXNpIHV0PC9hPjwvbGk+CjxsaT48YSBocmVmPSIjIj5EdWlzIGF1dGUgaXJ1cmU8L2E+PC9saT4KPC91bD4=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:7;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:8;a:5:{s:4:"type";s:4:"text";s:4:"text";s:612:"PGg1PlNBTVBMRSBMSU5LUzwvaDU+Cjx1bD4KPGxpPjxhIGhyZWY9IiMiPmNvbnNlY3RldHVyIGFkaXBpc2ljaW5nPC9hPjwvbGk+CjxsaT48YSBocmVmPSIjIj5laXVzbW9kIHRlbXBvcjwvYT48L2xpPgo8bGk+PGEgaHJlZj0iIyI+bGFib3JlIGV0IGRvbG9yZTwvYT48L2xpPgo8bGk+PGEgaHJlZj0iIyI+bGFib3JpcyBuaXNpIHV0PC9hPjwvbGk+CjxsaT48YSBocmVmPSIjIj5EdWlzIGF1dGUgaXJ1cmU8L2E+PC9saT4KPGxpPjxhIGhyZWY9IiMiPmNvbnNlY3RldHVyIGFkaXBpc2ljaW5nPC9hPjwvbGk+CjxsaT48YSBocmVmPSIjIj5laXVzbW9kIHRlbXBvcjwvYT48L2xpPgo8bGk+PGEgaHJlZj0iIyI+bGFib3JlIGV0IGRvbG9yZTwvYT48L2xpPgo8bGk+PGEgaHJlZj0iIyI+bGFib3JpcyBuaXNpIHV0PC9hPjwvbGk+CjxsaT48YSBocmVmPSIjIj5EdWlzIGF1dGUgaXJ1cmU8L2E+PC9saT4KPC91bD4=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:9;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_8";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:10;a:5:{s:4:"type";s:4:"text";s:4:"text";s:688:"PGg1PlNBTVBMRSBWSURFTzwvaDU+CjxkaXYgY2xhc3M9ImpzLXZpZGVvIHdpZGVzY3JlZW4iPgo8YSBocmVmPSJodHRwOi8vd3d3LnlvdXR1YmUuY29tL2VtYmVkL0ZFcVhXd1BGdXNJIiBvbmNsaWNrPSJ0YXJnZXQ9J19ibGFuayciPgo8aW1nIGNsYXNzPSJmbHVpZCIgc3JjPSJ7e3NraW4gdXJsPSdpbWFnZXMvbWVkaWEvZGVtby9tZW51X3ZpZGVvLnBuZyd9fSIgYWx0PSIiIC8+CjwvYT4KPC9kaXY+CjxwPjxzbWFsbD5yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldHVyIGFkaXBpc2ljaW5nIGVsaXQsIHNlZCBkbyBlaXVzbW9kIHRlbXBvciBpbmNpZGlkdW50IHV0IGxhYm9yZSBldCBkb2xvcmUgbWFnbmEgYWxpcXVhLiBVdCBlbmltIGFkIG1pbmltIHZlbmlhbSwgcXVpcyBub3N0cnVkIGV4ZXJjaXRhdGlvbiB1bGxhbWNvIGxhYm9yaXMgbmlzaSB1dCBhbGlxdWlwIGV4IGVhIGNvbW1vZG8gY29uc2VxdWF0LiBEdWlzIGF1dGUgaXJ1cmUgZG9sb3IgaW4gcmVwcmVoZTwvc21hbGw+PC9wPg==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:11;a:8:{s:4:"type";s:4:"link";s:5:"label";s:8:"Handbags";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:12;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_6";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:13;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_3 alpha";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:14;a:5:{s:4:"type";s:4:"text";s:4:"text";s:152:"PGg1PkNvbXB1dGVyPC9oNT4Ke3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8xNSIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:15;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"grid_3 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:16;a:5:{s:4:"type";s:4:"text";s:4:"text";s:300:"PGg1PkNhbWVyYXM8L2g1Pgp7e3dpZGdldCB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgY2F0ZWdvcnlfaWQ9ImNhdGVnb3J5LzEyIiBkaXJlY3Rpb249InZlcnRpY2FsIn19CjxoNT5GdXJuaXR1cmU8L2g1Pgp7e3dpZGdldCB0eXBlPSJtZWdhbWVudXByby9jYXRhbG9nbmF2aWdhdGlvbiIgY2F0ZWdvcnlfaWQ9ImNhdGVnb3J5LzEwIiBkaXJlY3Rpb249InZlcnRpY2FsIn19";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:17;a:8:{s:4:"type";s:4:"link";s:5:"label";s:10:"Fragrances";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:18;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"container_24";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:19;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:20;a:5:{s:4:"type";s:4:"text";s:4:"text";s:152:"PGg1PkNvbXB1dGVyPC9oNT4Ke3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8xNSIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:21;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:22;a:5:{s:4:"type";s:4:"text";s:4:"text";s:152:"PGg1PkNvbXB1dGVyPC9oNT4Ke3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8xNSIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:23;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:24;a:5:{s:4:"type";s:4:"text";s:4:"text";s:152:"PGg1PkNvbXB1dGVyPC9oNT4Ke3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8xNSIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:25;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:26;a:5:{s:4:"type";s:4:"text";s:4:"text";s:152:"PGg1PkNvbXB1dGVyPC9oNT4Ke3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8xNSIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:27;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:28;a:5:{s:4:"type";s:4:"text";s:4:"text";s:152:"PGg1PkNvbXB1dGVyPC9oNT4Ke3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8xNSIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:29;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:30;a:5:{s:4:"type";s:4:"text";s:4:"text";s:152:"PGg1PkNvbXB1dGVyPC9oNT4Ke3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8xNSIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:31;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:32;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_8";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:33;a:5:{s:4:"type";s:4:"text";s:4:"text";s:116:"PGEgaHJlZj0iIyI+PGltZyBjbGFzcz0iZmx1aWQiIHNyYz0ie3ttZWRpYSB1cmw9Ind5c2l3eWcvaW1nbWVudS5naWYifX0iIGFsdD0iIiAvPjwvYT4=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:34;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_8";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:35;a:5:{s:4:"type";s:4:"text";s:4:"text";s:552:"PHA+TG9yZW0gaXBzdW0gZG9sb3Igc2l0ICBpcnVyZSBkb2xvciBpbiByZXByZWhlbmRlcml0IGluIHZvbHVwdGF0ZSB2ZWxpdCBlc3NlIGNpbGx1bSBkb2xvcmUgZXUgZnVnaWF0IG51bGxhIHBhcmlhdHVyLiBFeGNlcHRldXIgc2ludCBvY2NhZWNhdCBjdXBpZGF0YXQgbm9uIHByb2lkZW50LCBzdW50IGluIGN1bHBhIHF1aSBvZmZpY2lhIGRlc2VydW50IG1vbGxpdCBhbmltIGlkIGVzdCBsYWJvcnVtLjwvcD4KCjxwPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0LCBjb25zZWN0ZXQgYWxpcXVhLiBVdCBlbmltIGFkIG1pbmltIHZlbmlhbSwgcXVpcyBub3N0cnVkIGV4ZXJjaXRhdGlvbiB1bGxhbWNvIGxhYm9yaXMgbmlzaSB1dCBhbGlxdWlwIGV4IGVhIGNvbW1vZG8gY29uc2VxdWF0LiBEdWlzIGF1dGUgaXJ1cmUgLjwvcD4=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:36;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"grid_8";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:37;a:5:{s:4:"type";s:4:"text";s:4:"text";s:552:"PHA+TG9yZW0gaXBzdW0gZG9sb3Igc2l0ICBpcnVyZSBkb2xvciBpbiByZXByZWhlbmRlcml0IGluIHZvbHVwdGF0ZSB2ZWxpdCBlc3NlIGNpbGx1bSBkb2xvcmUgZXUgZnVnaWF0IG51bGxhIHBhcmlhdHVyLiBFeGNlcHRldXIgc2ludCBvY2NhZWNhdCBjdXBpZGF0YXQgbm9uIHByb2lkZW50LCBzdW50IGluIGN1bHBhIHF1aSBvZmZpY2lhIGRlc2VydW50IG1vbGxpdCBhbmltIGlkIGVzdCBsYWJvcnVtLjwvcD4KCjxwPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0LCBjb25zZWN0ZXQgYWxpcXVhLiBVdCBlbmltIGFkIG1pbmltIHZlbmlhbSwgcXVpcyBub3N0cnVkIGV4ZXJjaXRhdGlvbiB1bGxhbWNvIGxhYm9yaXMgbmlzaSB1dCBhbGlxdWlwIGV4IGVhIGNvbW1vZG8gY29uc2VxdWF0LiBEdWlzIGF1dGUgaXJ1cmUgLjwvcD4=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:38;a:8:{s:4:"type";s:4:"link";s:5:"label";s:6:"Sports";s:8:"sublabel";s:0:"";s:3:"url";s:1:"#";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:39;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:12:"container_24";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:40;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:7:"grid_24";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:41;a:5:{s:4:"type";s:4:"text";s:4:"text";s:748:"PHA+PGEgaHJlZj0iIyI+PGltZyBzcmM9Int7bWVkaWEgdXJsPSJ3eXNpd3lnL2lfbG9nby5wbmcifX0iIGFsdD0iIiAvPjwvYT48YSBocmVmPSIjIj48aW1nIHNyYz0ie3ttZWRpYSB1cmw9Ind5c2l3eWcvaV9sb2dvLnBuZyJ9fSIgYWx0PSIiIC8+PC9hPjxhIGhyZWY9IiMiPjxpbWcgc3JjPSJ7e21lZGlhIHVybD0id3lzaXd5Zy9pX2xvZ28ucG5nIn19IiBhbHQ9IiIgLz48L2E+PGEgaHJlZj0iIyI+PGltZyBzcmM9Int7bWVkaWEgdXJsPSJ3eXNpd3lnL2lfbG9nby5wbmcifX0iIGFsdD0iIiAvPjwvYT48YSBocmVmPSIjIj48aW1nIHNyYz0ie3ttZWRpYSB1cmw9Ind5c2l3eWcvaV9sb2dvLnBuZyJ9fSIgYWx0PSIiIC8+PC9hPjxhIGhyZWY9IiMiPjxpbWcgc3JjPSJ7e21lZGlhIHVybD0id3lzaXd5Zy9pX2xvZ28ucG5nIn19IiBhbHQ9IiIgLz48L2E+PGEgaHJlZj0iIyI+PGltZyBzcmM9Int7bWVkaWEgdXJsPSJ3eXNpd3lnL2lfbG9nby5wbmcifX0iIGFsdD0iIiAvPjxpbWcgc3JjPSJ7e21lZGlhIHVybD0id3lzaXd5Zy9pX2xvZ28ucG5nIn19IiBhbHQ9IiIgLz48L2E+PC9wPg==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:42;a:8:{s:4:"type";s:4:"link";s:5:"label";s:10:"Categories";s:8:"sublabel";s:0:"";s:3:"url";s:0:"";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:43;a:5:{s:4:"type";s:4:"text";s:4:"text";s:124:"e3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8zIiBkaXJlY3Rpb249InZlcnRpY2FsIn19";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:44;a:5:{s:4:"type";s:4:"text";s:4:"text";s:128:"e3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8zIiBkaXJlY3Rpb249Imhvcml6b250YWwifX0=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}}
EOB
	,
	'status' => "1"
))->setCreatedTime(now())->setUpdateTime(now())->save();
$menu_id = $model->getId();

# Mega Menu widget instance
$widget = array(
	'title' => 'EM0074 Mega Menu',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> serialize(array(
		'menu' => $menu_id
	)),	
	'page_groups' => array(
		array(
			'page_group' => 'all_pages',
			'all_pages' => array(
				'page_id' => 0,
				'layout_handle' => 'default',
				'for' => 'all',
				'block' => 'top.menu'
			)
		)
	),
);
$widgetInstance->setData($widget)->setType('megamenupro/megamenupro')->setPackageTheme($package_theme)->save();

$installer->endSetup();
unlink($pathFile);