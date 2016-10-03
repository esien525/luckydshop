<table class="table_nomargin">
	<tr>
		<td class="td_nopadding_main" style="width:240px">
			<?php include("js/auto_leftsidebar.php");?>
			
			
		</td>
		<td class="td_10padding_main">
			<div class="bb">
				<?php echo CHtml::link('Home', array('site/index')); ?>
				<small> > </small>
				Brand We Offer
			</div>
			
			<h26>BRAND WE OFFER </h26><br/><br/>
			<?php
					include("js/databaseconnection.php");
					
					
					$queryBrand="Select * FROM car_make WHERE make_status='Active'";
					$resultBrand=mysql_query($queryBrand);
					 $num_rows_Brand = mysql_num_rows($resultBrand);
					if($num_rows_Brand==0){echo "No added brand";}
						
					while($rowBrand=mysql_fetch_array($resultBrand))
					{
							$make_id=$rowBrand['make_id'];
							$make_name=$rowBrand['make_name'];
							$make_logo=$rowBrand['make_logo'];
							
							if($make_logo!=""){
								echo CHtml::link("<img src='$burl/$make_logo' height='90px'/>",  array('site/brand_car','id'=>$make_id));
								
							}
					}
				
			?>
		</td>
	</tr>
</table>