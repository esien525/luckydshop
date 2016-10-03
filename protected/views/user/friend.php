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
$queryFriend="Select * FROM friend WHERE (friend_from_id='$user_id' or friend_to_id='$user_id') and friend_status='Friend'";		
$resultFriend=mysql_query($queryFriend);
$num_rowsFriend = mysql_num_rows($resultFriend);

?>
<!-- Content section -->
<section class="content">
	<div class="container">
		<div style="float:right"><?php echo CHtml::link('<button class="btn btn--wd btn--with-icon btn--sm wave">Search / Invite Friend</button>',  array('invite')); ?></div>

		<h4>My Friend (<?php echo $num_rowsFriend;?>)</h4>
		<div class="row">
				<?php
				while($rowFriend=mysql_fetch_array($resultFriend)){
						$friend_from_id=$rowFriend['friend_from_id'];
						$friend_to_id=$rowFriend['friend_to_id'];
						if($friend_from_id==$user_id){$thisfriendid=$friend_to_id;}
						else if($friend_to_id==$user_id){$thisfriendid=$friend_from_id;}
							$queryFDE="Select * FROM user WHERE user_id='$thisfriendid'";		
							$resultFDE=mysql_query($queryFDE);
							while($rowFDE=mysql_fetch_array($resultFDE)){
								$fuser_firstname=$rowFDE['user_firstname'];
								$fuser_lastname=$rowFDE['user_lastname'];
								$fuser_photo=$rowFDE['user_photo'];
								if($fuser_photo==""){$fuser_photo="images/nophoto.jpg";}
							}
						$friend_datetime=$rowFriend['friend_datetime'];
						$friend_datetime_timestamp = strtotime($friend_datetime);
						$friend_datetimenew = date('M Y', $friend_datetime_timestamp);  
				?>
				<div class='col-md-3'>
						<div style="height:200px;overflow:hidden"><img src="<?php echo Yii::app()->request->baseUrl;?>/<?php echo $fuser_photo;?>" width="100%"/></div>
						<div style="font-size:16px;margin-top:8px;"><?php echo $fuser_firstname;?> <?php echo $fuser_lastname;?></div>
						<div style="margin-bottom:15px;color:#cccccc"><i>friend since <?php echo $friend_datetimenew;?></i></div>
					</div>
			
				<?php
					}
				?>
			
			
		</div>
		
	</div>
</section>

<?php include("js/side_closing.php");?>