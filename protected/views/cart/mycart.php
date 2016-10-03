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
   		<?php
   		if (count($acs) == 0) 
   		{
   			?>
				<div class="text-center"> 
					<img src="<?php echo $burl;?>/images/shopping-cart-icon.png" alt="shopping cart empty" class="img-responsive img-center" />
					<div class="divider divider--sm"></div>
					<h2 class="text-uppercase">Shopping Cart is Empty</h2>
					<h5>You have no items in your shopping cart.</h5>
					<div class="divider divider--sm"></div>
					<a href="<?php echo $burl;?>/product/list" class="btn btn--wd">BACK TO PRODUCT PAGE</a> </div>
				</div>
   			<?php
   		}
   		else
   		{
			$cart_id = $cart->cart_id;
   			?>
			<div class="row">
				<div class="col-md-9 aside-column">
					<h2 class="text-uppercase">Shopping Cart</h2>
					<div class="card card--padding">
						<table class="table shopping-cart-table text-center">
							<thead>
								<tr>
									<th>&nbsp;</th>
									<th>Product Name</th>
									<th>&nbsp;</th>
									<th>Unit Price </th>
									<th>Qty</th>
									<th>Subtotal</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($acs as $key=>$ac) 
						   		{
						   			echo "
									<tr>
										<td>
											<div class='th-title visible-xs'>Remove From Cart:</div>
											<a class='icon-clear shopping-cart-table__delete' style='cursor:pointer' onclick='luckydshop.cart.delete_product($ac->ac_id)'></a>
										</td>
										<td class='no-title'>
											<div class='shopping-cart-table__product-image'>
												<a href='".$burl."/product/index/$ac->ac_product_id'><img src='".Product::getProductImage($ac->ac_product_id)."' alt=''/></a>
											</div>
										</td>
										<td>
											<div class='th-title visible-xs'>Product Name:</div>
											<h6 class='shopping-cart-table__product-name text-left text-uppercase'>
												<a href='".$burl."/product/index/$ac->ac_product_id'>".Product::getProductName($ac->ac_product_id)."</a>
											</h6>
										</td>
										<td>
											<div class='th-title visible-xs'>Unit Price:</div>
											<div class='shopping-cart-table__product-price'>$ac->ac_amount</div>
										</td>
										<td>
											<div class='th-title visible-xs'>QTY:</div>
											<div class='input-group-qty'> 
												<div id='load$ac->ac_id' class='ac_loader'></div>
												<span class='pull-left'> </span>
												<input type='text' name='quant[$key]' class='input-number input--wd input-qty pull-left' value='$ac->ac_quantity' min='1' max='100' disabled='disabled' >
												<span class='pull-left btn-number-container'>
													<button type='button' class='btn btn-number btn-number--plus' data-type='plus' onclick='luckydshop.cart.change_quantity(1,$ac->ac_id,$ac->ac_cart_id)'> + </button>
													<button type='button' class='btn btn-number btn-number--minus' data-type='minus'  onclick='luckydshop.cart.change_quantity(0,$ac->ac_id,$ac->ac_cart_id)'> – </button>
												</span> 
											</div>
										</td>
										<td>
											<div class='th-title visible-xs'>Subtotal:</div>
											<div class='shopping-cart-table__product-price' id='ac_subtotal_$ac->ac_id'>RM ".number_format(($ac->ac_quantity*$ac->ac_amount),2,'.',',')."</div>
										</td>
									</tr>  
						   			";
						   		}
								?>							           
							</tbody>
						</table>
					<div class="hr"></div>
					<div class="divider divider--xs"></div>
					<div class="row shopping-cart-btns">
						<div class="col-sm-12 col-md-4"><a href="<?php echo $burl;?>/product/list" class="btn btn--wd pull-left">Continue Shopping</a></div>
						<div class="divider divider--xs visible-sm visible-xs"></div>
						<div class="col-sm-12 col-md-8">
							<a style="cursor: pointer;" class="btn btn--wd btn--light pull-right" onclick="luckydshop.cart.delete_cart(<?php echo $cart_id;?>)">Clear Shopping Cart</a>
							<div class="divider divider--xs visible-sm visible-xs"></div>
							<!-- <a style="cursor: pointer;" class="btn btn--wd pull-right">Update Shopping Cart</a> -->
						</div>
					</div>
					<div class="divider divider--xxs"></div>
				</div>
			</div>
			<div class="col-md-3 aside-column">			
				<div class="divider divider--xs"></div>
				<h4 class="h-pad-sm">CART TOTALS</h4>
					<table class="table table-total">
						<tbody>
							<tr>
								<th class="text-left"> Subtotal </th>
								<th class="text-right" id="subtotal">RM <?php echo number_format(AddCart::getTotalAmount($cart_id),2,'.',',');?></th>
							</tr>
							<tr>
								<td class="text-left"><h2>Grand Total</h2></td>
								<td class="text-right"><h2 id="grand_total">RM <?php echo number_format(AddCart::getTotalAmount($cart_id),2,'.',',');?></h2></td>
							</tr>
						</tbody>
					</table>
					<div class="divider divider--xs"></div>
					<div class="text-center"> 
						<a href="#" class="btn btn--wd btn--xl">Proceed to checkout</a>
						<div class="divider divider--xxs"></div>
						<p>Checkout with Multiple Addresses</p>
					</div>
				</div>
			</div>
   			<?php
   		}	   		
   		?>
	</div>
</section>
	
