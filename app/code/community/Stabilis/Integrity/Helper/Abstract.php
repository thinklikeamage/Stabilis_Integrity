<?php
/**
 * This is free and unencumbered software released into the public domain.
 * 
 * Anyone is free to copy, modify, publish, use, compile, sell, or
 * distribute this software, either in source code form or as a compiled
 * binary, for any purpose, commercial or non-commercial, and by any
 * means.
 * 
 * In jurisdictions that recognize copyright laws, the author or authors
 * of this software dedicate any and all copyright interest in the
 * software to the public domain. We make this dedication for the benefit
 * of the public at large and to the detriment of our heirs and
 * successors. We intend this dedication to be an overt act of
 * relinquishment in perpetuity of all present and future rights to this
 * software under copyright law.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM, DAMAGES OR
 * OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
 * ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 * 
 * For more information, please refer to <http://unlicense.org/>
 * 
 */
?>
<?php

/**
 * Base class for integrity helpers.
 * 
 * @package  Stabilis
 * @category Stabilis_Integrity
 * 
 */
abstract class Stabilis_Integrity_Helper_Abstract 
    extends Mage_Core_Helper_Abstract {
        
    /** @var $data Varien_Object */
    protected $_data;
   
    public function __construct() {
        $this->_data = new Varien_Object();
    }
   
    /**
     * If $key is empty, checks whether there's any data in the object
     * Otherwise checks if the specified attribute is set.
     * 
     * @param string $key
     * @return boolean
     */
    public function hasData($key = '') {
        return $this->_data->hasData($key);
    }
    
    /**
     * Overwrite data in the object.
     *
     * $key can be string or array.
     * If $key is string, the attribute value will be overwritten by $value
     *
     * If $key is an array, it will overwrite all the data in the object.
     *
     * $isChanged will specify if the object needs to be saved after an update.
     *
     * @param string|array $key
     * @param mixed $value
     * @param boolean $isChanged
     * @return Varien_Object
     */
    public function setData($key, $value = null) {
        return $this->_data->setData($key, $value);
    }
    
    /**
     * Retrieves data from the object
     *
     * If $key is empty will return all the data as an array
     * Otherwise it will return value of the attribute specified by $key
     *
     * If $index is specified it will assume that attribute data is an array
     * and retrieve corresponding member.
     *
     * @param string $key
     * @param string|int $index
     * @param mixed $default
     * @return mixed
     */
    public function getData($key = '', $index = null) {
        return $this->_data->getData($key, $index);
    }
}
