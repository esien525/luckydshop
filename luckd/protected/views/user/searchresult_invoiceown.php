<?php include("js/cpanel_side_opening.php");
include("js/databaseconnection.php");?>


		<?php
				$myuserlevel=Yii::app()->user->usertype;
				$myuserid=Yii::app()->user->id;
		?>
		
				
				<div class="cpaneltop">
						
						<div style="background-color:#545454;padding:20px;margin-bottom:20px;color:#ffffff;text-align:left">
							<h22 style="color:#ffffff;text-shadow:none;">Search Invoice :</h22>
							<br/>
							<i>Please key in invoice number or client phone number to search</i>
							<form method="post" action="searchresult_invoiceown">
								<select name="branchcode" id="branchcode" style='padding:5px;'>
									<?php
										$queryBranch="Select * FROM setting_branch";
										$resultBranch=mysql_query($queryBranch);
										
										while($rowBranch=mysql_fetch_array($resultBranch)){
											$branch_invoice_code=$rowBranch['branch_invoice_code'];
											echo "<option  value='$branch_invoice_code'>$branch_invoice_code</option>";
										}
									?>
								</select>
								<input type="text" name="number" placeholder="Key in invoice number" style="padding:5px;width:40%;margin-top:10px"/>
								<input type="text" name="phone" placeholder="Key in customer phone" style="padding:5px;width:70%;margin-top:10px"/>
								<input type="submit" value="Search Now" style="padding:5px 10px;font-weight:bold"/>
							</form>
						</div>
						<?php
						$myid=Yii::app()->user->id;
						if(isset($_POST['phone']) or isset($_POST['number'])){
								$phone=$_POST['phone'];
								$branchcode=$_POST['branchcode'];
								$number=$_POST['number'];
								if($number!=""){
										$countchar1=strlen($number);
										if($countchar1==1){$number="0000$number";}
										else if($countchar1==2){$number="000$number";}
										else if($countchar1==3){$number="00$number";}
										else if($countchar1==4){$number="0$number";}
										else{$number=$number;}
								}
							echo "<h22>Search Parameter:</h22><br/>";
							if($number!=""){echo "Invoice Number : #$branchcode$number <br/>";}
							if($phone!=""){echo "Phone : $phone"; }
							echo "<br/><br/>";
							echo "<h22>Search Results:</h22><br/>";
							if($number!=""){ $querynumber="AND invoice_branch_code='$branchcode' AND invoice_no='$number'";} else {$querynumber="";}
							if($phone!=""){ $queryphone="AND invoice_client_phone='$phone'";} else {$queryphone="";}
							if($number!="" or $phone!=""){
							
								
								$queryInvoice="Select * FROM invoice  WHERE  invoice_by=$myid $querynumber $queryphone";
								$resultInvoice=mysql_query($queryInvoice);
								$row_Invoice = mysql_num_rows($resultInvoice);
								if($row_Invoice==0){echo "No result found.";}
								else{
									echo "<table style='border-collapse:collapse'>";
										echo "<tr>";
										echo "<td style='border:1px solid #000000;background-color:#545454;color:#ffffff;font-weight:bold;padding:5px'>Invoice No</td>";
										echo "<td style='border:1px solid #000000;background-color:#545454;color:#ffffff;font-weight:bold;padding:5px'>Customer Name</td>";
										//echo "<td style='border:1px solid #000000;background-color:#545454;color:#ffffff;font-weight:bold;padding:5px'>Customer Address</td>";
										//echo "<td style='border:1px solid #000000;background-color:#545454;color:#ffffff;font-weight:bold;padding:5px'>Customer Phone</td>";
										echo "<td style='border:1px solid #000000;background-color:#545454;color:#ffffff;font-weight:bold;padding:5px'>Amount (RM)</td>";
										echo "<td style='border:1px solid #000000;background-color:#545454;color:#ffffff;font-weight:bold;padding:5px'>Created on</td>";
										echo "<td style='border:1px solid #000000;background-color:#545454;color:#ffffff;font-weight:bold;padding:5px'>Status</td>";
										
										echo "</tr>";
										while($rowInvoice=mysql_fetch_array($resultInvoice)){
												$invoice_id=$rowInvoice['invoice_id'];
												$invoice_no=$rowInvoice['invoice_no'];
												$invoice_branch_code=$rowInvoice['invoice_branch_code'];
												$invoice_client_name=$rowInvoice['invoice_client_name'];
												$invoice_client_address=$rowInvoice['invoice_client_address'];
												$invoice_client_phone=$rowInvoice['invoice_client_phone'];
												$quotation_original_id=$rowInvoice['quotation_original_id'];
												$quotation_current_id=$rowInvoice['quotation_current_id'];
												$invoice_total=$rowInvoice['invoice_total'];
												$invoice_GST=$rowInvoice['invoice_GST'];
												$invoice_grand_total=number_format($rowInvoice['invoice_grand_total'],2);
												$invoice_remark=$rowInvoice['invoice_remark'];
												$invoice_datetime=$rowInvoice['invoice_datetime'];
												$invoice_by=$rowInvoice['invoice_by'];
												$invoice_status=$rowInvoice['invoice_status'];
												
												
												$countchar=strlen($invoice_no);
														if($countchar==1){$invoice_no="0000$invoice_no";}
														else if($countchar==2){$invoice_no="000$invoice_no";}
														else if($countchar==3){$invoice_no="00$invoice_no";}
														else if($countchar==4){$invoice_no="0$invoice_no";}
														else{$invoice_no=$invoice_no;}
												
												

												echo "<tr>";
												echo "<td style='border:1px solid #cccccc;padding:5px'><a href='$burl/quotation/invoice/$quotation_current_id?iid=$invoice_id'>#$invoice_branch_code$invoice_no</a></td>";
												echo "<td style='border:1px solid #cccccc;padding:5px'><b>$invoice_client_name</b><br/>$invoice_client_address<br/>$invoice_client_phone</td>";
												//echo "<td style='border:1px solid #cccccc;padding:5px'>$invoice_client_address</td>";
												//echo "<td style='border:1px solid #cccccc;padding:5px'>$invoice_client_phone</td>";
												echo "<td style='border:1px solid #cccccc;padding:5px'>$invoice_grand_total</td>";
												echo "<td style='border:1px solid #cccccc;padding:5px'>$invoice_datetime</td>";
												echo "<td style='border:1px solid #cccccc;padding:5px'>$invoice_status</td>";
												echo "</tr>";
										}
									echo "</table>";
								}
							
							}
						}
						?>
				
				</div>
				<br/><br/><br/>
				
			
<?php include("js/cpanel_side_closing.php");?>