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

class Stabilis_Integrity_Model_System_Config_Source_HtmlAttribute
    extends Varien_Object
    implements Stabilis_Integrity_Model_Source_Model_Interface {
    
    const KEY_OPTIONS    = 'options';
    
    public function toOptionArray() {
        if(!$this->hasData(self::KEY_OPTIONS)) {
            $helper = Mage::helper('integrity');
            $this->setData(
                self::KEY_OPTIONS,
                array(
                    array('label' => 'accesskey', 'value' => 'accesskey'),
                    array('label' => 'class', 'value' => 'class'),
                    array('label' => 'contenteditable', 'value' => 'contenteditable'),
                    array('label' => 'contextmenu', 'value' => 'contextmenu'),
                    array('label' => 'dir', 'value' => 'dir'),
                    array('label' => 'draggable', 'value' => 'draggable'),
                    array('label' => 'dropzone', 'value' => 'dropzone'),
                    array('label' => 'hidden', 'value' => 'hidden'),
                    array('label' => 'id', 'value' => 'id'),
                    array('label' => 'lang', 'value' => 'lang'),
                    array('label' => 'spellcheck', 'value' => 'spellcheck'),
                    array('label' => 'style', 'value' => 'style'),
                    array('label' => 'tabindex', 'value' => 'tabindex'),
                    array('label' => 'title', 'value' => 'title'),
                    array('label' => 'translate', 'value' => 'translate'),
                    array('label' => 'onabort', 'value' => 'onabort'),
                    array('label' => 'onblur', 'value' => 'onblur'),
                    array('label' => 'oncanplay', 'value' => 'oncanplay'),
                    array('label' => 'oncanplaythrough', 'value' => 'oncanplaythrough'),
                    array('label' => 'onchange', 'value' => 'onchange'),
                    array('label' => 'onclick', 'value' => 'onclick'),
                    array('label' => 'oncontextmenu', 'value' => 'oncontextmenu'),
                    array('label' => 'ondblclick', 'value' => 'ondblclick'),
                    array('label' => 'ondrag', 'value' => 'ondrag'),
                    array('label' => 'ondragend', 'value' => 'ondragend'),
                    array('label' => 'ondragenter', 'value' => 'ondragenter'),
                    array('label' => 'ondragleave', 'value' => 'ondragleave'),
                    array('label' => 'ondragover', 'value' => 'ondragover'),
                    array('label' => 'ondragstart', 'value' => 'ondragstart'),
                    array('label' => 'ondrop', 'value' => 'ondrop'),
                    array('label' => 'ondurationchange', 'value' => 'ondurationchange'),
                    array('label' => 'onemptied', 'value' => 'onemptied'),
                    array('label' => 'onended', 'value' => 'onended'),
                    array('label' => 'onerror', 'value' => 'onerror'),
                    array('label' => 'onfocus', 'value' => 'onfocus'),
                    array('label' => 'oninput', 'value' => 'oninput'),
                    array('label' => 'oninvalid', 'value' => 'oninvalid'),
                    array('label' => 'onkeydown', 'value' => 'onkeydown'),
                    array('label' => 'onkeypress', 'value' => 'onkeypress'),
                    array('label' => 'onkeyup', 'value' => 'onkeyup'),
                    array('label' => 'onload', 'value' => 'onload'),
                    array('label' => 'onloadeddata', 'value' => 'onloadeddata'),
                    array('label' => 'onloadedmetadata', 'value' => 'onloadedmetadata'),
                    array('label' => 'onloadstart', 'value' => 'onloadstart'),
                    array('label' => 'onmousedown', 'value' => 'onmousedown'),
                    array('label' => 'onmousemove', 'value' => 'onmousemove'),
                    array('label' => 'onmouseout', 'value' => 'onmouseout'),
                    array('label' => 'onmouseover', 'value' => 'onmouseover'),
                    array('label' => 'onmouseup', 'value' => 'onmouseup'),
                    array('label' => 'onmousewheel', 'value' => 'onmousewheel'),
                    array('label' => 'onpause', 'value' => 'onpause'),
                    array('label' => 'onplay', 'value' => 'onplay'),
                    array('label' => 'onplaying', 'value' => 'onplaying'),
                    array('label' => 'onprogress', 'value' => 'onprogress'),
                    array('label' => 'onratechange', 'value' => 'onratechange'),
                    array('label' => 'onreadystatechange', 'value' => 'onreadystatechange'),
                    array('label' => 'onreset', 'value' => 'onreset'),
                    array('label' => 'onscroll', 'value' => 'onscroll'),
                    array('label' => 'onseeked', 'value' => 'onseeked'),
                    array('label' => 'onseeking', 'value' => 'onseeking'),
                    array('label' => 'onselect', 'value' => 'onselect'),
                    array('label' => 'onshow', 'value' => 'onshow'),
                    array('label' => 'onstalled', 'value' => 'onstalled'),
                    array('label' => 'onsubmit', 'value' => 'onsubmit'),
                    array('label' => 'onsuspend', 'value' => 'onsuspend'),
                    array('label' => 'ontimeupdate', 'value' => 'ontimeupdate'),
                    array('label' => 'onvolumechange', 'value' => 'onvolumechange'),
                    array('label' => 'onwaiting', 'value' => 'onwaiting'),
                    array('label' => 'xml:lang', 'value' => 'xml:lang'),
                    array('label' => 'xml:space', 'value' => 'xml:space'),
                    array('label' => 'xml:base', 'value' => 'xml:base')
                )
            );
        }
        return $this->getData(self::KEY_OPTIONS);
    }
}



