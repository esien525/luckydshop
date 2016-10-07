<?php
include('js/language.php');

$temp_product_title = 'product_title'.$lang;
$temp_product_description = 'product_description'.$lang;
$temp_product_importantinfo = 'product_importantinfo'.$lang;

	$burl=Yii::app()->request->baseUrl;
	$product_id=$data->product_id;
	$product_title=$data->$temp_product_title;
	$product_description=$data->$temp_product_description;   $product_description= str_replace("\n", "<br />",$product_description);
	$product_importantinfo=$data->$temp_product_importantinfo;   $product_importantinfo= str_replace("\n", "<br />",$product_importantinfo);
	$product_photo=$data->product_photo;
	$product_price=$data->product_price;
	$product_promotion_price=$data->product_promotion_price;
	$product_coin=$data->product_coin;
	$product_allow_groupbuy=$data->product_allow_groupbuy;
	$product_start_date=$data->product_start_date;
	$product_end_date=$data->product_end_date;
	$product_status=$data->product_status;
	$product_luckydraw_status=$data->product_luckydraw_status;
	$product_featured=$data->product_featured;
	$product_posted_date=$data->product_posted_date;
	$product_posted_by=$data->product_posted_by;
?>
<div class="product-preview-wrapper">
	<div class="product-preview">
	  <div class="product-preview__image">
	  <?php 
	  if ($lang_param!='') 
	  {
      	echo CHtml::link("<img src='$burl/$product_photo' data-lazy='$burl/$product_photo'/>",  array('product/index','id'=>$product_id,'lang'=>$lang_type)); 
      }
      else
      {
      	echo CHtml::link("<img src='$burl/$product_photo' data-lazy='$burl/$product_photo'/>",  array('product/index','id'=>$product_id)); 
      }
	  ?></div>
	  
	  <div class="product-preview__info text-center">
		<div class="product-preview__info__title">
			<h2><?php 
			if ($lang_param!='') 
			{
          		echo CHtml::link("$product_title",  array('product/index','id'=>$product_id,'lang'=>$lang_type));
          	}
          	else
          	{
          		echo CHtml::link("$product_title",  array('product/index','id'=>$product_id));
          	}
			?></h2>
		</div>
		<div class="price-box">0/<?php echo number_format($product_coin);?> D-Coins</div>
	  </div>
	</div>
</div>