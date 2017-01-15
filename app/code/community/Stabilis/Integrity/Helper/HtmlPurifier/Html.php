<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Stabilis to newer
 * versions in the future. If you wish to customize Stabilis for your
 * needs please do so within the local code pool.
 *
 * @category    Stabilis
 * @package     Stabilis_Integrity
 * @copyright  Copyright (c) 2007-2016 Luke A. Leber (https://www.thinklikeamage.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

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
