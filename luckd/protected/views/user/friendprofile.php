<?php
include("js/databaseconnection.php");
$myid=Yii::app()->user->id;
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
		<h4><?php echo $user_firstname;?> <?php echo $user_lastname;?>'s Profile</h4>
		<div class="row">
			<div class='col-md-3'>
				<img src="<?php echo Yii::app()->request->baseUrl;?>/<?php echo $user_photo;?>" width="100%"/>
			</div>
			<div class='col-md-9'>
				<p><b style="font-size:18px">
				<?php echo $user_firstname;?> <?php echo $user_lastname;?>
				</b></p>
				<p><?php echo $user_description;?></p>
				<table class="padding-table">
					<tr><td><b>Gender</b></td><td><b>:</b></td><td><?php echo $user_gender;?></td></tr>
					
				</table>
				
				<?php
						if($myid==$user_id){
							echo "<br/><font style='font-size:16px;font-weight:bold'>< Own Profile ></font>";
						} else{
							$queryFriend="Select * FROM friend WHERE (friend_from_id='$myid' and friend_to_id='$user_id') or (friend_from_id='$user_id' and friend_to_id='$myid')";		
								$resultFriend=mysql_query($queryFriend);
								$num_rowsFriend = mysql_num_rows($resultFriend);
								if($num_rowsFriend==0){
									echo "<br/><div id='addfriendsection'><button class='btn btn--wd btn--with-icon btn--sm wave' onclick='addfriend($user_id,$myid)'>Add as friend</button></div>";
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
						}
							
					?>
			</div>
		</div>
		
		
	</div>
</section>
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