<?php

class Stabilis_Integrity_System_Config_Source_ConstraintMode 
    extends Varien_Object
    implements Stabilis_Integrity_Model_Source_Model_Interface {
    
    const KEY_OPTIONS = 'options';
    
    const MODE_DISABLED = 0;
    const MODE_SIMPLE   = 1;
    const MODE_ADVANCED = 2;
    
    public function toOptionArray() {
        if(!$this->hasData(self::KEY_OPTIONS)) {
            $helper = Mage::helper('integrity');
            $this->setData(
                self::KEY_OPTIONS, 
                array(
                    'label' => $helper->__('Disabled'),
                    'value' => self::MODE_DISABLED
                ), array(
                    'label' => $helper->__('Simple'),
                    'value' => self::MODE_SIMPLE
                ), array(
                    'label' => $helper->__('Advanced'),
                    'value' => self::MODE_ADVANCED
                )
            );
        }
        return $this->getData(self::KEY_OPTIONS);
    }
}
