<?php

class Stabilis_Integrity_Helper_HtmlPurifier_HtmlTest extends PHPUnit_Framework_TestCase {
    
    const QUALIFIED_CLASS_NAME = 'Stabilis_Integrity_Helper_HtmlPurifier_Html';
    const ALIAS = 'integrity/htmlPurifier_html';
    
    /** @var Stabilis_Integrity_Helper_HtmlPurifier_Html */
    protected $_helper;

    /** @covers Stabilis_Integrity_Helper_HtmlPurifier_Html::__construct */    
    public function setUp() {
        $this->_helper = Mage::helper(self::ALIAS);
    }
    
    public function testInstantiable() {
        $rc = new ReflectionClass(self::QUALIFIED_CLASS_NAME);
        $this->assertTrue($rc->isInstantiable());
    }
    
    /** @covers Stabilis_Integrity_Helper_HtmlPurifier_Html::getDoctype */
    public function testGetDoctype() {
        $this->assertInternalType(PHPUnit_Framework_Constraint_IsType::TYPE_STRING, $this->_helper->getDoctype());
    }

    /** @covers Stabilis_Integrity_Helper_HtmlPurifier_Html::getAllowedElements */    
    public function testGetAllowedElements() {
        $this->assertInternalType(PHPUnit_Framework_Constraint_IsType::TYPE_STRING, $this->_helper->getAllowedElements());
    }
    
    /** @covers Stabilis_Integrity_Helper_HtmlPurifier_Html::getAllowedAttributes */
    public function testGetAllowedAttributes() {
        $this->assertInternalType(PHPUnit_Framework_Constraint_IsType::TYPE_STRING, $this->_helper->getAllowedAttributes());
    }
    
    /** @covers Stabilis_Integrity_Helper_HtmlPurifier_Html::configure */
    public function testConfigure() {
        try {
            $this->_helper->configure(new HTMLPurifier_Config);
        } catch (Exception $e) {
            assertFalse(true, "configure threw an exception (%s), but shouldn't have...", $e->getTraceAsString());
        }
    }
}
