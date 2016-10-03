
<!-- Content section -->
<section class="content">
  <div class="container">
	<?php
	include("js/databaseconnection.php");
	$tid=$_GET['id'];
	$queryTransaction="Select * FROM transaction_coin WHERE transactionc_id='$tid'";		
		$resultTransaction=mysql_query($queryTransaction);
		while($rowTransaction=mysql_fetch_array($resultTransaction)){
			$transactionc_id=$rowTransaction['transactionc_id'];
			$transactionc_refno1=$rowTransaction['transactionc_refno1'];
		}
	?>
	<h2 class="h-pad-sm text-uppercase text-center">Successful D- Coin Purchase</h2>
	<h4 class="text-uppercase text-center">REF NO: <b>#<?php echo $transactionc_refno1;?></b></h4><br/><br/>
	<div style="text-align:center"><?php echo CHtml::link("<h5>Back to Home Page >></h5>",  array('site/index'));?></div>
	<div class="divider divider--sm"></div>
	
	
			
		
	
  </div>
</section>

<!-- End Content section -->