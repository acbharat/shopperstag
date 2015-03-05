<?php
class EM_Bestsellerproducts_Block_List extends Mage_Catalog_Block_Product_Abstract
implements Mage_Widget_Block_Interface
{
	 protected function _construct()
    {
		parent::_construct();		
    }   
	
	public function _prepareLayout()
	{
	
		return parent::_prepareLayout();
	}

	protected function _toHtml()
	{
		$this->setTemplate($this->getData('choose_template'));
		return parent::_toHtml();
	}
	
	public function getCategories()
	{
		$strCategories=  $this->getData(new_category);
		$arrCategories = explode(",", $strCategories);
		return $arrCategories;
	}
    
    /* --------*/
    public function getColumnCount(){
		return $this->getData('column_count');
	}
    
    public function getCustomClass(){
		return $this->getData('custom_class');
	}
    
    public function getOrderBy(){
		return $this->getData('order_by');
	}
	
	public function getCacheLifeTime(){		
		return $this->getData('cache_lifetime');
	}
    
	public function getLimitCount(){
		return $this->getData('limit_count');
	}
    
    public function getThumbnailWidth(){
        $tempwidth = $this->getData('thumbnail_width');
        if (!(is_numeric($tempwidth)))
            $tempwidth = 150;
        return $tempwidth;
	}
    
    public function getThumbnailHeight(){
        $tempheight = $this->getData('thumbnail_height');
       if (!(is_numeric($tempheight)))
            $tempheight = 150;
        return $tempheight;
	}
    
    public function getFrontendTitle(){
        return $this->getData('frontend_title');
	}
    
    public function getFrontendDescription(){
        return $this->getData('frontend_description');
	}
	
    public function ShowThumb(){
        return $this->getData('show_thumbnail');
	}
    
    public function ShowProductName(){
        return $this->getData('show_product_name');
	}
    
    public function ShowDesc(){
        return $this->getData('show_description');
	}
    
    public function ShowPrice(){
        return $this->getData('show_price');
	}
    
    public function ShowReview(){
        return $this->getData('show_reviews');
	}
    
    public function ShowAddtoCart(){
        return $this->getData('show_addtocart');
	}
    
    public function ShowAddto(){
        return $this->getData('show_addto');
	}
    
    public function ShowLabel(){
        return $this->getData('show_label');
	}
    /* ---- end ---- */
	
	protected function getProductCollection()
	{
		$storeId    = Mage::app()->getStore()->getId();

        $products = Mage::getResourceModel('reports/product_collection')
            ->addOrderedQty()
            ->addAttributeToSelect('*')
            //->addAttributeToSelect(array('name', 'price', 'small_image', 'short_description', 'description')) //edit to suit tastes
            ->setStoreId($storeId)
            ->addStoreFilter($storeId)
            ->setOrder('ordered_qty', 'desc'); //best sellers on top
        
        Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($products);
        Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($products);

        $config1 = $this->getData('new_category');
		if($config1)
		{
			$result = array();
			$condition_cat = array();
			$alias = 'category_index';
			$categoryCondition = $products->getConnection()->quoteInto(
			$alias.'.product_id=e.entity_id AND '.$alias.'.store_id=? AND ',
			$products->getStoreId()
			);
			$categoryCondition.= $alias.'.category_id IN ('.$config1.')';
			$products->getSelect()->joinInner(
			array($alias => $products->getTable('catalog/category_product_index')),
			$categoryCondition,
			array()
			);
			$products->_categoryIndexJoined = true;
			$products->distinct(true);
		}
			//Page size & CurPage
			$pageSize = $this->getData('limit_count');
			$curPage = 1;
			
            $products->setPageSize($pageSize);
    
    	    $products->setCurPage($curPage);
		return $products;
	}
}
?>
