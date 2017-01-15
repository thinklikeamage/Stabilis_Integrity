<?php

class Stabilis_Integrity_Model_System_Config_Source_RelAttribute 
    extends Varien_Object
    implements Stabilis_Integrity_Model_Source_Model_Interface {
    
    const KEY_OPTIONS    = 'options';

    const REL_ALTERNATE  = 'alternate';
    const REL_AUTHOR     = 'author';
    const REL_HELP       = 'help';
    const REL_ICON       = 'icon';
    const REL_LICENSE    = 'license';
    const REL_NEXT       = 'next';
    const REL_PREFETCH   = 'prefetch';
    const REL_PREV       = 'prev';
    const REL_SEARCH     = 'search';
    const REL_STYLESHEET = 'stylesheet';
    
    public function toOptionArray() {
        if(!$this->hasData(self::KEY_OPTIONS)) {
            $helper = Mage::helper('integrity');
            $this->setData(
                self::KEY_OPTIONS,
                array(
                    array(
                        'label' => $helper->__('alternate'),
                        'value' => self::REL_ALTERNATE
                    ), array(
                        'label' => $helper->__('author'),
                        'value' => self::REL_AUTHOR
                    ), array(
                        'label' => $helper->__('help'),
                        'value' => self::REL_HELP
                    ), array(
                        'label' => $helper->__('icon'),
                        'value' => self::REL_ICON
                    ), array(
                        'label' => $helper->__('license'),
                        'value' => self::REL_LICENSE
                    ), array(
                        'label' => $helper->__('next'),
                        'value' => self::REL_NEXT
                    ), array(
                        'label' => $helper->__('prefetch'),
                        'value' => self::REL_PREFETCH
                    ), array(
                        'label' => $helper->__('prev'),
                        'value' => self::REL_PREV
                    ), array(
                        'label' => $helper->__('search'),
                        'value' => self::REL_SEARCH
                    ), array(
                        'label' => $helper->__('stylesheet'),
                        'value' => self::REL_STYLESHEET
                    )
                )
            );
        }
        return $this->getData(self::KEY_OPTIONS);
    }
}
