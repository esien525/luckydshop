<?php 
	include('js/language.php');
	$burl=Yii::app()->request->baseUrl;

	$temp_product_title = "product_title".$lang;
	$temp_product_description = "product_description".$lang;
	$temp_product_importantinfo = "product_importantinfo".$lang;

	$product_id=$model->product_id;
	$product_title=$model->$temp_product_title;
	$product_description=$model->$temp_product_description;   $product_description= str_replace("\n", "<br />",$product_description);
	$product_importantinfo=$model->$temp_product_importantinfo;   $product_importantinfo= str_replace("\n", "<br />",$product_importantinfo);
	$product_photo=$model->product_photo;
	$product_photo2=$model->product_photo2;
	$product_photo3=$model->product_photo3;
	$product_photo4=$model->product_photo4;
	$product_photo5=$model->product_photo5;
	$product_photo6=$model->product_photo6;
	$product_photo7=$model->product_photo7;
	$product_photo8=$model->product_photo8;
	$product_photo9=$model->product_photo9;
	$product_photo10=$model->product_photo10;
	$product_price=$model->product_price;
	$product_promotion_price=$model->product_promotion_price;
	$product_coin=$model->product_coin;
	$product_allow_groupbuy=$model->product_allow_groupbuy;
	$product_start_date=$model->product_start_date;
	$product_end_date=$model->product_end_date;
	$product_status=$model->product_status;
	$product_luckydraw_status=$model->product_luckydraw_status;
	$product_featured=$model->product_featured;
	$product_posted_date=$model->product_posted_date;
	$product_posted_by=$model->product_posted_by;
