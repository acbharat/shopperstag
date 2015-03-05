<?php
class EM_Cmswidget_Block_Widget_Block extends Mage_Cms_Block_Widget_Block
{
    protected function _toHtml()
    {   
        $this->setTemplate('em_cms/widget/static_block/default.phtml');
        return parent::_toHtml();
    }
}