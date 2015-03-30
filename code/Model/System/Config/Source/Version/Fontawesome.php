<?php
/**
 * Font Awesome icon support
 *
 * @category    Ash
 * @package     Ash_Fontawesome
 * @copyright   Copyright (c) 2015 August Ash, Inc. (http://www.augustash.com)
 * @license     LICENSE.txt (MIT)
 */

class Ash_Fontawesome_Model_System_Config_Source_Version_Fontawesome
{
    /**
     * Select options array
     *
     * @var array
     */
    protected $_options;

    /**
     * Return a dropdown menu array of values
     *
     * @return  array
     */
    public function toOptionArray()
    {
        $this->_options = array(
            array('value' => '', 'label' => Mage::helper('adminhtml')->__('-- Please Select --')),
            array('value' => '4.3.0', 'label' => '4.3.0'),
            array('value' => '3.2.1', 'label' => '3.2.1'),
        );

        return $this->_options;
    }
}
