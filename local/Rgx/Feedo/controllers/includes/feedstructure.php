<?php   
    echo '<?xml version="1.0"?>';
    echo '<rss xmlns:g="http://base.google.com/ns/1.0" version="2.0">';
	echo '<channel>';

	 /**
	 *Need to make a loop here
	 */
	  $_products = Mage::getModel('catalog/product')->getCollection()->addAttributeToSelect('sku')->addAttributeToSelect('name')->addAttributeToSelect('image')->addAttributeToSelect('msrp_display_actual_price_type') ->addAttributeToSelect('news_from_date') ->addAttributeToSelect('id') ->addAttributeToSelect('_category');

		 
	foreach ($_products as $product){

		$id = $product->getData('id');
		$sku = $product->getData('sku');
		$name = $product->getData('name');
		$image = $product->getData('image');
		$msrp_display_actual_price_type = $product->getData('msrp_display_actual_price_type');
		$news_from_date = $product->getData('news_from_date');
		$category = $product->getData('_category');
         
	echo '<item>';
	echo '<g:id>'. $sku.'</g:id>';
	echo '<g:title><![CDATA['.$name.']]></g:title>';
	echo '<description><![CDATA[]]></description>';
	echo '<link></link>';
	echo '<g:image_link>'.$image.'</g:image_link>';
	echo '<g:condition></g:condition>';
	echo '<g:availability></g:availability>';
	echo '<g:brand></g:brand>';
	echo '<g:price>'.$msrp_display_actual_price_type.'</g:price>';
 	echo '<g:gtin></g:gtin>'; 
	echo '<g:mpn>'.$sku.'</g:mpn>';
	echo '<g:identifier_exists></g:identifier_exists>';
	echo '<g:product_type>'.$category.'</g:product_type>';
	echo '<g:google_product_category></g:google_product_category>';
	echo '<g:shipping>';
   	echo '<g:country></g:country>';
   		echo '<g:service></g:service>';
   		echo '<g:price></g:price>';
	echo '</g:shipping>';

	echo '</item>';
	
	}
/** end of the loop */

echo '</channel>';
echo '</rss>';

?>