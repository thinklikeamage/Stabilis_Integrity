<?php

/**
 * Dynamic list block for specifying id values.
 * 
 * @package  Stabilis
 * @category Stabilis_Integrity
 */
class Stabilis_Integrity_Block_Adminhtml_IdAttribute 
    extends Stabilis_Integrity_Block_Adminhtml_DynamicListAbstract {
    
    /** @var string translation key for the 'add new' button */
    const NEW_BUTTON_TEXT    = 'Add New Id';
    
    /** @var string prepend string for the list element type property */
    const LIST_ELEMENT_TYPE  = 'id_attribute';
    
    /** @var string validtion classes for all dynamic fields */
    const VALIDATION_CLASSES = 'required-entry';
    
    /**
     * {@inheritDoc}
     */
    protected function _getNewButtonText() {
        return Mage::helper('integrity')->__(self::NEW_BUTTON_TEXT);
    }
    
    /**
     * {@inheritDoc}
     */
    protected function _getListElementType() {
        return self::LIST_ELEMENT_TYPE;
    }

    /**
     * {@inheritDoc}
     */
    protected function _getValidationClasses() {
        return self::VALIDATION_CLASSES;
    }
}

