<?php

class Stabilis_Integrity_Helper_HtmlPurifierTest extends PHPUnit_Framework_TestCase {
    
    const QUALIFIED_CLASS_NAME = 'Stabilis_Integrity_Helper_HtmlPurifier';
    const CLASS_ALIAS          = 'integrity/htmlPurifier';
    
    protected $_helper;
    
    public function setUp() {
        $this->_helper = Mage::helper('integrity/htmlPurifier');
    }
    
    public function testLibraryExists() {
        $base_dir = Mage::getBaseDir('lib');
        $this->assertTrue(file_exists($base_dir . DS . 'HTMLPurifier.php'));
    }
    
    public function testInstantiable() {
        $rc = new ReflectionClass(self::QUALIFIED_CLASS_NAME);
        $this->assertTrue($rc->isInstantiable());
    }
    
    public function testConstruction() {
        try {
            Mage::helper(self::CLASS_ALIAS);
        } catch(\Exception $e) {
            $this->assertFalse(true, sprintf("Constructor threw an exception (%s), but shouldn't have...", $e->getTraceAsString()));
        }
    }
    
    public function testIsEnabled() {
        $this->assertInternalType(PHPUnit_Framework_Constraint_IsType::TYPE_BOOL, $this->_helper->isEnabled());
    }
    
    public function testPurifyNoThrow() {
        try {
            $this->_helper->purify('');
        } catch (Exception $e) {
            $this->assertFalse(true, sprintf("Purify threw an exception (%s), but shouldn't have...", $e->getTraceAsString()));
        }
    }
    
}
