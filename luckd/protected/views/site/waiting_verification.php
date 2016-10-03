<?php
$this->pageTitle=Yii::app()->name . ' - Login';
if(isset($_GET['action'])){
	echo "<script>";
	echo "alert('Thanks for your registration. Please login to get more information.');";
	echo "</script>";
}
?>
<br/>
<table>
	<tr>
		<td style="vertical-align:top">
			<div class="loginmaintitle">Email Verification</div>
			
			<div class="signinmessage" style="margin-bottom:15px">
				<?php if(isset($_GET['id'])){
					$encryptid=$_GET['id'];
					$actualid=base64_decode(base64_decode(base64_decode($encryptid)));
					include("js/databaseconnection.php");
					mysql_query("Update user SET user_status='active' where user_id='$actualid';");
					echo "Account verified. You can login with your email and password now.";
					}
					else{
				?>
				Please verify your account with the verification link that send to your email during the registration process in order to login into Trademysuperbike Portal.
				<?php }?>
			</div>
			
			
		</td>
		<td width="50%">
			<div class="loginmaintitle">Welcome to Superbike.com.my</div>
			<p>You've taken the first step, now it's time to make the most of the opportunities available to you.</p>
			<table>
				<tr>
					<td style="vertical-align:top;padding-right:20px"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/login_apply.png" width="50px"/></td>
					<td style="vertical-align:top">
						<div class="loginsubtitle">Search Your Superbike Info Anytime, Anywhere</div>
						<p>Search for your favourite superbike and accessories on your desktop, laptop or any devices.</p><br/>
					</td>
				</tr>
				<tr>
					<td style="vertical-align:top;padding-right:20px"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/login_promote.png" width="50px"/></td>
					<td style="vertical-align:top">
						<div class="loginsubtitle">Share Biker Experiences & News Today</div>
						<p>Create your profile & post all your related experiences that can shared & viewed by thousand of bikers.</p><br/>
					</td>
				</tr>
				<tr>
					<td style="vertical-align:top;padding-right:20px"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/login_compare.png" width="50px"/></td>
					<td style="vertical-align:top">
						<div class="loginsubtitle">Post Superbike or Accessories at Your Fingertips</div>
						<p>Post and manage your advertisement/account using our powerful management tool at ease.</p><br/>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>