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
		<div style="float:right"><?php echo CHtml::link('<button class="btn btn--wd btn--with-icon btn--sm wave">My Friends</button>',  array('friend')); ?></div>

		<h4>Invite Friend</h4>
		
		<div class="row">
			<div class='col-md-12'>
				<div style="padding:15px;background-color:#f5f6f7">
				<h4 style="padding-bottom:10px !important"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/share.png" height="22px"/> <b>Invite Friends</b></h4>
				<p>Enjoy this fun moment with your friend? What you waiting for? Invite your friend join your network and start an unique journey together!<br/>
				Simple step, just copy and paste below link and invite your friend:<br/></p>
				<p style="font-size:16px;color:#536dfe">
					http://localhost/luckd/user/register?refer=<?php echo $user_refer_code;?>
				</p>
				</div>
			</div>
			
		</div>
		<br/><br/>
		<h4>Search Friend</h4>
		<div class="row">
			<div class='col-md-12'>
				<div style="padding:15px;background-color:#f5f6f7">
				<h4 style="padding-bottom:10px !important"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/search.png" height="17px"/> <b>Search Friends</b></h4>
				<div class="form">
				<form method="post">
					<input type="text" name="email" style="width:70%!important;padding: 8px 12px;" placeholder="Email Address"/>
					&nbsp;<button class="btn btn--wd btn--with-icon btn--sm wave" style="margin-top:2px">Search</button>
					
				</form>
				</div>
				
				</div>
			</div>
			
		</div>
		<br/>
		
		
				<?php
				$emailaddress="unknown";
				if(isset($_POST['email'])){
					$emailaddress=$_POST['email'];
				?>
				<div class="row">
				<div class='col-md-12'><h5>Search Friend Result for "<?php echo "$emailaddress";?>"</h5></div>
				</div>
				<?php
				}
				?>
				
				<?php
				$queryUser="Select * FROM user WHERE user_email='$emailaddress'";		
				$resultUser=mysql_query($queryUser);
				$num_rowsUser = mysql_num_rows($resultUser);
				while($rowUser=mysql_fetch_array($resultUser)){
						$fuser_id=$rowUser['user_id'];
						$fuser_firstname=$rowUser['user_firstname'];
						$fuser_lastname=$rowUser['user_lastname'];
						$fuser_photo=$rowUser['user_photo'];
						if($fuser_photo==""){$fuser_photo="images/nophoto.jpg";}
						$fuser_description=$rowUser['user_description'];   $fuser_description= str_replace("\n", "<br />",$fuser_description);
				?>
				<?php if($num_rowsUser==0){ echo "<div class='row'><div class='col-md-12'><i>No Record Found.</i></div></div>";}?>
				<div class="row">
						<div class='col-md-3'>
							<img src="<?php echo Yii::app()->request->baseUrl;?>/<?php echo $fuser_photo;?>" width="100%"/>
						</div>
						<div class='col-md-9'>
							<p><b style="font-size:18px">
							<?php echo $fuser_firstname;?> <?php echo $fuser_lastname;?>&nbsp;&nbsp;
							</b></p>
							<p><?php echo $fuser_description;?></p>
							<?php
								$queryFriend="Select * FROM friend WHERE (friend_from_id='$fuser_id' and friend_to_id='$user_id') or (friend_from_id='$user_id' and friend_to_id='$fuser_id')";		
								$resultFriend=mysql_query($queryFriend);
								$num_rowsFriend = mysql_num_rows($resultFriend);
								if($num_rowsFriend==0){
									echo "<br/><div id='addfriendsection'><button class='btn btn--wd btn--with-icon btn--sm wave' onclick='addfriend($fuser_id,$user_id)'>Add as friend</button></div>";
								} else{
										while($rowFriend=mysql_fetch_array($resultFriend)){
												$friend_datetime=$rowFriend['friend_datetime'];
												$friend_datetime_timestamp = strtotime($friend_datetime);
												$friend_datetimenew = date('M Y', $friend_datetime_timestamp);  
												$friend_status=$rowFriend['friend_status'];
												if($friend_status=="Friend"){
													echo "<br/><font style='font-size:16px;font-weight:bold'>< Already Friend ></font><br/><i style='color:#cccccc'>friend since $friend_datetimenew</i>";
												} else if($friend_status=="Request Sent"){
													echo "<br/><font style='font-size:16px;font-weight:bold'>< Request Sent ></font>";
												}
										}
								}
							?>
						</div>
					</div>
			
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