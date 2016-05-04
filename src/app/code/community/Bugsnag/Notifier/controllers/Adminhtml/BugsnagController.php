<?php

class Bugsnag_Notifier_Adminhtml_BugsnagController extends Mage_Adminhtml_Controller_Action
{
    public function checkAction()
    {
        $obs = Mage::getModel('Bugsnag_Notifier/Observer');
        $obs->fireTestEvent($_POST["apiKey"]);
        $successCode = 1;
        Mage::app()->getResponse()->setBody($successCode);
    }

    public function _isAllowed()
    {
        return true;
    }
}
