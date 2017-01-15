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
