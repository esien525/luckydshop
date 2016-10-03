<?php include("js/side_opening.php");?>
<h4>My D-Coins</h4>
<?php
		$mydcoin=Yii::app()->user->usercoin;
		$myid=Yii::app()->user->id;
		echo "<div style='text-align:center;background-color:#f5f6f7;padding:20px'>";
				echo "<h4 class='text-uppercase' style='padding-bottom:10px;font-weight:bold'>My D-Coins Management</h4>";
				echo "<h6 class='text-uppercase' style='padding-bottom:10px;'>Balance: <font style='font-size:20px;font-weight:bold'><u>$mydcoin</u></font>  coins</h6>";
				echo "You can  ";
							echo CHtml::link("top up",  array('site/package'),array('class'=>'bluelink'));
							echo " your D-coins before procced to any lucky draw participation.</i> ";
			echo "</div>";
			
		echo "<div style='margin-top:20px;background-color:#374850;color:#ffffff;padding:10px'><b>D-Coin Transaction History</b></div>";
		echo "<table class='transactiontable'>";
		echo "<tr>";
				echo "<td class='tdtitle'>Date</td>";
				echo "<td class='tdtitle'>Description</td>";
				echo "<td class='tdtitle' width='80px' style='text-align:center'>IN</td>";
				echo "<td class='tdtitle' width='80px' style='text-align:center'>OUT</td>";
			echo "</tr>";
		include("js/databaseconnection.php");
		$queryTransaction="Select * FROM transaction_coin WHERE transactionc_userid='$myid' ORDER BY transactionc_datetime DESC";		
		$resultTransaction=mysql_query($queryTransaction);
		$transactionc_totalin=0;
		$transactionc_totalout=0;
		while($rowTransaction=mysql_fetch_array($resultTransaction)){
				$transactionc_id=$rowTransaction['transactionc_id'];
				$transactionc_refno1=$rowTransaction['transactionc_refno1'];
				$transactionc_refno2=$rowTransaction['transactionc_refno2'];
				$transactionc_userid=$rowTransaction['transactionc_userid'];
				$transactionc_productid=$rowTransaction['transactionc_productid'];
				$transactionc_orderid=$rowTransaction['transactionc_orderid'];
				$transactionc_packageid=$rowTransaction['transactionc_packageid'];
				$transactionc_amount=$rowTransaction['transactionc_amount'];
				$transactionc_price=$rowTransaction['transactionc_price'];
				$transactionc_status=$rowTransaction['transactionc_status'];
				$transactionc_remark=$rowTransaction['transactionc_remark'];	
			$transactionc_datetime=$rowTransaction['transactionc_datetime'];
			if($transactionc_packageid!=""){
				$transactiondescription="D-coins purchased";
				$transactionc_totalin=$transactionc_totalin+$transactionc_amount;
				echo "<tr>";
					echo "<td>$transactionc_datetime</td>";
					echo "<td><b>REF #$transactionc_refno1</b> <br/> $transactiondescription RM$transactionc_price</td>";
					echo "<td style='text-align:center'>$transactionc_amount</td>";
					echo "<td style='text-align:center'></td>";
				echo "</tr>";
			} else{
				$transactiondescription="";
				$transactionc_totalout=$transactionc_totalout+$transactionc_amount;
				echo "<tr>";
					echo "<td>$transactionc_datetime</td>";
					echo "<td><b>REF #$transactionc_refno1</b> <br/> $transactiondescription</td>";
					echo "<td style='text-align:center'></td>";
					echo "<td style='text-align:center'>$transactionc_amount</td>";
				echo "</tr>";
			}
		}
		echo "<tr>";
					echo "<td colspan='2' class='tdtitle' style='text-align:right;border-top:2px solid #545454;border-bottom:2px solid #545454'>TOTAL</td>";
					echo "<td style='text-align:center;border-top:2px solid #545454;border-bottom:2px solid #545454' class='tdtitle'>$transactionc_totalin</td>";
					echo "<td style='text-align:center;border-top:2px solid #545454;border-bottom:2px solid #545454' class='tdtitle'>$transactionc_totalout</td>";
				echo "</tr>";
		echo "</table>";
?>
<?php include("js/side_closing.php");?>