<?php include("js/cpanel_side_opening.php");
include("js/databaseconnection.php");?>


		<?php
				$myuserlevel=Yii::app()->user->usertype;
				$myuserid=Yii::app()->user->id;
		?>
		
				
				<div class="cpaneltop">
						
						<div style="background-color:#545454;padding:20px;margin-bottom:20px;color:#ffffff;text-align:left">
							<h22 style="color:#ffffff;text-shadow:none;">Search Quotation :</h22>
							<br/>
							<i>Please key in client phone number to search</i>
							<form method="post" action="searchresult">
								<input type="text" name="phone" placeholder="Key in customer phone to search" style="padding:5px;width:70%;margin-top:10px"/>
								<input type="submit" value="Search Now" style="padding:5px 10px;font-weight:bold"/>
							</form>
						</div>
						<?php
						if(isset($_POST['phone'])){
							$phone=$_POST['phone'];
							echo "<h22>Search Parameter:</h22><br/>";
							echo "$phone";
							echo "<br/><br/>";
							echo "<h22>Search Results:</h22><br/>";
							
								$queryQuotation="Select * FROM quotation  WHERE  quotation_customer_phone='$phone' and quotation_refer_to=0 ";
								$resultQuotation=mysql_query($queryQuotation);
								$row_Quotation = mysql_num_rows($resultQuotation);
								if($row_Quotation==0){echo "No result found.";}
								else{
									echo "<table style='border-collapse:collapse'>";
										echo "<tr>";
										echo "<td style='border:1px solid #000000;background-color:#545454;color:#ffffff;font-weight:bold;padding:5px'>Quotation No</td>";
										echo "<td style='border:1px solid #000000;background-color:#545454;color:#ffffff;font-weight:bold;padding:5px'>Customer Name</td>";
										echo "<td style='border:1px solid #000000;background-color:#545454;color:#ffffff;font-weight:bold;padding:5px'>Customer Address</td>";
										echo "<td style='border:1px solid #000000;background-color:#545454;color:#ffffff;font-weight:bold;padding:5px'>Customer Phone</td>";
										echo "<td style='border:1px solid #000000;background-color:#545454;color:#ffffff;font-weight:bold;padding:5px'>Created on</td>";
										echo "</tr>";
										while($rowQuotation=mysql_fetch_array($resultQuotation)){
												$oriquotation_id=$rowQuotation['quotation_id'];
												$quotation_id=$rowQuotation['quotation_id'];
												$quotation_no=$rowQuotation['quotation_no'];
												$quotation_customer_name=$rowQuotation['quotation_customer_name'];
												$quotation_customer_address=$rowQuotation['quotation_customer_address'];
												$quotation_customer_phone=$rowQuotation['quotation_customer_phone'];
												$quotation_status=$rowQuotation['quotation_status'];
												$quotation_refer_to=$rowQuotation['quotation_refer_to'];
												$quotation_datetime=$rowQuotation['quotation_datetime'];
												
												
												if($quotation_refer_to!="" and $quotation_refer_to!=0){
														$quotation_id=$quotation_no;
														$countchar=strlen($quotation_id);
														if($countchar==1){$quotation_id="0000".$quotation_id."_".$quotation_version;}
														else if($countchar==2){$quotation_id="000".$quotation_id."_".$quotation_version;}
														else if($countchar==3){$quotation_id="00".$quotation_id."_".$quotation_version;}
														else if($countchar==4){$quotation_id="0".$quotation_id."_".$quotation_version;}
														else{$quotation_id=$quotation_id."_".$quotation_version;}
													} else{
														$quotation_id=$quotation_no;
														$countchar=strlen($quotation_id);
														if($countchar==1){$quotation_id="0000$quotation_id";}
														else if($countchar==2){$quotation_id="000$quotation_id";}
														else if($countchar==3){$quotation_id="00$quotation_id";}
														else if($countchar==4){$quotation_id="0$quotation_id";}
														else{$quotation_id=$quotation_id;}
													}

												echo "<tr>";
												echo "<td style='border:1px solid #cccccc;padding:5px'><a href='$burl/quotation/summary/$oriquotation_id?stt=mpy'>#$quotation_id</a></td>";
												echo "<td style='border:1px solid #cccccc;padding:5px'>$quotation_customer_name</td>";
												echo "<td style='border:1px solid #cccccc;padding:5px'>$quotation_customer_address</td>";
												echo "<td style='border:1px solid #cccccc;padding:5px'>$quotation_customer_phone</td>";
												echo "<td style='border:1px solid #cccccc;padding:5px'>$quotation_datetime</td>";
												echo "</tr>";
										}
									echo "</table>";
								}
								
						}
						?>
				
				</div>
				<br/><br/><br/>
				
			
<?php include("js/cpanel_side_closing.php");?>