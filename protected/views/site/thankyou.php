<?php include("js/cpanel_side_opening.php");?>

<div class="cpanel_holder">
	<div class="bb" style="padding-top:8px">
		<?php echo CHtml::link('Home', array('site/index')); ?>
		<small> > </small>
		Contact
		<small> > </small>
		Thank You
	</div>
	
	<h26>Thank You</h26><br/><br/>
	<?php


	//If the form is submitted
	if(isset($_POST['send'])) {
		$to=$_POST['type'];/*Put Your Email Adress Here*/
		if($to==""){$to="enquiry@trademysuperbike.com";}
		$from_email = $_POST['email'];
		$phone = $_POST['phone'];
		if($phone==""){$phone="-";}
		$name= $_POST['name'];
		$messagep=$_POST['message'];
		$message="
		<html>
		<body>
			<p>$messagep</p>
			<p><b><u>Contact Details</u></b></p>
			<p>
				Name: $name<br/>
				Email: $from_email<br/>
				Phone Number: $phone
			</p>
		</body>
		</html>
		";
		$subject= $_POST['subject'];

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		// Additional headers
		//$headers .= "To:$name<$to>\r\n";
		$headers .= "From:$from_email\r\n";
		//$headers .= "Cc:jeff_yeoh87@hotmail.com\r\n";
		$headers .= "Bcc:trademysuperbike@gmail.com\r\n";
		mail($to, $subject, $message, $headers);
		
		$status =  '<strong>Thank you for your enquiry. Our person in-charge will contact you shortly.<br/>Have a nice day.</strong>';
		
		echo $status;
	
	} 
	?>
</div>
<?php include("js/cpanel_side_closing.php");?>