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

class Stabilis_Integrity_Model_System_Config_Source_HtmlElement 
    extends Varien_Object
    implements Stabilis_Integrity_Model_Source_Model_Interface {
    
    const KEY_OPTIONS    = 'options';
    
    public function toOptionArray() {
        if(!$this->hasData(self::KEY_OPTIONS)) {
            $helper = Mage::helper('integrity');
            $this->setData(
                self::KEY_OPTIONS,
                array(
                    array('label' => 'a', 'value' => 'a'),
                    array('label' => 'abbr', 'value' => 'abbr'),
                    array('label' => 'address', 'value' => 'address'),
                    array('label' => 'area', 'value' => 'area'),
                    array('label' => 'article', 'value' => 'article'),
                    array('label' => 'aside', 'value' => 'aside'),
                    array('label' => 'audio', 'value' => 'audio'),
                    array('label' => 'b', 'value' => 'b'),
                    array('label' => 'base', 'value' => 'base'),
                    array('label' => 'bdi', 'value' => 'bdi'),
                    array('label' => 'bdo', 'value' => 'bdo'),
                    array('label' => 'blockquote', 'value' => 'blockquote'),
                    array('label' => 'body', 'value' => 'body'),
                    array('label' => 'br', 'value' => 'br'),
                    array('label' => 'button', 'value' => 'button'),
                    array('label' => 'canvas', 'value' => 'canvas'),
                    array('label' => 'caption', 'value' => 'caption'),
                    array('label' => 'cite', 'value' => 'cite'),
                    array('label' => 'code', 'value' => 'code'),
                    array('label' => 'col', 'value' => 'col'),
                    array('label' => 'colgroup', 'value' => 'colgroup'),
                    array('label' => 'command', 'value' => 'command'),
                    array('label' => 'datalist', 'value' => 'datalist'),
                    array('label' => 'dd', 'value' => 'dd'),
                    array('label' => 'del', 'value' => 'del'),
                    array('label' => 'details', 'value' => 'details'),
                    array('label' => 'dfn', 'value' => 'dfn'),
                    array('label' => 'div', 'value' => 'div'),
                    array('label' => 'dl', 'value' => 'dl'),
                    array('label' => 'dt', 'value' => 'dt'),
                    array('label' => 'em', 'value' => 'em'),
                    array('label' => 'embed', 'value' => 'embed'),
                    array('label' => 'fieldset', 'value' => 'fieldset'),
                    array('label' => 'figcaption', 'value' => 'figcaption'),
                    array('label' => 'figure', 'value' => 'figure'),
                    array('label' => 'footer', 'value' => 'footer'),
                    array('label' => 'form', 'value' => 'form'),
                    array('label' => 'h1', 'value' => 'h1'),
                    array('label' => 'h2', 'value' => 'h2'),
                    array('label' => 'h3', 'value' => 'h3'),
                    array('label' => 'h4', 'value' => 'h4'),
                    array('label' => 'h5', 'value' => 'h5'),
                    array('label' => 'h6', 'value' => 'h6'),
                    array('label' => 'head', 'value' => 'head'),
                    array('label' => 'header', 'value' => 'header'),
                    array('label' => 'hgroup', 'value' => 'hgroup'),
                    array('label' => 'hr', 'value' => 'hr'),
                    array('label' => 'html', 'value' => 'html'),
                    array('label' => 'i', 'value' => 'i'),
                    array('label' => 'iframe', 'value' => 'iframe'),
                    array('label' => 'img', 'value' => 'img'),
                    array('label' => 'input', 'value' => 'input'),
                    array('label' => 'ins', 'value' => 'ins'),
                    array('label' => 'kbd', 'value' => 'kbd'),
                    array('label' => 'keygen', 'value' => 'keygen'),
                    array('label' => 'label', 'value' => 'label'),
                    array('label' => 'legend', 'value' => 'legend'),
                    array('label' => 'li', 'value' => 'li'),
                    array('label' => 'link', 'value' => 'link'),
                    array('label' => 'map', 'value' => 'map'),
                    array('label' => 'mark', 'value' => 'mark'),
                    array('label' => 'menu', 'value' => 'menu'),
                    array('label' => 'meta', 'value' => 'meta'),
                    array('label' => 'meter', 'value' => 'meter'),
                    array('label' => 'nav', 'value' => 'nav'),
                    array('label' => 'noscript', 'value' => 'noscript'),
                    array('label' => 'object', 'value' => 'object'),
                    array('label' => 'ol', 'value' => 'ol'),
                    array('label' => 'optgroup', 'value' => 'optgroup'),
                    array('label' => 'option', 'value' => 'option'),
                    array('label' => 'output', 'value' => 'output'),
                    array('label' => 'p', 'value' => 'p'),
                    array('label' => 'param', 'value' => 'param'),
                    array('label' => 'pre', 'value' => 'pre'),
                    array('label' => 'progress', 'value' => 'progress'),
                    array('label' => 'q', 'value' => 'q'),
                    array('label' => 'rp', 'value' => 'rp'),
                    array('label' => 'rt', 'value' => 'rt'),
                    array('label' => 'ruby', 'value' => 'ruby'),
                    array('label' => 's', 'value' => 's'),
                    array('label' => 'samp', 'value' => 'samp'),
                    array('label' => 'script', 'value' => 'script'),
                    array('label' => 'section', 'value' => 'section'),
                    array('label' => 'select', 'value' => 'select'),
                    array('label' => 'small', 'value' => 'small'),
                    array('label' => 'source', 'value' => 'source'),
                    array('label' => 'span', 'value' => 'span'),
                    array('label' => 'strong', 'value' => 'strong'),
                    array('label' => 'style', 'value' => 'style'),
                    array('label' => 'sub', 'value' => 'sub'),
                    array('label' => 'summary', 'value' => 'summary'),
                    array('label' => 'sup', 'value' => 'sup'),
                    array('label' => 'table', 'value' => 'table'),
                    array('label' => 'tbody', 'value' => 'tbody'),
                    array('label' => 'td', 'value' => 'td'),
                    array('label' => 'textarea', 'value' => 'textarea'),
                    array('label' => 'tfoot', 'value' => 'tfoot'),
                    array('label' => 'th', 'value' => 'th'),
                    array('label' => 'thead', 'value' => 'thead'),
                    array('label' => 'time', 'value' => 'time'),
                    array('label' => 'title', 'value' => 'title'),
                    array('label' => 'tr', 'value' => 'tr'),
                    array('label' => 'track', 'value' => 'track'),
                    array('label' => 'u', 'value' => 'u'),
                    array('label' => 'ul', 'value' => 'ul'),
                    array('label' => 'var', 'value' => 'var'),
                    array('label' => 'video', 'value' => 'video'),
                    array('label' => 'wbr', 'value' => 'wbr'),
                )
            );
        }
        return $this->getData(self::KEY_OPTIONS);
    }
}



