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

class Stabilis_Integrity_Model_System_Config_Source_CssProperty
    implements Stabilis_Integrity_Model_Source_Model_Interface {
    
    public function toOptionArray() {
        return array(
        array('label' => 'Display', 'value' => array(
          array('label' => 'display', 'value' => 'display'),
          array('label' => 'opacity', 'value' => 'opacity'),
          array('label' => 'visibility', 'value' => 'visibility'),
          array('label' => 'z-index', 'value' => 'z-index'))),
        array('label' => 'Viewport / Zoom', 'value' => array(
          array('label' => 'orientation', 'value' => 'orientation'),
          array('label' => 'max-zoom', 'value' => 'max-zoom'),
          array('label' => 'min-zoom', 'value' => 'min-zoom'),
          array('label' => 'user-zoom', 'value' => 'user-zoom'),
          array('label' => 'zoom', 'value' => 'zoom'))),
        array('label' => 'Positioning', 'value' => array(
          array('label' => 'position', 'value' => 'position'),
          array('label' => 'top', 'value' => 'top'),
          array('label' => 'right', 'value' => 'right'),
          array('label' => 'bottom', 'value' => 'bottom'),
          array('label' => 'left', 'value' => 'left'))),
        array('label' => 'Flex Box', 'value' => array(
          array('label' => 'flex', 'value' => 'flex'),
            array('label' => 'flex-grow', 'value' => 'flex-grow'),
            array('label' => 'flex-shrink', 'value' => 'flex-shrink'),
            array('label' => 'flex-basis', 'value' => 'flex-basis'),
          array('label' => 'flex-flow', 'value' => 'flex-flow'),
            array('label' => 'flex-direction', 'value' => 'flex-direction'),
            array('label' => 'flex-wrap', 'value' => 'flex-wrap'),
          array('label' => 'justify-content', 'value' => 'justify-content'),
          array('label' => 'align-items', 'value' => 'align-items'),
          array('label' => 'align-content', 'value' => 'align-content'),
          array('label' => 'align-self', 'value' => 'align-self'),
          array('label' => 'order', 'value' => 'order'))),
        array('label' => 'Float / Clear', 'value' => array(
          array('label' => 'float', 'value' => 'float'),
          array('label' => 'clear', 'value' => 'clear'))),
        array('label' => 'Dimensions', 'value' => array(
          array('label' => 'box-sizing', 'value' => 'box-sizing'),
          array('label' => 'width', 'value' => 'width'),
          array('label' => 'min-width', 'value' => 'min-width'),
          array('label' => 'max-width', 'value' => 'max-width'),
          array('label' => 'height', 'value' => 'height'),
          array('label' => 'min-height', 'value' => 'min-height'),
          array('label' => 'max-height', 'value' => 'max-height'))),
        array('label' => 'Spacing / Borders', 'value' => array(
          array('label' => 'margin', 'value' => 'margin'),
            array('label' => 'margin-top', 'value' => 'margin-top'),
            array('label' => 'margin-right', 'value' => 'margin-right'),
            array('label' => 'margin-bottom', 'value' => 'margin-bottom'),
            array('label' => 'margin-left', 'value' => 'margin-left'),
          array('label' => 'padding', 'value' => 'padding'),
            array('label' => 'padding-top', 'value' => 'padding-top'),
            array('label' => 'padding-right', 'value' => 'padding-right'),
            array('label' => 'padding-bottom', 'value' => 'padding-bottom'),
            array('label' => 'padding-left', 'value' => 'padding-left'),
          array('label' => 'border', 'value' => 'border'),
            array('label' => 'border-width', 'value' => 'border-width'),
            array('label' => 'border-style', 'value' => 'border-style'),
            array('label' => 'border-color', 'value' => 'border-color'),
            array('label' => 'border-top', 'value' => 'border-top'),
            array('label' => 'border-top-width', 'value' => 'border-top-width'),
            array('label' => 'border-top-style', 'value' => 'border-top-style'),
            array('label' => 'border-top-color', 'value' => 'border-top-color'),
            array('label' => 'border-right', 'value' => 'border-right'),
            array('label' => 'border-right-width', 'value' => 'border-right-width'),
            array('label' => 'border-right-style', 'value' => 'border-right-style'),
            array('label' => 'border-right-color', 'value' => 'border-right-color'),
            array('label' => 'border-bottom', 'value' => 'border-bottom'),
            array('label' => 'border-bottom-width', 'value' => 'border-bottom-width'),
            array('label' => 'border-bottom-style', 'value' => 'border-bottom-style'),
            array('label' => 'border-bottom-color', 'value' => 'border-bottom-color'),
            array('label' => 'border-left', 'value' => 'border-left'),
            array('label' => 'border-left-width', 'value' => 'border-left-width'),
            array('label' => 'border-left-style', 'value' => 'border-left-style'),
            array('label' => 'border-left-color', 'value' => 'border-left-color'),
          array('label' => 'border-radius', 'value' => 'border-radius'),
            array('label' => 'border-top-left-radius', 'value' => 'border-top-left-radius'),
            array('label' => 'border-top-right-radius', 'value' => 'border-top-right-radius'),
            array('label' => 'border-bottom-right-radius', 'value' => 'border-bottom-right-radius'),
            array('label' => 'border-bottom-left-radius', 'value' => 'border-bottom-left-radius'),
          array('label' => 'border-image', 'value' => 'border-image'),
            array('label' => 'border-image-source', 'value' => 'border-image-source'),
            array('label' => 'border-image-slice', 'value' => 'border-image-slice'),
            array('label' => 'border-image-width', 'value' => 'border-image-width'),
            array('label' => 'border-image-outset', 'value' => 'border-image-outset'),
            array('label' => 'border-image-repeat', 'value' => 'border-image-repeat'),
          array('label' => 'border-top-image', 'value' => 'border-top-image'),
          array('label' => 'border-right-image', 'value' => 'border-right-image'),
          array('label' => 'border-bottom-image', 'value' => 'border-bottom-image'),
          array('label' => 'border-left-image', 'value' => 'border-left-image'),
          array('label' => 'border-corner-image', 'value' => 'border-corner-image'),
          array('label' => 'border-top-left-image', 'value' => 'border-top-left-image'),
          array('label' => 'border-top-right-image', 'value' => 'border-top-right-image'),
          array('label' => 'border-bottom-right-image', 'value' => 'border-bottom-right-image'),
          array('label' => 'border-bottom-left-image', 'value' => 'border-bottom-left-image'))),
        array('label' => 'Outlines', 'value' => array(
          array('label' => 'outline', 'value' => 'outline'),
            array('label' => 'outline-width', 'value' => 'outline-width'),
            array('label' => 'outline-style', 'value' => 'outline-style'),
            array('label' => 'outline-color', 'value' => 'outline-color'),
          array('label' => 'outline-offset', 'value' => 'outline-offset'))),
        array('label' => 'Overflow', 'value' => array(
          array('label' => 'clip', 'value' => 'clip'),
          array('label' => 'overflow', 'value' => 'overflow'),
          array('label' => 'overflow-x', 'value' => 'overflow-x'),
          array('label' => 'overflow-y', 'value' => 'overflow-y'))),
        array('label' => 'Lists', 'value' => array(
          array('label' => 'list-style', 'value' => 'list-style'),
          array('label' => 'list-style-position', 'value' => 'list-style-position'),
          array('label' => 'list-style-type', 'value' => 'list-style-type'),
          array('label' => 'list-style-image', 'value' => 'list-style-image'))),
        array('label' => 'Tables', 'value' => array(
          array('label' => 'table-layout', 'value' => 'table-layout'),
          array('label' => 'border-spacing', 'value' => 'border-spacing'),
          array('label' => 'border-collapse', 'value' => 'border-collapse'),
          array('label' => 'caption-side', 'value' => 'caption-side'),
          array('label' => 'empty-cells', 'value' => 'empty-cells'))),
        array('label' => 'Columns', 'value' => array(
          array('label' => 'columns', 'value' => 'columns'),
            array('label' => 'column-width', 'value' => 'column-width'),
            array('label' => 'column-count', 'value' => 'column-count'),
          array('label' => 'column-fill', 'value' => 'column-fill'),
          array('label' => 'column-gap', 'value' => 'column-gap'),
          array('label' => 'column-rule', 'value' => 'column-rule'),
            array('label' => 'column-rule-width', 'value' => 'column-rule-width'),
            array('label' => 'column-rule-style', 'value' => 'column-rule-style'),
            array('label' => 'column-rule-color', 'value' => 'column-rule-color'),
          array('label' => 'column-span', 'value' => 'column-span'))),
        array('label' => 'Direction', 'value' => array(
          array('label' => 'direction', 'value' => 'direction'))),
        array('label' => 'Text Style', 'value' => array(
          array('label' => 'color', 'value' => 'color'),
          array('label' => 'font', 'value' => 'font'),
            array('label' => 'font-style', 'value' => 'font-style'),
            array('label' => 'font-variant', 'value' => 'font-variant'),
            array('label' => 'font-weight', 'value' => 'font-weight'),
            array('label' => 'font-size', 'value' => 'font-size'),
            array('label' => 'line-height', 'value' => 'line-height'),
            array('label' => 'font-family', 'value' => 'font-family'),
          array('label' => 'font-size-adjust', 'value' => 'font-size-adjust'),
          array('label' => 'font-stretch', 'value' => 'font-stretch'),
          array('label' => 'text-align', 'value' => 'text-align'),
          array('label' => 'text-align-last', 'value' => 'text-align-last'),
          array('label' => 'text-decoration', 'value' => 'text-decoration'),
          array('label' => 'text-emphasis', 'value' => 'text-emphasis'),  // For east Asian characters
            array('label' => 'text-emphasis-position', 'value' => 'text-emphasis-position'),
            array('label' => 'text-emphasis-style', 'value' => 'text-emphasis-style'),
            array('label' => 'text-emphasis-color', 'value' => 'text-emphasis-color'),
          array('label' => 'text-indent', 'value' => 'text-indent'),
          array('label' => 'text-justify', 'value' => 'text-justify'),
          array('label' => 'text-outline', 'value' => 'text-outline'),
          array('label' => 'text-overflow', 'value' => 'text-overflow'),
          array('label' => 'text-overflow-ellipsis', 'value' => 'text-overflow-ellipsis'),
          array('label' => 'text-overflow-mode', 'value' => 'text-overflow-mode'),
          array('label' => 'text-size-adjust', 'value' => 'text-size-adjust'),
          array('label' => 'text-transform', 'value' => 'text-transform'),
          array('label' => 'text-wrap', 'value' => 'text-wrap'),
          array('label' => 'text-shadow', 'value' => 'text-shadow'),
          array('label' => 'vertical-align', 'value' => 'vertical-align'),
          array('label' => 'writing-mode', 'value' => 'writing-mode'))),
        array('label' => 'White Space', 'value' => array(
          array('label' => 'hyphens', 'value' => 'hyphens'),
          array('label' => 'letter-spacing', 'value' => 'letter-spacing'),
          array('label' => 'tab-size', 'value' => 'tab-size'),
          array('label' => 'white-space', 'value' => 'white-space'),
          array('label' => 'word-break', 'value' => 'word-break'),
          array('label' => 'word-spacing', 'value' => 'word-spacing'),
          array('label' => 'word-wrap', 'value' => 'word-wrap'))),
        array('label' => 'Pointer', 'value' => array(
          array('label' => 'cursor', 'value' => 'cursor'))),
        array('label' => 'Interaction', 'value' => array(
          array('label' => 'nav-index', 'value' => 'nav-index'),
          array('label' => 'nav-up', 'value' => 'nav-up'),
          array('label' => 'nav-right', 'value' => 'nav-right'),
          array('label' => 'nav-down', 'value' => 'nav-down'),
          array('label' => 'nav-left', 'value' => 'nav-left'),
          array('label' => 'pointer-events', 'value' => 'pointer-events'),
          array('label' => 'resize', 'value' => 'resize'))),
        array('label' => 'Generated Content', 'value' => array(
          array('label' => 'content', 'value' => 'content'),
          array('label' => 'counter-increment', 'value' => 'counter-increment'),
          array('label' => 'counter-reset', 'value' => 'counter-reset'),
          array('label' => 'quotes', 'value' => 'quotes'))),
        array('label' => 'Background', 'value' => array(
          array('label' => 'background', 'value' => 'background'),
            array('label' => 'background-color', 'value' => 'background-color'),
            array('label' => 'background-image', 'value' => 'background-image'),
            array('label' => 'background-repeat', 'value' => 'background-repeat'),
            array('label' => 'background-attachment', 'value' => 'background-attachment'),
            array('label' => 'background-position', 'value' => 'background-position'),
          array('label' => 'background-clip', 'value' => 'background-clip'),
          array('label' => 'background-origin', 'value' => 'background-origin'),
          array('label' => 'background-size', 'value' => 'background-size'))),
        array('label' => 'Shadows', 'value' => array(
          array('label' => 'box-shadow', 'value' => 'box-shadow'))),
        array('label' => 'Transitions', 'value' => array(
          array('label' => 'transition', 'value' => 'transition'),
            array('label' => 'transition-property', 'value' => 'transition-property'),
            array('label' => 'transition-duration', 'value' => 'transition-duration'),
            array('label' => 'transition-timing-function', 'value' => 'transition-timing-function'),
            array('label' => 'transition-delay', 'value' => 'transition-delay'))),
        array('label' => 'Animation', 'value' => array(
          array('label' => 'animation', 'value' => 'animation'),
            array('label' => 'animation-name', 'value' => 'animation-name'),
            array('label' => 'animation-duration', 'value' => 'animation-duration'),
            array('label' => 'animation-timing-function', 'value' => 'animation-timing-function'),
            array('label' => 'animation-delay', 'value' => 'animation-delay'),
            array('label' => 'animation-iteration-count', 'value' => 'animation-iteration-count'),
            array('label' => 'animation-direction', 'value' => 'animation-direction'),
            array('label' => 'animation-fill-mode', 'value' => 'animation-fill-mode'),
          array('label' => 'animation-play-state', 'value' => 'animation-play-state'))),
        array('label' => 'Transformations', 'value' => array(
          array('label' => 'filter', 'value' => 'filter'),
          array('label' => 'transform', 'value' => 'transform'),
          array('label' => 'transform-origin', 'value' => 'transform-origin'))),
        array('label' => 'Print Styles', 'value' => array(
          array('label' => 'box-decoration-break', 'value' => 'box-decoration-break'),
          array('label' => 'break-before', 'value' => 'break-before'),
          array('label' => 'break-inside', 'value' => 'break-inside'),
          array('label' => 'break-after', 'value' => 'break-after'),
          array('label' => 'page-break-before', 'value' => 'page-break-before'),
          array('label' => 'page-break-inside', 'value' => 'page-break-inside'),
          array('label' => 'page-break-after', 'value' => 'page-break-after'),
          array('label' => 'orphans', 'value' => 'orphans'),
          array('label' => 'widows', 'value' => 'widows')))
      );
    }

}
