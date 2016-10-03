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
		<h4>My Profile</h4>
		<div class="row">
			<div class='col-md-3'>
				<img src="<?php echo Yii::app()->request->baseUrl;?>/<?php echo $user_photo;?>" width="100%"/>
			</div>
			<div class='col-md-9'>
				<p><b style="font-size:18px">
				<?php echo $user_firstname;?> <?php echo $user_lastname;?>&nbsp;&nbsp;
				<?php echo CHtml::link("<img src='$burl/images/edit.png' height='18px'/>",  array('editprofile'));?>
				</b></p>
				<p><?php echo $user_description;?></p>
				<table class="padding-table">
					<tr><td><b>Gender</b></td><td><b>:</b></td><td><?php echo $user_gender;?></td></tr>
					<tr><td><b>D-Coins</b></td><td><b>:</b></td><td><?php echo CHtml::link("$user_dcoin",  array('dcoin'));?></td></tr>
				</table>
			</div>
		</div>
		<br/>
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
	</div>
</section>

<?php include("js/side_closing.php");?>