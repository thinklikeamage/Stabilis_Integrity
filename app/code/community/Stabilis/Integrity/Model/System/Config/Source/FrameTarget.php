<?php

class Stabilis_Integrity_Model_System_Config_Source_FrameTarget 
    extends Varien_Object 
    implements Stabilis_Integrity_Model_Source_Model_Interface {
    
    const KEY_OPTIONS = 'options';
    
    const TARGET_BLANK  = '_blank';
    const TARGET_SELF   = '_self';
    const TARGET_PARENT = '_parent';
    const TARGET_TOP    = '_top';
    
    public function toOptionArray() {
        if(!$this->hasData(self::KEY_OPTIONS)) {
            $helper = Mage::helper('integrity');
            $this->setData(
                self::KEY_OPTIONS,
                array(
                    array(
                        'label' => $helper->__('_blank'),
                        'value' => self::TARGET_BLANK
                    ), array(
                        'label' => $helper->__('_self'),
                        'value' => self::TARGET_SELF
                    ), array(
                        'label' => $helper->__('_parent'),
                        'value' => self::TARGET_PARENT
                    ), array(
                        'label' => $helper->__('_top'),
                        'value' => self::TARGET_TOP
                    )
                )
            );
        }
        return $this->getData(self::KEY_OPTIONS);
    }
}
