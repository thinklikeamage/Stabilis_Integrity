
<?php

class Stabilis_Integrity_Helper_DataTest extends PHPUnit_Framework_TestCase {
    
    const QUALIFIED_CLASS_NAME = 'Stabilis_Integrity_Helper_Data';
    const CLASS_ALIAS          = 'integrity';
    
    public function setUp() {
        /** no-op */
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
}
