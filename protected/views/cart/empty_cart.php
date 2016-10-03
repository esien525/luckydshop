<?php
	$burl=Yii::app()->request->baseUrl;
?>
<!-- Breadcrumb section -->
    
<section class="breadcrumbs breadcrumbs-boxed">
	<div class="container">
		<ol class="breadcrumb breadcrumb--wd pull-left">
		  <li><?php echo CHtml::link("Home",  array('site/index')); ?></li>
		  <li class="active">My Cart</li>
		</ol>		
	</div>
</section>

<!-- Content section -->
<section class="content">
	<div class="container">
   		<div class="text-center"> 
			<img src="<?php echo $burl;?>/images/shopping-cart-icon.png" alt="shopping cart empty" class="img-responsive img-center" />
			<div class="divider divider--sm"></div>
			<h2 class="text-uppercase">Shopping Cart is Empty</h2>
			<h5>You have no items in your shopping cart.</h5>
			<div class="divider divider--sm"></div>
			<a href="<?php echo $burl;?>/product/list" class="btn btn--wd">BACK TO PRODUCT PAGE</a> </div>
		</div>
	</div>
</section>
	
