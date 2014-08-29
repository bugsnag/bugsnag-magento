<?php

class Bugsnaginc_Bugsnag_Adminhtml_BugsnagController extends Mage_Adminhtml_Controller_Action
{
    public function checkAction()
    {
        $result = 1;
        Mage::app()->getResponse()->setBody($result);
    }
}
