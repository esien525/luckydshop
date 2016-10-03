<?php include("js/cpanel_side_opening.php");?>
<div class="cpanel_holder">
<h22>View User #<?php echo $model->user_name; ?> &nbsp;&nbsp;&nbsp; <small><?php echo CHtml::link(' [Back to User Details]',  array('view','id'=>$model->user_id)); ?></small></h22>



<div class="formdiv">
	<h26>User Vocuher Monthly Usage Limit</h26>
	<?php echo $this->renderPartial('/userVoucher/_form', array('model'=>$model1)); ?>
	<hr/>
	<table>
	<?php
		$thisuserid=$_GET['id'];
		$queryVoucher="Select * FROM user_voucher WHERE user_id=$thisuserid";
		$resultVoucher=mysql_query($queryVoucher);
		$countVoucher=0;
		while($rowVoucher=mysql_fetch_array($resultVoucher)){
			$countVoucher++;
			$voucher_id=$rowVoucher['voucher_id'];
			$discount_id=$rowVoucher['discount_id'];
			
			$queryDiscount="Select * FROM setting_discount WHERE discount_id=$discount_id";
			$resultDiscount=mysql_query($queryDiscount);
			while($rowDiscount=mysql_fetch_array($resultDiscount)){
				$discount_code=$rowDiscount['discount_code'];
				$discount_title=$rowDiscount['discount_title'];
			}
		
			$monthly_usage=$rowVoucher['monthly_usage'];
			$unlimited_usage=$rowVoucher['unlimited_usage'];
			
			$voucher_datetime=$rowVoucher['voucher_datetime'];
			echo "<tr >";
				echo "<td  style='border-bottom:1px solid #cccccc'>";
				echo CHtml::link('<img src="'.$burl.'/images/update.png"/>',  array('user/updatevoucher','id'=>$thisuserid,'vid'=>$voucher_id));
				echo CHtml::link('<img src="'.$burl.'/images/delete.png"/> &nbsp;','#',array('submit'=>array('/user/deletevoucher','id'=>$voucher_id,'uid'=>$thisuserid),'confirm'=>'Are you sure you want to delete this voucher?'));
				echo "</td>";
				echo "<td  style='border-bottom:1px solid #cccccc'><b>$discount_code</b></td>";
				echo "<td  style='border-bottom:1px solid #cccccc'><i>$discount_title</i></td>";
				if($unlimited_usage=="Yes"){
					echo "<td style='border-bottom:1px solid #cccccc'>unlimited /month</td>";
				} else{
					echo "<td style='border-bottom:1px solid #cccccc'>$monthly_usage units /month</td>";
				}
			
			echo "</tr>";
		}
		if($countVoucher==0){
			echo "<tr><td>-No voucher entitled for user-</td></tr>";
		}
		
	?>
	</table>
</div>
<br/><br/>

</div>
<?php include("js/cpanel_side_closing.php");?>