?>
<!-- Breadcrumb section -->
    
    <section class="breadcrumbs breadcrumbs-boxed">
      <div class="container">
        <ol class="breadcrumb breadcrumb--wd pull-left">
          <li><?php echo CHtml::link("Home",  array('site/index')); ?></li>
          <li class="active"><?php echo $product_title;?></li>
        </ol>
        
      </div>
    </section>
    
    <!-- Content section -->
    <section class="content">
      <div class="container">
        <div class="row product-info-outer">
			<div class="col-sm-4 col-md-4 col-lg-5 hidden-xs">
				<div class="product-main-image">
					<div class="product-main-image__item">
						<img class="product-zoom" src='<?php echo $burl;?>/<?php echo $product_photo;?>' data-zoom-image="<?php echo $burl;?>/<?php echo $product_photo;?>"/>
					</div>
					<div class="product-main-image__zoom"></div>
				</div>
				<div class="product-images-carousel">
					<ul id="smallGallery">
						<?php
						echo "<li>
								<a href='#' data-image='".Yii::app()->request->baseUrl."/".$product_photo."' data-zoom-image='".Yii::app()->request->baseUrl."/".$product_photo."'>
									<img src='".Yii::app()->request->baseUrl."/".$product_photo."' alt=''/>
								</a>
							</li>";
						if ($product_photo2 != '') 
						{
							echo "<li>
									<a href='#' data-image='".Yii::app()->request->baseUrl."/".$product_photo2."' data-zoom-image='".Yii::app()->request->baseUrl."/".$product_photo2."'>
										<img src='".Yii::app()->request->baseUrl."/".$product_photo2."' alt=''/>
									</a>
								</li>";
						}
						if ($product_photo3 != '') 
						{
							echo "<li>
									<a href='#' data-image='".Yii::app()->request->baseUrl."/".$product_photo3."' data-zoom-image='".Yii::app()->request->baseUrl."/".$product_photo3."'>
										<img src='".Yii::app()->request->baseUrl."/".$product_photo3."' alt=''/>
									</a>
								</li>";
						}
						if ($product_photo4 != '') 
						{
							echo "<li>
									<a href='#' data-image='".Yii::app()->request->baseUrl."/".$product_photo4."' data-zoom-image='".Yii::app()->request->baseUrl."/".$product_photo4."'>
										<img src='".Yii::app()->request->baseUrl."/".$product_photo4."' alt=''/>
									</a>
								</li>";
						}
						if ($product_photo5 != '') 
						{
							echo "<li>
									<a href='#' data-image='".Yii::app()->request->baseUrl."/".$product_photo5."' data-zoom-image='".Yii::app()->request->baseUrl."/".$product_photo5."'>
										<img src='".Yii::app()->request->baseUrl."/".$product_photo5."' alt=''/>
									</a>
								</li>";
						}
						if ($product_photo6 != '') 
						{
							echo "<li>
									<a href='#' data-image='".Yii::app()->request->baseUrl."/".$product_photo6."' data-zoom-image='".Yii::app()->request->baseUrl."/".$product_photo6."'>
										<img src='".Yii::app()->request->baseUrl."/".$product_photo6."' alt=''/>
									</a>
								</li>";
						}
						if ($product_photo7 != '') 
						{
							echo "<li>
									<a href='#' data-image='".Yii::app()->request->baseUrl."/".$product_photo7."' data-zoom-image='".Yii::app()->request->baseUrl."/".$product_photo7."'>
										<img src='".Yii::app()->request->baseUrl."/".$product_photo7."' alt=''/>
									</a>
								</li>";
						}
						if ($product_photo8 != '') 
						{
							echo "<li>
									<a href='#' data-image='".Yii::app()->request->baseUrl."/".$product_photo8."' data-zoom-image='".Yii::app()->request->baseUrl."/".$product_photo8."'>
										<img src='".Yii::app()->request->baseUrl."/".$product_photo8."' alt=''/>
									</a>
								</li>";
						}
						if ($product_photo9 != '') 
						{
							echo "<li>
									<a href='#' data-image='".Yii::app()->request->baseUrl."/".$product_photo9."' data-zoom-image='".Yii::app()->request->baseUrl."/".$product_photo9."'>
										<img src='".Yii::app()->request->baseUrl."/".$product_photo9."' alt=''/>
									</a>
								</li>";
						}
						if ($product_photo10 != '') 
						{
							echo "<li>
									<a href='#' data-image='".Yii::app()->request->baseUrl."/".$product_photo10."' data-zoom-image='".Yii::app()->request->baseUrl."/".$product_photo10."'>
										<img src='".Yii::app()->request->baseUrl."/".$product_photo10."' alt=''/>
									</a>
								</li>";
						}
						?>
					</ul>
				</div>
			</div>
          <div class="product-info col-sm-6">
            <div class="product-info__title">
              <h2><?php echo $product_title;?></h2>
              
            </div>
            
            <?php if($product_promotion_price!=""){?>
				<div class="price-box product-info__price"><span class="price-box__new">RM<?php echo number_format($product_promotion_price,2);?></span> <span class="price-box__old">RM<?php echo number_format($product_price,2);?></span></div>
			<?php } else{?>
				<div class="price-box product-info__price"><span class="price-box">RM<?php echo number_format($product_price,2);?></span></div>
			<?php }?>
            <div class="divider divider--xs product-info__divider"></div>
            <div class="product-info__description">
				<div style="font-size:16px:"><b>Description :</b></div>
				<?php echo $product_description;?>
				<?php if($product_importantinfo!=""){?>
				<br/><br/>
				<div style="font-size:16px:"><b>Important Info :</b></div>
				<font style="color:#ff0022"><?php echo $product_importantinfo;?></font>
				<?php }?>
			</div>
            
            
			 <div style="background-color:#f5f6f7;padding:20px;border-top:2px solid #cccccc;border-bottom:2px solid #cccccc;">
                        <h2>Participate Lucky Draw</h2>
						<?php
							include("js/databaseconnection.php");
							$queryALLparticipate="Select * FROM luckydraw WHERE luckydraw_status='Confirmed' and luckydraw_productid=$product_id";
							$resultALLparticipate=mysql_query($queryALLparticipate);
							$totalamountparticipate=0;
							while($rowALLparticipate=mysql_fetch_array($resultALLparticipate)){
								$luckydraw_amount=$rowALLparticipate['luckydraw_amount'];
								$totalamountparticipate=$totalamountparticipate+$luckydraw_amount;
							}
						?>
                                <h4>D-Coins: <b><?php echo number_format($totalamountparticipate);?>/<?php echo number_format($product_coin);?></b></h4>
								
						<?php if(!Yii::app()->user->isGuest){?>
                         
							<?php
						   $myusercoin=Yii::app()->user->usercoin;
							if($myusercoin==0){
							   echo "<br/><i>No more D-coins in your account<br/>";
							   echo "Please ";
							   echo CHtml::link("top up",  array('site/package'),array('class'=>'bluelink'));
							   echo " your D-coins before procced to lucky draw participation.</i> ";
						   } else{
							?>
							<?php echo "<div style='margin-bottom:8px'>Your D-Coin Balance: $myusercoin</div>";?>
							<div class="outer">
							   <?php echo $this->renderPartial('/luckydraw/_form', array('model'=>$model1)); ?>
							
							</div>
							<?php }?>
							
							<?php echo "<div style='margin-top:15px;margin-bottom:5px'>Your Lucky Draw No.:</div>";?>
							<?php
							
							$myid=Yii::app()->user->id;
							$queryMyparticipate="Select * FROM luckydraw WHERE luckydraw_status='Confirmed' and luckydraw_productid=$product_id and luckydraw_userid=$myid";
							$resultMyparticipate=mysql_query($queryMyparticipate);
							$rowcountMyparticipate=mysql_num_rows($resultMyparticipate);
							
							if($rowcountMyparticipate==0){
								echo "<i>No participation record found.</i>";
							} else{
								$totalMyparticipate=0;
								while($rowMyparticipate=mysql_fetch_array($resultMyparticipate)){
									$Myluckydraw_amount=$rowMyparticipate['luckydraw_amount'];
									$totalMyparticipate=$totalMyparticipate+$Myluckydraw_amount;
									$Myluckydraw_id=$rowMyparticipate['luckydraw_id'];
									
									$queryMycode="Select * FROM luckydraw_code WHERE luckydraw_id='$Myluckydraw_id'";
									$resultMycode=mysql_query($queryMycode);
									while($rowMycode=mysql_fetch_array($resultMycode)){
										$lcode_id=$rowMycode['lcode_id'];
										
										$countchar=strlen($lcode_id);
										if($countchar==1){$lcode_id="000".$lcode_id;}
										else if($countchar==2){$lcode_id="00".$lcode_id;}
										else if($countchar==3){$lcode_id="0".$lcode_id;}
										else{$lcode_id=$lcode_id;}
										
										echo "<div style='float:left;padding-right:20px !important;font-size:14px'><b>$lcode_id</b></div>";
									}
									
								}
							}
							echo "<div style='clear:both'></div>";
							;?>
						 
						 <?php } else{?>
						 <i>Please
						<?php echo CHtml::link("<u style='color:#536dfe'>Sign In</u>",  array('site/login'));?> or
						<?php echo CHtml::link("<u style='color:#536dfe'>Register</u>",  array('user/register'));?> 
						an account in order to participate in lucky draw or direct buy section.</i>
						 <?php }?>
                </div>
			<?php if(!Yii::app()->user->isGuest){?>
            <div class="divider divider--xs"></div>
            <h2>Normal Buy</h2>
            <label>Quantity:</label>
            <div class="outer">
              <div class="input-group-qty pull-left"> <span class="pull-left"> </span>
                <input type="text" id='product_quant' name="quant[1]" class="input-number input--wd input-qty pull-left" value="1" min="1" max="100">
                <span class="pull-left btn-number-container">
                <button type="button" class="btn btn-number btn-number--plus" data-type="plus" data-field="quant[1]"> + </button>
                <button type="button" class="btn btn-number btn-number--minus" disabled="disabled" data-type="minus" data-field="quant[1]"> &#8211; </button>
                </span> </div>
              <div class="pull-left">
                <!-- <button class="btn btn--wd text-uppercase">Add to Cart</button> -->
                <?php echo CHtml::ajaxButton(
				    'Add to Cart',
				    array('product/addCart'),
				    array('type'=>'GET',                                                                                    
	                      'data'=>array('quantity'=>'js:$("#product_quant").val()','product_id'=>$product_id),    
	                      'success'=>'function(response){                                             
	                                $("#cart-noti-num").html(response);
	                      }',
	                      'fail'=>'function(response){                                             
	                                console.log(response);
	                      }'                              
	                ),  
				    //array('success' => 'js:addCart($("#product_quant").val(), $product_id)'),
				    array('class'=>'btn btn--wd text-uppercase') // jQuery selector
				);?>
              </div>
              
            </div>
			<?php }?>
            
            
            
               
          </div>
        </div>
      </div>
    </section>
	
	<section class="content content--fill">
      <div class="container"> 
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-tabs--wd" role="tablist">
          <li class="active"><a href="#Tab1" aria-controls="home" role="tab" data-toggle="tab" class="text-uppercase">DESCRIPTION</a></li>
		   <li><a href="#Tab2" role="tab" data-toggle="tab" class="text-uppercase">IMPORTANT INFO</a></li>
		   <li><a href="#Tab3" role="tab" data-toggle="tab" class="text-uppercase">LUCKY DRAW PARTICIPANT</a></li>
         
         
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content tab-content--wd">
          <div role="tabpanel" class="tab-pane active" id="Tab1">
            <p><?php echo $product_description;?></p>
            
            
          </div>
		  <div role="tabpanel" class="tab-pane" id="Tab2">
            <p><?php echo $product_importantinfo;?></p>
            
            
          </div>
		  <div role="tabpanel" class="tab-pane" id="Tab3">
			<h4>D-Coins: <b><?php echo number_format($totalamountparticipate);?>/<?php echo number_format($product_coin);?></b></h4>
			<h4>Participant(s):</h4>
			<div class="row">
            <?php
				$queryALLparticipate="Select * FROM luckydraw WHERE luckydraw_status='Confirmed' and luckydraw_productid=$product_id GROUP BY luckydraw_userid";
				$resultALLparticipate=mysql_query($queryALLparticipate);
				
				while($rowALLparticipate=mysql_fetch_array($resultALLparticipate)){
					$luckydraw_amount=$rowALLparticipate['luckydraw_amount'];
					$luckydraw_userid=$rowALLparticipate['luckydraw_userid'];
						$totalamountparticipatesingle=0;
						$queryCALCULATE="Select * FROM luckydraw WHERE luckydraw_status='Confirmed' and luckydraw_productid=$product_id and luckydraw_userid=$luckydraw_userid";
						$resultCALCULATE=mysql_query($queryCALCULATE);
						while($rowCALCULATE=mysql_fetch_array($resultCALCULATE)){
							$luckydraw_amount_single=$rowCALCULATE['luckydraw_amount'];
							$totalamountparticipatesingle=$totalamountparticipatesingle+$luckydraw_amount_single;
						}
				
						$queryFDE="Select * FROM user WHERE user_id='$luckydraw_userid'";		
						$resultFDE=mysql_query($queryFDE);
						while($rowFDE=mysql_fetch_array($resultFDE)){
							$fuser_id=$rowFDE['user_id'];
							$fuser_firstname=$rowFDE['user_firstname'];
							$fuser_lastname=$rowFDE['user_lastname'];
							$fuser_photo=$rowFDE['user_photo'];
							if($fuser_photo==""){$fuser_photo="images/nophoto.jpg";}
							echo "";
			?>
					<div class='col-md-2'>
						<div style="height:150px;overflow:hidden">
							<?php echo CHtml::link("<img src='$burl/$fuser_photo' width='100%'/>",  array('user/friendprofile','id'=>$fuser_id));?> 
						</div>
						<div style="font-size:16px;margin-top:8px;">
							<?php echo CHtml::link("$fuser_firstname $fuser_lastname",  array('user/friendprofile','id'=>$fuser_id));?> 
						</div>
						<div style="margin-bottom:15px;color:#aaaaaa"><i><?php echo $totalamountparticipatesingle;?> entries</i></div>
					</div>
					
			<?php
						}
				}
			?>
			</div>
            
            
          </div>
          
          
          
        </div>
      </div>
    </section>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/jquery/jquery.js"></script> 
<!-- Bootstrap 3--> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/bootstrap/bootstrap.min.js"></script> 
<!-- Specific Page Vendor --> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/waves/waves.min.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/slick/slick.min.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/bootstrap-select/bootstrap-select.min.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/parallax/jquery.parallax-1.1.3.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/waypoints/jquery.waypoints.min.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/waypoints/sticky.min.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/doubletaptogo/doubletaptogo.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/elevatezoom/jquery.elevatezoom.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script> 
<!-- Magnific Popup core JS file --> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script> <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/countdown/jquery.plugin.min.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/countdown/jquery.countdown.min.js"></script> 
