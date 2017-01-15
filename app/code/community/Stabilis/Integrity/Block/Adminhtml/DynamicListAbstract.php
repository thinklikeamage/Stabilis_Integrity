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
 * Abstract base class for a dynamic list element.
 * 
 * @package  Stabilis
 * @category Stabilis_Integrity
 */
abstract class Stabilis_Integrity_Block_Adminhtml_DynamicListAbstract 
    extends Mage_Adminhtml_Block_System_Config_Form_Field {
        
    /**
     * Retrieves the translation key for the new button label
     * 
     * @return string
     */
    protected function _getNewButtonText() {
        return 'Add New';
    }
    
    /**
     * Retrieves the unique element list type for the derived class
     * 
     * @return string
     */
    protected function _getListElementType() {
        return 'generic';
    }
    
    /**
     * Retrieves the space-separated validation classes for the derived class
     * 
     * @return string
     */
    protected function _getValidationClasses() {
        return 'required-entry';
    }
    
    /**
     * Retrieves the translation key for the delete button
     * 
     * @return string
     */
    protected function _getDeleteButtonText() {
        return 'Delete';
    }
    
    /**
     * Retrieves the HTML markup for an individual data row.
     * 
     * @param string $validations a space-separated list of client-side validations to apply
     * 
     * @param string $value the value of the row element
     * 
     * @return string
     * 
     */
    protected function _getRowTemplateHtml($validations = '{0}', $value = '') {

        return sprintf('<li><div style="margin:5px 0 10px;"><input class="%s" style="width:200px;" name="%s[sources][]" value="%s" />%s</div></li>',
            $validations,
            $this->getElement()->getName(),
            $value,
            $this->getLayout()->createBlock('adminhtml/widget_button')
                ->setType('button')
                ->setClass('delete v-middle')
                ->setLabel(Mage::helper('integrity')->__($this->_getDeleteButtonText()))
                ->setOnClick("Element.remove($(this).up('li'))")
                ->toHtml()
        );
    }
    
    /**
     * Retrieves the hidden row that acts as the client-side template
     * 
     * @return string
     */
    protected function _getHiddenRowTemplate() {
        $template = <<<EOT
<div style="display:inline-block" id="%s">
    <div id="%s_template" style="display:none;">
        %s
    </div>
</div>
EOT;
        return sprintf($template,
                $this->getElement()->getId(),
                $this->_getListElementType(),
                $this->_getRowTemplateHtml());
    }
    
    /**
     * Retrieves the tooltip HTML of provided element if a tooltip hint exists.
     * 
     * @param Varien_Data_Form_Element_Abstract $element the element to render
     * 
     * @return string
     */
    protected function _getTooltipHtml(Varien_Data_Form_Element_Abstract $element) {
        return $element->getTooltip() ? 
            sprintf('<div class="field-tooltip" style="margin-left:10px;"><div>%s</div></div>', $element->getTooltip()) : 
            '';
    }
    
    /**
     * Retrieves the HTML output of the 'Add New' button
     * 
     * @return string
     */
    protected function _getAddRowButtonHtml() {
        return $this->getLayout()->createBlock('adminhtml/widget_button')
                ->setType('button')
                ->setClass('add')
                ->setLabel($this->__($this->_getNewButtonText()))
                ->setOnClick("Element.insert($('" . $this->_getListElementType() . '_container' . "'), {bottom: $('" . $this->_getListElementType() . '_template' . "').innerHTML.replace('{0}', '" . $this->_getValidationClasses() . "')})")
                ->toHtml();
    }
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $this->setElement($element);
        $html = $this->_getHiddenRowTemplate();

        $html .= '<ul id="' . $this->_getListElementType() . '_container">';
        if ($this->_getValue('sources')) {
            foreach ($this->_getValue('sources') as $i => $f) {
                if ($i) {
                    $html .= $this->_getRowTemplateHtml($this->_getValidationClasses(), $this->_getValue('sources/' . $i));
                }
            }
        }
        $html .= '</ul>';
        $html .= $this->_getAddRowButtonHtml();
        $html .= $this->_getTooltipHtml($element);
        $html .= '</div>';
        return $html;
    }
    
    protected function _getValue($key)
    {
        return $this->getElement()->getData('value/' . $key);
    }
    
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $id = $element->getHtmlId();

        $html = '<td class="label"><label for="'.$id.'">'.$element->getLabel().'</label></td>';

        //$isDefault = !$this->getRequest()->getParam('website') && !$this->getRequest()->getParam('store');
        $isMultiple = $element->getExtType()==='multiple';

        // replace [value] with [inherit]
        $namePrefix = preg_replace('#\[value\](\[\])?$#', '', $element->getName());

        $options = $element->getValues();

        $addInheritCheckbox = false;
        if ($element->getCanUseWebsiteValue()) {
            $addInheritCheckbox = true;
            $checkboxLabel = $this->__('Use Website');
        }
        elseif ($element->getCanUseDefaultValue()) {
            $addInheritCheckbox = true;
            $checkboxLabel = $this->__('Use Default');
        }

        if ($addInheritCheckbox) {
            $inherit = $element->getInherit()==1 ? 'checked="checked"' : '';
            if ($inherit) {
                $element->setDisabled(true);
            }
        }

        if ($element->getTooltip()) {
            $html .= '<td class="value with-tooltip">';
        } else {
            $html .= '<td class="value">';
        };
        $html .= $this->_getElementHtml($element);
        if ($element->getComment()) {
            $html.= '<p class="note"><span>'.$element->getComment().'</span></p>';
        }
        $html.= '</td>';

        if ($addInheritCheckbox) {

            $defText = $element->getDefaultValue();
            if ($options) {
                $defTextArr = array();
                foreach ($options as $k=>$v) {
                    if ($isMultiple) {
                        if (is_array($v['value']) && in_array($k, $v['value'])) {
                            $defTextArr[] = $v['label'];
                        }
                    } elseif (isset($v['value'])) {
                        if ($v['value'] == $defText) {
                            $defTextArr[] = $v['label'];
                            break;
                        }
                    } elseif (!is_array($v)) {
                        if ($k == $defText) {
                            $defTextArr[] = $v;
                            break;
                        }
                    }
                }
                $defText = join(', ', $defTextArr);
            }

            // default value
            $html.= '<td class="use-default">';
            $html.= '<input id="' . $id . '_inherit" name="'
                . $namePrefix . '[inherit]" type="checkbox" value="1" class="checkbox config-inherit" '
                . $inherit . ' onclick="toggleValueElements(this, Element.previous(this.parentNode))" /> ';
            $html.= '<label for="' . $id . '_inherit" class="inherit" title="'
                . htmlspecialchars($defText) . '">' . $checkboxLabel . '</label>';
            $html.= '</td>';
        }

        $html.= '<td class="scope-label">';
        if ($element->getScope()) {
            $html .= $element->getScopeLabel();
        }
        $html.= '</td>';

        $html.= '<td class="">';
        if ($element->getHint()) {
            $html.= '<div class="hint" >';
            $html.= '<div style="display: none;">' . $element->getHint() . '</div>';
            $html.= '</div>';
        }
        $html.= '</td>';

        return $this->_decorateRowHtml($element, $html);
    }
}