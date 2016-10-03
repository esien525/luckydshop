<?php
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
//echo $directory_self;

// make a note of the location of the upload handler
$changeid = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'js/forgetpassword.php';
 
?>
<br/><br/>
<table>
	<tr>
		<td style="vertical-align:top">
			<?php
			$this->pageTitle=Yii::app()->name . ' - Login';
			if(isset($_GET['action'])){
				echo "<script>";
				echo "alert('Thanks for your registration. Please login to get more information.');";
				echo "</script>";
			}
			?>
			<div class="loginmaintitle">Forgotten Your Password?</div>
			
			<p>Enter the email address you used to sign in and we will assist you on the matter.</p>
			
				<div class="form">
					<form name="resetRequestForm" method="post" action=<?php echo"$changeid"?> id="UserResetRequestForm">
				
					<div id="registration_wrapper">
						<div id="registration_field">
							<label for="UserEmail">Email Address</label>
							<input name="UserEmail" type="text" placeholder="Email Address" class="rounded full" maxlength="250" id="UserEmail" style="width:300px;padding:3px 8px">
							<div id="UserEmailError" class="error" style="display:none">
								<div id="message" style="color:red">Invalid email address</div>
							</div>
						</div>
						<br/>
						<div id="registration_button">
							<a class="pointer styled button button_submit" onclick="show_confirm(document.getElementById('UserEmail'))" style="border:1px solid #a9a7a7;color:#000000;padding:4px 15px;background-color:#dddddd;cursor:pointer">Submit</a>
						</div>
						<br/><br/>
					</div>
				</form>
			</div><!-- form -->
		</td>
		
	</tr>
</table>

<script type="text/javascript">
function show_confirm(UserEmail)
{
	var UserEmail;
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (!filter.test(UserEmail.value)) 
	{
		UserEmail.style.background="#FCC";
		document.getElementById("UserEmailError").style.display="block";
		return false;
	}
	else
	{
		var r=confirm("Do you want to send your password to " + UserEmail.value + " ?");
		if (r==true)
		{
			document.getElementById("UserResetRequestForm").submit();
			
		}
		else
		{
		   return false;
		} 
	}
	
}
</script>
