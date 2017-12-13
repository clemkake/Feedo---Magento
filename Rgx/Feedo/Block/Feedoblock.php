<?php

class Rgx_Feedo_Block_Feedoblock extends Mage_Core_Block_Template {

	public function indexAction() {
		$this->loadLayout();
		$this->renderLayout();
	}
}
