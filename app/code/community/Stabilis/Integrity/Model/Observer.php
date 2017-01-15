<?php

class Stabilis_Integrity_Model_Observer {
    
    
    public function catalogProductSaveBefore($observer) {
       
        /** @var $helper Stabilis_Integrity_Helper_HtmlPurifier */
        $helper = Mage::helper('integrity/htmlPurifier');
        
        if(!$helper->isEnabled() || !$helper->isProductEnabled()) {
            return;
        }
        /** @var $product Mage_Core_Model_Product */
        $product = $observer->getProduct();

        foreach(explode(',', $helper->getProductAttributes()) as $attribute) {
            if($product->hasData($attribute)) {
                $product->setData($attribute, $helper->purify($product->getData($attribute)));
            }
        }
    }
    
    public function catalogCategorySaveBefore($observer) {
        
        /** @var $helper Stabilis_Integrity_Helper_HtmlPurifier */
        $helper = Mage::helper('integrity/htmlPurifier');
        
        if(!$helper->isEnabled() || !$helper->isCategoryEnabled()) {
            return;
        }
        /** @var $product Mage_Core_Model_Category */
        $category = $observer->getCategory();

        foreach(explode(',', $helper->getCategoryAttributes()) as $attribute) {
            if($category->hasData($attribute)) {
                $category->setData($attribute, $helper->purify($category->getData($attribute)));
            }
        }
    }
}
