<?php
/**
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * Licensed per the author of the original configuration:
 * 
 * Copyright 2014 Alex Kennberg (https://github.com/kennberg/php-htmlpurifier-html5)
 */
?>
<?php
/**
 * Helper class for applying HTML-5 definitions to an HTMLPurifier_Config instance.
 * 
 * @package  Stabilis
 * @category Stabilis_Integrity
 */
class Stabilis_Integrity_Helper_HtmlPurifier_Html5
    extends Stabilis_Integrity_Helper_HtmlPurifier_Abstract {
    
    /**
     * {@inheritDoc}
     */
    public function configure(\HTMLPurifier_Config &$config) {
        if(Mage::helper('integrity/htmlPurifier_html')->getDoctype() == 
                Stabilis_Integrity_Model_System_Config_Source_Doctype::HTML5) {
            $config->set('HTML.DefinitionID', 'html5-definitions');
            $config->set('HTML.DefinitionRev', 1);
            if(($def = $config->getHTMLDefinition(true, false))) {
                $def->addElement('section', 'Block', 'Flow', 'Common');
                $def->addElement('nav',     'Block', 'Flow', 'Common');
                $def->addElement('article', 'Block', 'Flow', 'Common');
                $def->addElement('aside',   'Block', 'Flow', 'Common');
                $def->addElement('header',  'Block', 'Flow', 'Common');
                $def->addElement('footer',  'Block', 'Flow', 'Common');
                $def->addElement('address', 'Block', 'Flow', 'Common');
                $def->addElement('hgroup', 'Block', 'Required: h1 | h2 | h3 | h4 | h5 | h6', 'Common');
                $def->addElement('figure', 'Block', 'Optional: (figcaption, Flow) | (Flow, figcaption) | Flow', 'Common');
                $def->addElement('figcaption', 'Inline', 'Flow', 'Common');
                $def->addElement('video', 'Block', 'Optional: (source, Flow) | (Flow, source) | Flow', 'Common', array(
                  'src' => 'URI',
                  'type' => 'Text',
                  'width' => 'Length',
                  'height' => 'Length',
                  'poster' => 'URI',
                  'preload' => 'Enum#auto,metadata,none',
                  'controls' => 'Bool',
                ));
                $def->addElement('source', 'Block', 'Flow', 'Common', array(
                  'src' => 'URI',
                  'type' => 'Text',
                ));
                $def->addElement('s',    'Inline', 'Inline', 'Common');
                $def->addElement('var',  'Inline', 'Inline', 'Common');
                $def->addElement('sub',  'Inline', 'Inline', 'Common');
                $def->addElement('sup',  'Inline', 'Inline', 'Common');
                $def->addElement('mark', 'Inline', 'Inline', 'Common');
                $def->addElement('wbr',  'Inline', 'Empty', 'Core');
                $def->addElement('ins', 'Block', 'Flow', 'Common', array('cite' => 'URI', 'datetime' => 'CDATA'));
                $def->addElement('del', 'Block', 'Flow', 'Common', array('cite' => 'URI', 'datetime' => 'CDATA'));
                $def->addAttribute('img', 'data-mce-src', 'Text');
                $def->addAttribute('img', 'data-mce-json', 'Text');
                $def->addAttribute('iframe', 'allowfullscreen', 'Bool');
                $def->addAttribute('table', 'height', 'Text');
                $def->addAttribute('td', 'border', 'Text');
                $def->addAttribute('th', 'border', 'Text');
                $def->addAttribute('tr', 'width', 'Text');
                $def->addAttribute('tr', 'height', 'Text');
                $def->addAttribute('tr', 'border', 'Text');
            }
        }
    }
}
