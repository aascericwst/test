<?php
/**
 * 
 * @author aasceric
 *
 */
class Westum_Test_Model_Observer
{

    public function hookToControllerActionPreDispatch (Varien_Event_Observer $observer)
    {
        $controllerAction = $observer->getEvent()->getControllerAction()->getFullActionName();
        
        $moduleName = Mage::app()->getRequest()->getModuleName();
        
        Mage::log("Action name - " . $controllerAction, null, 'test.log');
        Mage::log("Module name - " . $moduleName, null, 'test.log');
    }
}
