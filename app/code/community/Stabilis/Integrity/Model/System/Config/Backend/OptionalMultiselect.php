<?php

class Stabilis_Integrity_Model_System_Config_Backend_OptionalMultiselect 
    extends Mage_Core_Model_Config_Data {
        
    public function save() {
        $this->setData('value', array_filter($this->getData('value')));
        return parent::save();
    }
}
