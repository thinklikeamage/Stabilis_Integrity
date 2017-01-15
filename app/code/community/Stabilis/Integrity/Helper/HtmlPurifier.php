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

if (!defined('HTMLPURIFIER_PREFIX')) {
    define('HTMLPURIFIER_PREFIX', Mage::getBaseDir('lib'));
}

/**
 * Helper class for encapsulating an HTMLPurifier instance.
 * 
 * @package  Stabilis
 * @category Stabilis_Integrity
 * 
 */
class Stabilis_Integrity_Helper_HtmlPurifier 
    extends Stabilis_Integrity_Helper_Abstract {

    /** @var string data-key for the enabled flag */
    const KEY_ENABLED                  = 'enabled';
    
    /** @var string data-key for the product enabled flag */
    const KEY_PRODUCT_ENABLED          = 'product_enabled';

    /** @var string data-key for the product attributes to purify */
    const KEY_PRODUCT_ATTRIBUTES       = 'product_attributes';
    
    /** @var string data-key for the category enabled flag */
    const KEY_CATEGORY_ENABLED         = 'category_enabled';
    
    /** @var string data-key for the category attributes to purify */
    const KEY_CATEGORY_ATTRIBUTES      = 'category_attributes';
    
    /** @var string XML configuration path for the enabled flag */
    const XML_PATH_ENABLED             = 'integrity/general/enable';

    /** @var string XML configuration path for the product enabled flag */
    const XML_PATH_PRODUCT_ENABLED     = 'integrity/general/product_enabled';
    
    /** @var string XML configuration path for the product attributes to purify */
    const XML_PATH_PRODUCT_ATTRIBUTES  = 'integrity/general/product_attributes';
    
    /** @var string XML configuration path for the category enabled flag */
    const XML_PATH_CATEGORY_ENABLED    = 'integrity/general/category_enabled';

    /** @var string XML configuration path for the category attributes to purify */
    const XML_PATH_CATEGORY_ATTRIBUTES = 'integrity/general/category_attributes';
    
    
    /** @var HTMLPurifier the underlying HTMLPurifier instance */
    protected $_purifier;
    
    /**
     * Is this module enabled?
     * 
     * @return boolean
     */
    public function isEnabled() {
        if(!$this->hasData(self::KEY_ENABLED)) {
            $this->setData(self::KEY_ENABLED, Mage::getStoreConfigFlag(self::XML_PATH_ENABLED));
        }
        return $this->getData(self::KEY_ENABLED);
    }
    
    /**
     * Is product purification enabled?
     * 
     * @return boolean
     */
    public function isProductEnabled() {
        if(!$this->hasData(self::KEY_PRODUCT_ENABLED)) {
            $this->setData(self::KEY_PRODUCT_ENABLED, Mage::getStoreConfigFlag(self::XML_PATH_PRODUCT_ENABLED));
        }
        return $this->getData(self::KEY_PRODUCT_ENABLED);
    }
    
    /**
     * Retrieves a comma-separated list of product attributes that must be purified
     * 
     * @return string
     */
    public function getProductAttributes() {
        if(!$this->hasData(self::KEY_PRODUCT_ATTRIBUTES)) {
            $this->setData(self::KEY_PRODUCT_ATTRIBUTES, Mage::getStoreConfig(self::XML_PATH_PRODUCT_ATTRIBUTES));
        }
        return $this->getData(self::KEY_PRODUCT_ATTRIBUTES);
    }
    
    /**
     * Is category purification enabled?
     * 
     * @return boolean
     */
    public function isCategoryEnabled() {
        if(!$this->hasData(self::KEY_CATEGORY_ENABLED)) {
            $this->setData(self::KEY_CATEGORY_ENABLED, Mage::getStoreConfigFlag(self::XML_PATH_CATEGORY_ENABLED));
        }
        return $this->getData(self::KEY_CATEGORY_ENABLED);
    }

    /**
     * Retrieves a comma-separated list of category attributes that must be purified
     * 
     * @return string
     */
    public function getCategoryAttributes() {
        if(!$this->hasData(self::KEY_CATEGORY_ATTRIBUTES)) {
            $this->setData(self::KEY_CATEGORY_ATTRIBUTES, Mage::getStoreConfig(self::XML_PATH_CATEGORY_ATTRIBUTES));
        }
        return $this->getData(self::KEY_CATEGORY_ATTRIBUTES);
    }
    
    /**
     * Initializes the underlying HTMLPurifier instance
     */
    protected function _initPurifier() {
        
        /** @var $config HTMLPurifier_Config */
        $config = HTMLPurifier_Config::createDefault();
        
        foreach(array('attributes', 'html'/*, 'format', 'css', 'uri'*/, 'html5') as $module) {
            Mage::helper(sprintf('integrity/htmlPurifier_%s', $module))->configure($config);
        }
        $this->_purifier = new HTMLPurifier($config);
    }
    
    /**
     * Purifies the provided HTML string as configured by the store administrator.
     * 
     * @param string $html the HTML string to purify
     * 
     * @return string
     */
    public function purify(string $html) {
        if(!$this->_purifier) {
            $this->_initPurifier();
        }
        return $this->_purifier->purify($html);
    }
}
