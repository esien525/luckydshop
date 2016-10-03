<?php include("js/side_opening.php");?>
<div style="float:right"><?php echo CHtml::link('<button class="btn btn--wd btn--with-icon btn--sm wave">Back to Product List</button>',  array('admin')); ?></div>

<h4 class="pagestitle"><?php echo $model->product_title;?></h4>

<br/>
<?php
	include("js/databaseconnection.php");
	$burl=Yii::app()->request->baseUrl; 
	$product_id=$model->product_id;
	$product_title=$model->product_title;
	$product_description=$model->product_description;   $product_description= str_replace("\n", "<br />",$product_description);
	$product_importantinfo=$model->product_importantinfo;   $product_importantinfo= str_replace("\n", "<br />",$product_importantinfo);
	$product_photo=$model->product_photo;
	$product_photo2=$model->product_photo2;
	$product_photo3=$model->product_photo3;
	$product_photo4=$model->product_photo4;
	$product_photo5=$model->product_photo5;
	$product_photo6=$model->product_photo6;
	$product_photo7=$model->product_photo7;
	$product_photo8=$model->product_photo8;
	$product_photo9=$model->product_photo9;
	$product_photo10=$model->product_photo10;
	$product_price=$model->product_price;
	$product_promotion_price=$model->product_promotion_price;
	$product_coin=$model->product_coin;
	$product_allow_groupbuy=$model->product_allow_groupbuy;
	$product_start_date=$model->product_start_date;
	$product_end_date=$model->product_end_date;
	$product_status=$model->product_status;
	$product_luckydraw_status=$model->product_luckydraw_status;
	$product_featured=$model->product_featured;
	$product_posted_date=$model->product_posted_date;
	$product_posted_by=$model->product_posted_by;
?>
<table  class="padding-table1">
	<tr>		
		<td>
			<table>
				<tr>
					<td><b>Title</b></td>
					<td><b>:</b></td>
					<td><?php echo $product_title?></td>
				</tr>
				<tr>
					<td><b>Date</b></td><td><b>:</b></td>
					<td><?php echo $product_start_date?> to <?php echo $product_end_date?></td>
				</tr>
				<tr>
					<td colspan="3"><b>Description :</b></td>
				</tr>
				<tr>
					<td colspan="3"><?php echo $product_description?></td>
				</tr>
				<tr>
					<td colspan="3"><b>Important Info :</b></td>
				</tr>
				<tr>
					<td colspan="3"><?php echo $product_importantinfo?></td>
				</tr>
				<tr>
					<td><b>Price</b></td><td><b>:</b></td>
					<td>RM <?php echo $product_price?></td>
				</tr>
				<tr>
					<td><b>Promotion Price</b></td><td><b>:</b></td>
					<td>RM <?php echo $product_promotion_price?></td>
				</tr>
				<tr>
					<td><b>Coins</b></td><td><b>:</b></td>
					<td><?php echo $product_coin?></td>
				</tr>
				<tr>
					<td><b>Allowed Group Buy</b></td><td><b>:</b></td>
					<td><?php echo $product_allow_groupbuy?></td>
				</tr>
				<tr>
					<td><b>Status</b></td><td><b>:</b></td>
					<td><?php echo $product_status?></td>
				</tr>
				<tr>
					<td><b>Lucky Draw Status</b></td><td><b>:</b></td>
					<td><?php echo $product_luckydraw_status?></td>
				</tr>
				<tr>
					<td><b>Featured on Home Page</b></td><td><b>:</b></td>
					<td><?php echo $product_featured?></td>
				</tr>
				<tr>
					<td><b>Posted on</b></td><td><b>:</b></td>
					<td><?php echo $product_posted_date?></td>
				</tr>
				<tr>
					<td><b>Posted by</b></td><td><b>:</b></td>
					<td><?php echo $product_posted_date?></td>
				</tr>
				<tr>
					<td colspan="3"><b>Product Image :</b></td>
				</tr>
				<tr>
					<td colspan="3">
						<div class='product-preview-wrapper product-photo-view'>
							<img src='<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $product_photo?>' style='width:100%'/>
						</div>
						<?php
							if ($product_photo2 != '') 
							{
								echo "<div class='product-preview-wrapper product-photo-view'>
									<img src='".Yii::app()->request->baseUrl."/".$product_photo2."' style='width:100%'/>
								</div>";
							}
							if ($product_photo3 != '') 
							{
								echo "<div class='product-preview-wrapper product-photo-view'>
									<img src='".Yii::app()->request->baseUrl."/".$product_photo3."' style='width:100%'/>
								</div>";
							}
							if ($product_photo4 != '') 
							{
								echo "<div class='product-preview-wrapper product-photo-view'>
									<img src='".Yii::app()->request->baseUrl."/".$product_photo4."' style='width:100%'/>
								</div>";
							}
							if ($product_photo5 != '') 
							{
								echo "<div class='product-preview-wrapper product-photo-view'>
									<img src='".Yii::app()->request->baseUrl."/".$product_photo5."' style='width:100%'/>
								</div>";
							}
							if ($product_photo6 != '') 
							{
								echo "<div class='product-preview-wrapper product-photo-view'>
									<img src='".Yii::app()->request->baseUrl."/".$product_photo6."' style='width:100%'/>
								</div>";
							}
							if ($product_photo7 != '') 
							{
								echo "<div class='product-preview-wrapper product-photo-view'>
									<img src='".Yii::app()->request->baseUrl."/".$product_photo7."' style='width:100%'/>
								</div>";
							}
							if ($product_photo8 != '') 
							{
								echo "<div class='product-preview-wrapper product-photo-view'>
									<img src='".Yii::app()->request->baseUrl."/".$product_photo8."' style='width:100%'/>
								</div>";
							}
							if ($product_photo9 != '') 
							{
								echo "<div class='product-preview-wrapper product-photo-view'>
									<img src='".Yii::app()->request->baseUrl."/".$product_photo9."' style='width:100%'/>
								</div>";
							}
							if ($product_photo10 != '') 
							{
								echo "<div class='product-preview-wrapper product-photo-view'>
									<img src='".Yii::app()->request->baseUrl."/".$product_photo10."' style='width:100%'/>
								</div>";
							}
						?>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<?php echo CHtml::link('<button class="btn btn--wd btn--with-icon btn--sm wave">Update Product Info</button>',  array('update','id'=>$product_id)); ?>
					</td>
				</tr>
				
			</table>
		</td>
	</tr>
