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

		echo "google";
         
		   $_products = Mage::getModel('catalog/product')->getCollection()->addAttributeToSelect('sku')->addAttributeToSelect('name')->addAttributeToSelect('image')->addAttributeToSelect('price')->addAttributeToSelect('news_from_date')->addAttributeToSelect('id')->addAttributeToSelect('apparel_type')->addAttributeToSelect('url_path')->addAttributeToSelect('description')->addAttributeToSelect('is_in_stock');

		   print_r($_products);

		/*	foreach ($_products as $product){
				$availibilty = 'in stock';

				if($product->getData('is_in_stock')){
					$availibilty = 'in stock';
				} else {
					$availibilty = 'out of stock';
				}
					$description = $product->getData('description');
					$sku = $product->getData('sku');
					$name = $product->getData('name');
					$image =$_SERVER['HTTP_HOST'].$product->getData('image');
					$price = $product->getData('price');
					$category = $product->getData('_root_category');
					$url = $_SERVER['HTTP_HOST'].'/'.$product->getData('url_path');
				
					echo $msrp_display_actual_price_type.'<br>';
					echo $news_from_date.'<br>';
					echo $image.'<br>';
					echo $sku .'<br>';
					echo $name .'<br>';  
					echo $id.'<br>';
					echo $price.'<br>';
					echo $category .'<br>';
					echo $description .'<br>';    }  */
		 

		}
	
}

?>