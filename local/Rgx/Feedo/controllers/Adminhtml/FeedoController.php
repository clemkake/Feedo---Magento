<?php

class Rgx_Feedo_Adminhtml_FeedoController extends Mage_Adminhtml_Controller_Action {

  /**
  * Admin controller index action
  * @access public
  * @return void
  * var_dump(Mage::getSingleton('core/layout')->getUpdate()->getHandles());
  */

  public function indexAction() {

    Mage::log('im in Controller');

    $this->loadLayout();
    $this->renderLayout();

   //Zend_Debug::dump($this->getLayout()->getUpdate()->getHandles());

  }

}

