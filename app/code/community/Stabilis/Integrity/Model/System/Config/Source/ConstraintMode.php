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
