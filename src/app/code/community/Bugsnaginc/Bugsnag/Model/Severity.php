<?php

class Bugsnaginc_Bugsnag_Model_Severity
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'fatal,error', 'label'=>Mage::helper('adminhtml')->__('Crashes & errors')),
            array('value' => 'fatal,error,warning', 'label'=>Mage::helper('adminhtml')->__('Crashes, errors & warnings')),
            array('value' => 'fatal,error,warning,info', 'label'=>Mage::helper('adminhtml')->__('Crashes, errors, warnings & info messages'))
        );
    }
}