<?php 
class Rgx_Feedo_IndexController extends Mage_Core_Controller_Front_Action{
	/**
   * Index action
   * @access public
   * @return void
   */
	public function indexAction() {
		
		//echo "testit";
	 	//$this->loadLayout();
     	//$this->renderLayout();
		include_once  "includes/headers.php";
		include_once  "includes/feedstructure.php";
	}
	
	public function FeedAction() {
         
		 $_products = Mage::getModel('catalog/product')->getCollection()->addAttributeToSelect('sku')->addAttributeToSelect('name')->addAttributeToSelect('image')->addAttributeToSelect('msrp_display_actual_price_type') ->addAttributeToSelect('news_from_date');

		 
		foreach ($_products as $product){
		$sku = $product->getData('sku');
		$name = $product->getData('name');
		$image = $product->getData('image');
		$msrp_display_actual_price_type = $product->getData('msrp_display_actual_price_type');
		$news_from_date = $product->getData('news_from_date');
			echo $msrp_display_actual_price_type.'<br>';
			echo $news_from_date.'<br>';
			echo $image.'<br>';
			echo $sku .'<br>';
			echo $name .'<br>';         
               }
	}
	
}

?>