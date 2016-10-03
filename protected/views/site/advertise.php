<?php include("js/cpanel_side_opening.php");?>

<div class="cpanel_holder">
	<div class="bb" style="padding-top:8px">
		<?php echo CHtml::link('Home', array('site/index')); ?>
		<small> > </small>
		Advertise With Us
	</div>
	
	<h26>Advertise With Us</h26><br/><br/>
	<?php
					include("js/databaseconnection.php");
					
					$queryInfo="Select * FROM content_control_info WHERE about_id=2";
					$resultInfo=mysql_query($queryInfo);
					
					while($rowInfo=mysql_fetch_array($resultInfo)){
						echo $content=$rowInfo['about_content'];
						
					}
					?>
</div>
<?php include("js/cpanel_side_closing.php");?>