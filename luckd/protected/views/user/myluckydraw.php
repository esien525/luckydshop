<?php include("js/side_opening.php");?>

<?php
include("js/databaseconnection.php");
$burl=Yii::app()->request->baseUrl;
$user_id=$model->user_id;
$user_name=$model->user_name;
$user_firstname=$model->user_firstname;
$user_lastname=$model->user_lastname;
$user_title=$model->user_title;
$user_email=$model->user_email;
$password=$model->password;
$password2=$model->password2;
$user_type=$model->user_type;
$user_datejoin=$model->user_datejoin;
$user_contactnumber=$model->user_contactnumber;
$user_status=$model->user_status;
$last_login=$model->last_login;
$user_description=$model->user_description;    $user_description= str_replace("\n", "<br />",$user_description);
$user_photo=$model->user_photo; if($user_photo==""){$user_photo="images/nophoto.jpg";}
$user_dob=$model->user_dob;
$user_gender=$model->user_gender;
$user_dtoken=$model->user_dtoken;
$user_dcoin=$model->user_dcoin;
$user_refer_code=$model->user_refer_code;
$refer_by=$model->refer_by;
if($user_refer_code==""){
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < 6; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		mysql_query("UPDATE user SET user_refer_code='$randomString' WHERE user_id='$user_id'");
		
		$queryMY="Select * FROM user WHERE user_id='$user_id'";		
		$resultMY=mysql_query($queryMY);
		while($rowMY=mysql_fetch_array($resultMY)){
			$user_refer_code=$rowMY['user_refer_code'];
		}
}



?>
<!-- Content section -->
<section class="content">
	<div class="container">
		
		<h4>My Lucky Draw</h4>
		
		
				
				<?php
				$queryLuckydraw="Select * FROM luckydraw WHERE luckydraw_userid='$user_id' and luckydraw_status='Confirmed'  GROUP BY luckydraw_productid";		
				$resultLuckydraw=mysql_query($queryLuckydraw);
				$num_rowsLuckydraw = mysql_num_rows($resultLuckydraw);
				while($rowLuckydraw=mysql_fetch_array($resultLuckydraw)){
						$luckydraw_id=$rowLuckydraw['luckydraw_id'];
						$luckydraw_productid=$rowLuckydraw['luckydraw_productid'];
						$luckydraw_amount=$rowLuckydraw['luckydraw_amount'];
						
						$queryProduct="Select * FROM product WHERE product_id='$luckydraw_productid'";		
						$resultProduct=mysql_query($queryProduct);
						while($rowProduct=mysql_fetch_array($resultProduct)){
								$product_id=$rowProduct['product_id'];
							$product_title=$rowProduct['product_title'];
							$product_photo=$rowProduct['product_photo'];
							$product_coin=$rowProduct['product_coin'];
							
						}
						
						$queryALLparticipate="Select * FROM luckydraw WHERE luckydraw_status='Confirmed' and luckydraw_productid=$luckydraw_productid";
						$resultALLparticipate=mysql_query($queryALLparticipate);
						$totalamountparticipate=0;
						while($rowALLparticipate=mysql_fetch_array($resultALLparticipate)){
							$luckydraw_amount=$rowALLparticipate['luckydraw_amount'];
							$totalamountparticipate=$totalamountparticipate+$luckydraw_amount;
						}
				?>
				<?php if($num_rowsLuckydraw==0){ echo "<div class='row'><div class='col-md-12'><i>No Record Found.</i></div></div>";}?>
				<div class="row">
					<div class='col-md-3'>
						<?php echo CHtml::link("<img src='$burl/$product_photo' width='100%'/>",  array('product/index','id'=>$luckydraw_productid));?> 
						
					</div>
					<div class='col-md-9'>
						<?php echo CHtml::link("<p><b style='font-size:18px'>$product_title</b></p>",  array('product/index','id'=>$luckydraw_productid));?> 
						
						<p><font style="font-size:16px">D-Coins: <?php echo $totalamountparticipate;?>/<?php echo $product_coin;?></font></p>
						<?php echo "<div style='margin-top:15px;margin-bottom:5px'>Your Lucky Draw No.:</div>";?>
							<?php
							
							$myid=Yii::app()->user->id;
							$queryMyparticipate="Select * FROM luckydraw WHERE luckydraw_status='Confirmed' and luckydraw_productid=$product_id and luckydraw_userid=$myid";
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
										
										echo "<div style='float:left;padding-right:20px !important;font-size:14px'><b>$lcode_id</b></div>";
									}
									
								}
							}
							echo "<div style='clear:both'></div>";
							;?>
						
					</div>
				</div>
				<hr/>
				<?php
					}
				?>
			
			
		
		
	</div>
</section>

<?php include("js/side_closing.php");?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
	function addfriend(fuser_id,user_id){
		jQuery.ajax({
			url: '<?php echo Yii::app()->request->baseUrl; ?>/js/ajax_sentrequest.php?fuser_id='+fuser_id+'&user_id='+user_id,
			success: function(data) {
			$('#addfriendsection').html("<font style='font-size:16px;font-weight:bold'>< Request Sent ></font>");
			
		  }
		});
	}
</script>