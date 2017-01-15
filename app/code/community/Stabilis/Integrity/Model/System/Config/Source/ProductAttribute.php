<?php

class Stabilis_Integrity_Model_System_Config_Source_ProductAttribute 
    extends Varien_Object 
    implements Stabilis_Integrity_Model_Source_Model_Interface {

    const KEY_OPTIONS = 'options';
    const NO_VALUE    = '';
    
    public function toOptionArray() {
        if(!$this->hasData(self::KEY_OPTIONS)) {

            $options = array(
                array(
                    'label' => Mage::helper('integrity')->__('-- No Selection --'), 
                    'value' => self::NO_VALUE
                )
            );
            
            foreach(Mage::getResourceModel('catalog/product_attribute_collection') as $attribute) { 
                if(!$attribute->getIsHtmlAllowedOnFront()) {
                    continue;
                }
                $options[] = array(
                    'label' => $attribute->getAttributeCode(),
                    'value' => $attribute->getAttributeCode()
                );
            }
            
            $this->setData(self::KEY_OPTIONS, $options);
        }
        return $this->getData(self::KEY_OPTIONS);
    }

}
