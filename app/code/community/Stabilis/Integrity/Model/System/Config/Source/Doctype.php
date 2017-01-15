<?php

class Stabilis_Integrity_Model_System_Config_Source_Doctype
    extends Varien_Object 
    implements Stabilis_Integrity_Model_Source_Model_Interface {

    const KEY_OPTIONS = 'options';
    
    const HTML5                 = 'HTML5';
    const HTML_401_TRANSITIONAL = 'HTML 4.01 Transitional';
    const HTML_401_STRICT       = 'HTML 4.01 Strict';
    const XHTML_10_TRANSITIONAL = 'XHTML 1.0 Transitional';
    const XHTML_10_STRICT       = 'XHTML 1.0 Strict';
    const XHTML_11              = 'XHTML 1.1';
    
    public function toOptionArray() {
        if(!$this->hasData(self::KEY_OPTIONS)) {
            $helper = Mage::helper('integrity');
            $this->setData(
                self::KEY_OPTIONS,
                array(
                    array(
                        'label' => $helper->__('HTML5'),
                        'value' => self::HTML5
                    ), array(
                        'label' => $helper->__('HTML 4.01 Transitional'),
                        'value' => self::HTML_401_TRANSITIONAL
                    ), array(
                        'label' => $helper->__('HTML 4.01 Strict'),
                        'value' => self::HTML_401_STRICT
                    ), array(
                        'label' => $helper->__('XHTML 1.1'),
                        'value' => self::XHTML_11
                    ), array(
                        'label' => $helper->__('XHTML 1.0 Transitional'),
                        'value' => self::XHTML_10_TRANSITIONAL
                    ), array(
                        'label' => $helper->__('XHTML 1.0 Strict'),
                        'value' => self::XHTML_10_STRICT
                    )
                )
            );
        }
        return $this->getData(self::KEY_OPTIONS);
    }
}
