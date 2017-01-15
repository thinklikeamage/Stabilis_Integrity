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
