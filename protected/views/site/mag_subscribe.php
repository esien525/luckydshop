<table class="table_nomargin">
	<tr>
		<td class="td_nopadding_main" style="width:240px">
			<?php include("js/auto_leftsidebar.php");?>
			
			
		</td>
		<td class="td_10padding_main">
			<h26>Magazine Subscription </h26><br/><br/>
			Thanks for your interest in subsccribe our AUTOCARI magazine. Our magazine representative will contact you shortly for this magazine subscription.
			Meanwhile, please feel free to browse through our website.
			Please do not hesitate to contact us should you have any enquiries at all.<br/><br/>
			<?php
				include("js/databaseconnection.php");
				
				$queryInfo="Select * FROM car_contact WHERE contact_id=1";
				$resultInfo=mysql_query($queryInfo);
				
				while($rowInfo=mysql_fetch_array($resultInfo)){
					$contact_address=$rowInfo['contact_address'];
					$contact_phone=$rowInfo['contact_phone'];
					$contact_email=$rowInfo['contact_email'];
					$contact_facebook=$rowInfo['contact_facebook'];
					$contact_tweeter=$rowInfo['contact_tweeter'];
					$contact_google=$rowInfo['contact_google'];
				}
				?>
				
			Tel: <?php echo $contact_phone;?><br/>
			Email: <?php echo $contact_email;?><br/><br/>
			
			<a href="<?php echo $contact_facebook;?>" target="_blank"><img width="50px" src="<?php echo $burl;?>/images/fb.png"/></a>
			<a href="<?php echo $contact_tweeter;?>" target="_blank"><img width="50px" src="<?php echo $burl;?>/images/tweeter.png"/></a>
			<a href="<?php echo $contact_google;?>" target="_blank"><img width="50px" src="<?php echo $burl;?>/images/google.png"/></a>
		</td>
	</tr>
</table>