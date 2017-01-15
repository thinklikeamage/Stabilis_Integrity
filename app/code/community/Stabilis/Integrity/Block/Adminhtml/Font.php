<?php

/**
 * Dynamic list block for specifying font names.
 * 
 * @package  Stabilis
 * @category Stabilis_Integrity
 */
class Stabilis_Integrity_Block_Adminhtml_Font
    extends Stabilis_Integrity_Block_Adminhtml_DynamicListAbstract {
    
    /** @var string translation key for the 'add new' button */
    const NEW_BUTTON_TEXT    = 'Add New Font';
    
    /** @var string prepend string for the list element type property */
    const LIST_ELEMENT_TYPE  = 'font_source';
    
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
