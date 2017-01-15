<?php

/**
 * @covers Stabilis_Integrity_Helper_Abstract
 */
class Stabilis_Integrity_Helper_AbstractTest extends PHPUnit_Framework_TestCase {
    
    const QUALIFIED_CLASS_NAME = 'Stabilis_Integrity_Helper_Abstract';
    
    public function setUp() {
        /** no-op */
    }

    public function testInstantiable() {
        $rc = new ReflectionClass(self::QUALIFIED_CLASS_NAME);
        $this->assertFalse($rc->isInstantiable());
    }
}
