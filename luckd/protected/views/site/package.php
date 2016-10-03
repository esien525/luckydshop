
<!-- Content section -->
<section class="content">
  <div class="container">
	<h2 class="h-pad-sm text-uppercase text-center">D-Coins Top Up Packages</h2>
	<h6 class="text-uppercase text-center">Enjoy the fun od lucky draw! You definately will surprise on what experience you have in our website.</h6>
	<div class="divider divider--sm"></div>
	
	
			<?php
				include("js/databaseconnection.php");
				$queryPackage="Select * FROM package WHERE package_status='Active' order by package_price_normal";		
				$resultPackage=mysql_query($queryPackage);
				$num_rowsPackage = mysql_num_rows($resultPackage);
				if($num_rowsPackage==0){
					echo "<div class='row'>";
						echo "<div class='col-md-12' style='text-align:center;color:#ff0022'><i>No Package found.<br/>Please contact system administrator for any enquiries.</i></div>";
					echo "</div>";
				} else{
					$divided=12/$num_rowsPackage;
					echo "<div class='row'>";
						while($rowPackage=mysql_fetch_array($resultPackage)){
							
							$package_id=$rowPackage['package_id'];
							$package_name=$rowPackage['package_name'];
							$package_price_normal=$rowPackage['package_price_normal'];
							$package_price_promotion=$rowPackage['package_price_promotion'];
							$package_coin_amount=$rowPackage['package_coin_amount'];
							$package_status=$rowPackage['package_status'];
							
							echo "<div class='col-md-$divided'>";
							echo "<div class='packagediv'>";
							echo "<div class='packagedivtoptitle'>$package_name</div>";
							echo "<div class='packagedivcontent'>";
								
								echo "<br/><font style='font-size:50px;font-weight:bold'>$package_coin_amount</font><br/>coins<br/><br/>";
								if($package_price_promotion!=""){
									echo "<div class='product-info'><div class='price-box'><span class='price-box__new'>RM".number_format($package_price_promotion,2)."</span> <span class='price-box__old'>RM".number_format($package_price_normal,2)."</span></div></div>";
								} else{
									echo "<div class='product-info'><div class='price-box'><span class='price-box'>RM".number_format($package_price_normal,2)."</span></div></div>";
								}
								echo CHtml::link("<button class='btn btn--wd btn--with-icon  wave' style='width:100%'>Purchase Now</button>",  array('site/purchasepackage','id'=>$package_id));
							echo "</div>";
							echo "</div>";
							echo "</div>";
						}
					echo "</div>";
				}
			?>
				
		
	
  </div>
</section>

<!-- End Content section -->