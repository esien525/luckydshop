<?php include("js/cpanel_side_opening.php");?>

<div class="cpanel_holder">
	<div class="bb" style="padding-top:8px">
		<?php echo CHtml::link('Home', array('site/index')); ?>
		<small> > </small>
		Contact Us
		
	</div>
	
	<h26>Contact US</h26><br/><br/>
			<?php
				include("js/databaseconnection.php");
				
				$queryInfo="Select * FROM  content_contact WHERE contact_id=1";
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
			<!--<form method="POST"   onsubmit="return validateForm_contact()" action="index.php?r=site/thankyou" class="contactForm" id="myForm1">
				
				<input type="text" placeholder="Name" name="name" id="contactname" /><br/>
				<input type="text" placeholder="E-mail" name="email" id="contactemail" />
				<input type="text" placeholder="Phone Number" name="phone" id="contactphone" /><br/>
				<div>
					<table>
						<tr>
							<td style="width:8px"><input type="radio" name="type" value="enquiry@trademysuperbike.com" checked></td><td style="width:260px"><font style="color:#444444">General enquiry</font></td>
							<td style="width:8px"><input type="radio" name="type" value="advertise@trademysuperbike.com"></td><td style="width:260px"><font style="color:#444444">Advertisement enquiry</font></td>
						</tr>
						<tr>
							<td><input type="radio" name="type" value="support@trademysuperbike.com"></td><td><font style="color:#444444">Website assistance / support / feedback</font></td>
							<td><input type="radio" name="type" value="marcomm@trademysuperbike.com"></td><td><font style="color:#444444">Media Relation</font></td>
						</tr>
					</table>
				</div>
					
				<input type="text" placeholder="Subject" name="subject" id="contactsubject" style="width:550px"/><br/>
				<textarea cols="10" rows="5" name="message" id="contactmessage"></textarea><br/>
				<input type="submit" class="button" value="Send message" name="send" id="send"/>
				
					
			</form>
			<br/>
			<hr/>-->
			<table>
				<tr>
					<td class="td_va" colspan="4">
						<big><b>Iapply Asia.com</b></big>
						
					</td>
					
				</tr>
				<tr>
					
					<td class="td_va" colspan='3'><?php echo $word= str_replace("\n", "<br />",$contact_address);?></td>
					<td class="td_va"></td>
				</tr>
				<tr>
					<td class="td_va" width="60px"><b>Phone</b></td>
					<td class="td_va" width="8px"><b>:</b></td>
					<td class="td_va"><?php echo $contact_phone;?></td>
				</tr>
				
			</table>
			
			
</div>
<?php include("js/cpanel_side_closing.php");?>

<script>
	function validateForm()
	{
		
		var x=document.forms["myForm"]["name"].value;
		var y=document.forms["myForm"]["email"].value;
		var atpos=y.indexOf("@");
		var dotpos=y.lastIndexOf(".");
		
		if (y==null || y=="" || y=="Your email...")
		{
			alert("Email must be filled out");
			document.forms["myForm"]["email"].style.backgroundColor="#fd0202";
			return false;
			
		}
		
		else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length)
		  {
		  alert("Not a valid e-mail address");
		  document.forms["myForm"]["email"].style.backgroundColor="#fd0202";
		  return false;
		}
	}
	function validateForm_contact()
	{
		var v=document.forms["myForm1"]["contactmessage"].value;
		var w=document.forms["myForm1"]["contactsubject"].value;
		var x=document.forms["myForm1"]["contactname"].value;
		var y=document.forms["myForm1"]["contactemail"].value;
		var z=document.forms["myForm1"]["contactphone"].value;
		var atpos=y.indexOf("@");
		var dotpos=y.lastIndexOf(".");
		
		if(x==null || x==""){
			alert("Your name must be filled out");
			document.forms["myForm1"]["contactname"].style.backgroundColor="#ee1b2e";
			document.forms["myForm1"]["contactemail"].style.backgroundColor="#f9f9f9";
			document.forms["myForm1"]["contactsubject"].style.backgroundColor="#f9f9f9";
			document.forms["myForm1"]["contactmessage"].style.backgroundColor="#f9f9f9";
			document.forms["myForm1"]["contactphone"].style.backgroundColor="#f9f9f9";
			return false;
		}
		else if (y==null || y=="" || y=="Your email...")
		{
			alert("Email must be filled out");
			document.forms["myForm1"]["contactemail"].style.backgroundColor="#ee1b2e";
			document.forms["myForm1"]["contactname"].style.backgroundColor="#f9f9f9";
			document.forms["myForm1"]["contactsubject"].style.backgroundColor="#f9f9f9";
			document.forms["myForm1"]["contactmessage"].style.backgroundColor="#f9f9f9";
			document.forms["myForm1"]["contactphone"].style.backgroundColor="#f9f9f9";
			return false;
			
		}
		
		else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length)
		  {
		  alert("Not a valid e-mail address");
		  document.forms["myForm1"]["contactemail"].style.backgroundColor="#ee1b2e";
		  document.forms["myForm1"]["contactname"].style.backgroundColor="#f9f9f9";
			document.forms["myForm1"]["contactsubject"].style.backgroundColor="#f9f9f9";
			document.forms["myForm1"]["contactmessage"].style.backgroundColor="#f9f9f9";
			document.forms["myForm1"]["contactphone"].style.backgroundColor="#f9f9f9";
		  return false;
		}
		/*else if(z==null || z==""){
			alert("Phone number must be filled out");
			document.forms["myForm1"]["contactsubject"].style.backgroundColor="#f9f9f9";
			document.forms["myForm1"]["contactname"].style.backgroundColor="#f9f9f9";
			document.forms["myForm1"]["contactemail"].style.backgroundColor="#f9f9f9";
			document.forms["myForm1"]["contactmessage"].style.backgroundColor="#f9f9f9";
			document.forms["myForm1"]["contactphone"].style.backgroundColor="#ee1b2e";
			return false;
		}*/
		else if(w==null || w==""){
			alert("Subject must be filled out");
			document.forms["myForm1"]["contactsubject"].style.backgroundColor="#ee1b2e";
			document.forms["myForm1"]["contactname"].style.backgroundColor="#f9f9f9";
			document.forms["myForm1"]["contactemail"].style.backgroundColor="#f9f9f9";
			document.forms["myForm1"]["contactmessage"].style.backgroundColor="#f9f9f9";
			document.forms["myForm1"]["contactphone"].style.backgroundColor="#f9f9f9";
			return false;
		}
		else if(v==null || v==""){
			alert("Message must be filled out");
			document.forms["myForm1"]["contactmessage"].style.backgroundColor="#ee1b2e";
			document.forms["myForm1"]["contactname"].style.backgroundColor="#f9f9f9";
			document.forms["myForm1"]["contactemail"].style.backgroundColor="#f9f9f9";
			document.forms["myForm1"]["contactsubject"].style.backgroundColor="#f9f9f9";
			document.forms["myForm1"]["contactphone"].style.backgroundColor="#f9f9f9";
			return false;
		}
		
	}
	</script>