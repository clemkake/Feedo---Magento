<?php 


    echo '<?xml version="1.0"?>';
    echo '<rss xmlns:g="http://base.google.com/ns/1.0" version="2.0">';
	echo '<channel>';

	 /**
	 *Need to make a loop here
	 */
  $_products = Mage::getModel('catalog/product')->getCollection()->addAttributeToSelect('sku')->addAttributeToSelect('name')->addAttributeToSelect('image')->addAttributeToSelect('price')->addAttributeToSelect('news_from_date')->addAttributeToSelect('id')->addAttributeToSelect('apparel_type')->addAttributeToSelect('url_path')->addAttributeToSelect('description')->addAttributeToSelect('is_in_stock');

		 
	foreach ($_products as $product){
		/*if($product->getData('is_in_stock')){
			$availibilty = 'in stock';
		} else {
			$availibilty = 'out of stock';
		}
		*/
			$availibilty = 'In stock';

	$id = $product->getData('id');
	$description = $product->getData('description');
	$sku = $product->getData('sku');
	$name = $product->getData('name');
	$image = $_SERVER['HTTP_HOST'].$product->getData('image');
	$price = $product->getData('price');
	$news_from_date = $product->getData('news_from_date');
	$category = $product->getData('apparel_type');
	$url = $_SERVER['HTTP_HOST'].'/'.$product->getData('url_path')
;
         
	echo '<item>';

	echo '<g:id>'.$sku.'</g:id>';
	echo '<g:title><![CDATA['.$name.']]></g:title>';
	echo '<description><![CDATA['.$description.']]></description>';
	echo '<link><![CDATA['.$url.']]></link>';
	echo '<g:image_link><![CDATA['.$image.']]></g:image_link>';
	echo '<g:condition><![CDATA[New]]></g:condition>';
	echo '<g:availability><![CDATA['.$availibilty.']]></g:availability>';
	echo '<g:brand><![CDATA[Wordus]]></g:brand>';
	echo '<g:price>'.$price.'</g:price>';
 	echo '<g:gtin></g:gtin>';
	echo '<g:mpn>'.$sku.'</g:mpn>';
	echo '<g:identifier_exists>FALSE</g:identifier_exists>';
	echo '<g:product_type>'.$category.'</g:product_type>';
	echo '<g:google_product_category></g:google_product_category>';

	echo '</item>';
	
	}
/** end of the loop */

echo '</channel>';
echo '</rss>';

?> 