</table>
<hr/>
<h4 class="pagestitle">Lucky Draw Participation</h4><br/>

<?php
$queryALLparticipate="Select * FROM luckydraw WHERE luckydraw_status='Confirmed' and luckydraw_productid=$product_id";
$resultALLparticipate=mysql_query($queryALLparticipate);
$totalamountparticipate=0;
while($rowALLparticipate=mysql_fetch_array($resultALLparticipate)){
	$luckydraw_amount=$rowALLparticipate['luckydraw_amount'];
	$totalamountparticipate=$totalamountparticipate+$luckydraw_amount;
}
?>
<h4>D-Coins: <?php echo $totalamountparticipate;?>/<?php echo $product_coin;?></h4>

<div class="row">
	<?php
		$queryALLparticipate="Select * FROM luckydraw WHERE luckydraw_status='Confirmed' and luckydraw_productid=$product_id GROUP BY luckydraw_userid";
		$resultALLparticipate=mysql_query($queryALLparticipate);
		
		while($rowALLparticipate=mysql_fetch_array($resultALLparticipate)){
			$luckydraw_amount=$rowALLparticipate['luckydraw_amount'];
			$luckydraw_userid=$rowALLparticipate['luckydraw_userid'];
				$totalamountparticipatesingle=0;
				$queryCALCULATE="Select * FROM luckydraw WHERE luckydraw_status='Confirmed' and luckydraw_productid=$product_id and luckydraw_userid=$luckydraw_userid";
				$resultCALCULATE=mysql_query($queryCALCULATE);
				while($rowCALCULATE=mysql_fetch_array($resultCALCULATE)){
					$luckydraw_amount_single=$rowCALCULATE['luckydraw_amount'];
					$totalamountparticipatesingle=$totalamountparticipatesingle+$luckydraw_amount_single;
				}
		
				$queryFDE="Select * FROM user WHERE user_id='$luckydraw_userid'";		
				$resultFDE=mysql_query($queryFDE);
				while($rowFDE=mysql_fetch_array($resultFDE)){
					$fuser_id=$rowFDE['user_id'];
					$fuser_firstname=$rowFDE['user_firstname'];
					$fuser_lastname=$rowFDE['user_lastname'];
					$fuser_photo=$rowFDE['user_photo'];
					if($fuser_photo==""){$fuser_photo="images/nophoto.jpg";}
					echo "";
	?>
			<div class='col-md-2'>
				<div style="height:150px;overflow:hidden">
					<?php echo CHtml::link("<img src='$burl/$fuser_photo' width='100%'/>",  array('user/friendprofile','id'=>$fuser_id));?> 
				</div>
				<div style="font-size:16px;margin-top:8px;">
					<?php echo CHtml::link("$fuser_firstname $fuser_lastname",  array('user/friendprofile','id'=>$fuser_id));?> 
				</div>
				<div style="margin-bottom:15px;color:#aaaaaa"><i><?php echo $totalamountparticipatesingle;?> entries</i></div>
			</div>
			
	<?php
				}
		}
	?>
	</div>
<hr/>
<h4 class="pagestitle">Lucky Draw No</h4><br/>
<?php

$queryMyparticipate="Select * FROM luckydraw WHERE luckydraw_status='Confirmed' and luckydraw_productid=$product_id";
$resultMyparticipate=mysql_query($queryMyparticipate);
$rowcountMyparticipate=mysql_num_rows($resultMyparticipate);

if($rowcountMyparticipate==0){
	echo "<i>No participation record found.</i>";
} else{
	$totalMyparticipate=0;
	while($rowMyparticipate=mysql_fetch_array($resultMyparticipate)){
		$Myluckydraw_amount=$rowMyparticipate['luckydraw_amount'];
		$totalMyparticipate=$totalMyparticipate+$Myluckydraw_amount;
		$Myluckydraw_id=$rowMyparticipate['luckydraw_id'];
		
		$queryMycode="Select * FROM luckydraw_code WHERE luckydraw_id='$Myluckydraw_id'";
		$resultMycode=mysql_query($queryMycode);
		while($rowMycode=mysql_fetch_array($resultMycode)){
			$lcode_id=$rowMycode['lcode_id'];
			
			$countchar=strlen($lcode_id);
			if($countchar==1){$lcode_id="000".$lcode_id;}
			else if($countchar==2){$lcode_id="00".$lcode_id;}
			else if($countchar==3){$lcode_id="0".$lcode_id;}
			else{$lcode_id=$lcode_id;}
			
			echo "<div style='float:left;padding-right:30px !important;font-size:14px;padding-bottom:10px'>$lcode_id</div>";
		}
		
	}
}
echo "<div style='clear:both'></div>";
;?>


<?php include("js/side_closing.php");?>
<?php
Yii::app()->clientScript->scriptMap=array(
		'jquery.js'=>false,
);
?>

