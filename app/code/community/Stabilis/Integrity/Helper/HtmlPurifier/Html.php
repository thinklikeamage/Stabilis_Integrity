<?php
/**
 * This is free and unencumbered software released into the public domain.
 * 
 * Anyone is free to copy, modify, publish, use, compile, sell, or
 * distribute this software, either in source code form or as a compiled
 * binary, for any purpose, commercial or non-commercial, and by any
 * means.
 * 
 * In jurisdictions that recognize copyright laws, the author or authors
 * of this software dedicate any and all copyright interest in the
 * software to the public domain. We make this dedication for the benefit
 * of the public at large and to the detriment of our heirs and
 * successors. We intend this dedication to be an overt act of
 * relinquishment in perpetuity of all present and future rights to this
 * software under copyright law.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM, DAMAGES OR
 * OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
 * ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 * 
 * For more information, please refer to <http://unlicense.org/>
 * 
 */
?>
<?php

/**
 * HTMLPurifier configuration helper for applying HTML configurations.
 * 
 * @package  Stabilis
 * @category Stabilis_Integrity
 */
class Stabilis_Integrity_Helper_HtmlPurifier_Html 
    extends Stabilis_Integrity_Helper_HtmlPurifier_Abstract {

    /** @var string data-key for the configured doctype property */
    const KEY_DOCTYPE                 = 'doctype';

    /** @var string data-key for the configured allowed elements property */
    const KEY_ALLOWED_ELEMENTS        = 'allowed_elements';
    
    /** @var string data-key for the configured allowed attributes property */
    const KEY_ALLOWED_ATTRIBUTES      = 'allowed_attributes';   
    
    /** @var string xml path to the doctype property */
    const XML_PATH_DOCTYPE            = 'integrity/html/doctype';
    
    /** @var string xml path to the allowed elements property */
    const XML_PATH_ALLOWED_ELEMENTS   = 'integrity/html/allowed_elements';
    
    /** @var string xml path to the allowed attributes property */
    const XML_PATH_ALLOWED_ATTRIBUTES = 'integrity/html/allowed_attributes';
    
    /** @var string default value for the doctype property */
    const DEFAULT_DOCTYPE             = Stabilis_Integrity_Model_System_Config_Source_Doctype::HTML5;
    
    /** @var string default value for the allowed elements property */
    const DEFAULT_ALLOWED_ELEMENTS    = '';
    
    /** @var string default value for the allowed attributes property */
    const DEFAULT_ALLOWED_ATTRIBUTES  = '';
    
    /**
     * Retrieves the configured doctype property
     * 
     * @return string
     */
    public function getDoctype() {
        if(!$this->hasData(self::KEY_DOCTYPE)) {
            $doctype = Mage::getStoreConfig(self::XML_PATH_DOCTYPE);
            $this->setData(self::KEY_DOCTYPE, $doctype ? $doctype : self::DEFAULT_DOCTYPE);
        }
        return $this->getData(self::KEY_DOCTYPE);
    }
    
    /**
     * Retrieves the configured allowed elements property
     * 
     * @return string
     */
    public function getAllowedElements() {
        if(!$this->hasData(self::KEY_ALLOWED_ELEMENTS)) {
            $allowedElements = Mage::getStoreConfig(self::XML_PATH_ALLOWED_ELEMENTS);
            $this->setData(self::KEY_ALLOWED_ELEMENTS, $allowedElements ? $allowedElements : self::DEFAULT_ALLOWED_ELEMENTS);
        }
        return $this->getData(self::KEY_ALLOWED_ELEMENTS);
    }
    
    /**
     * Retrieves the configured allowed attributes property
     * @return string
     */
    public function getAllowedAttributes() {
        if(!$this->hasData(self::KEY_ALLOWED_ATTRIBUTES)) {
            $allowedAttributes = Mage::getStoreConfig(self::XML_PATH_ALLOWED_ATTRIBUTES);
            $this->setData(self::KEY_ALLOWED_ATTRIBUTES, $allowedAttributes ? $allowedAttributes : self::DEFAULT_ALLOWED_ATTRIBUTES);
        }
        return $this->getData(self::KEY_ALLOWED_ATTRIBUTES);
    }
    
    /**
     * {@inheritDoc}
     */
    public function configure(\HTMLPurifier_Config &$config) {
        $config->set('HTML.Doctype', 
            $this->getDoctype() != Stabilis_Integrity_Model_System_Config_Source_Doctype::HTML5 ? 
                $this->getDoctype() : Stabilis_Integrity_Model_System_Config_Source_Doctype::HTML5);
        $config->set('HTML.AllowedElements', $this->getAllowedElements());
        $config->set('HTML.AllowedAttributes', $this->getAllowedAttributes());
    }
}
