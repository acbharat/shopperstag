<?php
/**
 * @methods:
 * - get[Section]_[ConfigName]($defaultValue = '')
 */
class EM_Em0074settings_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function __call($name, $args) {
		if (method_exists($this, $name))
			call_user_func_array(array($this, $name), $args);
			
		elseif (preg_match('/^get([^_][a-zA-Z0-9_]+)$/', $name, $m)) {
			$segs = explode('_', $m[1]);
			foreach ($segs as $i => $seg)
				$segs[$i] = strtolower(preg_replace('/([^A-Z])([A-Z])/', '$1_$2', $seg));

			$value = Mage::getStoreConfig('em0074/'.implode('/', $segs));
			if (!$value) $value = @$args[0];
			return $value;
		}
		
		else 
			call_user_func_array(array($this, $name), $args);
	}
	
	public function getAllCssConfig() {
		$page_bg_image = Mage::getStoreConfig('em0074/typography/page_bg_file') ? 
			'url(' . Mage::getBaseUrl('media') . 'background/' . Mage::getStoreConfig('em0074/typography/page_bg_file') . ')'
			: (Mage::getStoreConfig('em0074/typography/page_bg_image') ? 'url(../images/stripes/'.Mage::getStoreConfig('em0074/typography/page_bg_image').')' : '');
			
		return array(
			'general_color' => Mage::getStoreConfig('em0074/typography/general_color'),
			'primary_color' => Mage::getStoreConfig('em0074/typography/primary_color'),
			'secondary_color' => Mage::getStoreConfig('em0074/typography/secondary_color'),
			'secondary2_color' => Mage::getStoreConfig('em0074/typography/secondary2_color'),
			'negative_color' => Mage::getStoreConfig('em0074/typography/negative_color'),
			'negative2_color' => Mage::getStoreConfig('em0074/typography/negative2_color'),
			'line_color' => Mage::getStoreConfig('em0074/typography/line_color'),
			'primary_bgcolor' => Mage::getStoreConfig('em0074/typography/primary_bgcolor'),
			'secondary_bgcolor' => Mage::getStoreConfig('em0074/typography/secondary_bgcolor'),
			'page_bg_image' => $page_bg_image,
			'button1' => Mage::getStoreConfig('em0074/typography/button1'),
			'button2' => Mage::getStoreConfig('em0074/typography/button2'),
			'button3' => Mage::getStoreConfig('em0074/typography/button3'),
			'general_font' => Mage::getStoreConfig('em0074/typography/general_font'),
			'h1_font' => Mage::getStoreConfig('em0074/typography/h1_font'),
			'h2_font' => Mage::getStoreConfig('em0074/typography/h2_font'),
			'h3_font' => Mage::getStoreConfig('em0074/typography/h3_font'),
			'h4_font' => Mage::getStoreConfig('em0074/typography/h4_font'),
			'h5_font' => Mage::getStoreConfig('em0074/typography/h5_font'),
			'box_shadow' => Mage::getStoreConfig('em0074/typography/box_shadow'),
			'rounded_corner' => Mage::getStoreConfig('em0074/typography/rounded_corner'),
			'additional_css_file' => Mage::getStoreConfig('em0074/typography/additional_css_file'),
		);
	}
	
	public function getImageBackgroundColor() {
		$color = Mage::getStoreConfig('em0074/general/image_bgcolor');
		if (!$color) $color = '#ffffff';
		$color = str_replace('#', '', $color);
		return array(
			hexdec(substr($color, 0, 2)),
			hexdec(substr($color, 2, 2)),
			hexdec(substr($color, 4, 2))
		);
	}
	
    public function getCategoriesCustom($parent,$curId){
				
		try{
			$children = $parent->getChildrenCategories();
						
		}
		catch(Exception $e){
			return '';
		}
		return $children;
	}
	
	public function insertStaticBlock($dataBlock) {
		// insert a block to db if not exists
		$block = Mage::getModel('cms/block')->getCollection()->addFieldToFilter('identifier', $dataBlock['identifier'])->getFirstItem();
		if (!$block->getId())
			$block->setData($dataBlock)->save();
		return $block;
	}
	
	public function insertPage($dataPage) {
		$page = Mage::getModel('cms/page')->getCollection()->addFieldToFilter('identifier', $dataPage['identifier'])->getFirstItem();
		if (!$page->getId())
			$page->setData($dataPage)->save();
		return $page;
	}
	
	public function getActionReview(){
		$url = Mage::helper('core/url')->getCurrentUrl();
		$url_check = 'wishlist/index/configure';
		if(stripos($url,$url_check)){
			$id = Mage::registry('current_product')->getId();
			return Mage::getUrl('review/product/post/', array('id' => $id,'_secure' => true));
		} else {
			$url_check2 = 'checkout/cart/configure';
			if(stripos($url,$url_check2)){
				$id = Mage::getSingleton('catalog/session')->getLastViewedProductId();
				return Mage::getUrl('review/product/post/', array('id' => $id,'_secure' => true));
			}else{
				$productId = Mage::app()->getRequest()->getParam('id', false);
				return Mage::getUrl('review/product/post', array('id' => $productId,'_secure' => true));
			}
		}
	}
}
