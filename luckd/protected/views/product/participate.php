<?php
$totalamountparticipate=0;
	$burl=Yii::app()->request->baseUrl;
	$product_id=$model->product_id;
	$product_title=$model->product_title;
	$product_description=$model->product_description;   $product_description= str_replace("\n", "<br />",$product_description);
	$product_importantinfo=$model->product_importantinfo;   $product_importantinfo= str_replace("\n", "<br />",$product_importantinfo);
	$product_photo=$model->product_photo;
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
          <div class="col-sm-6 hidden-xs">
             <div class="product-main-image">
				<div class="product-main-image__item"><img  src='<?php echo $burl;?>/<?php echo $product_photo;?>' data-zoom-image="<?php echo $burl;?>/<?php echo $product_photo;?>"/></div>
              
            </div>
            
            <div class="modal fade zoom" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">✕ </button>
                    <div>
                      <iframe width="100%" height="350" src=""></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="product-info col-sm-6">
            <div class="product-info__title">
              <h2><?php echo $product_title;?></h2>
              
            </div>
            
            
			 <div style="background-color:#f5f6f7;padding:20px;border-top:2px solid #cccccc;border-bottom:2px solid #cccccc;">
                        <h2>Participation Confirmation</h2>
                                
								
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
                         <?php
						$usedcoin=$model1->luckydraw_amount;
						 
						 ?>
						 <div class="outer">
							<h4 style="padding-bottom:15px">You selected <b style='color:#ff0022'><?php echo $usedcoin;?> coin(s)</b> to join this lucky draw</h4>
							<?php echo $this->renderPartial('/luckydraw/_formconfirm', array('model'=>$model1)); ?>
                          
						   
                           
                         </div>
						 <?php }?>
						 <?php } else{?>
						 <i>Please
						<?php echo CHtml::link("<u style='color:#536dfe'>Sign In</u>",  array('site/login'));?> or
						<?php echo CHtml::link("<u style='color:#536dfe'>Register</u>",  array('user/register'));?> 
						an account in order to participate in lucky draw or direct buy section.</i>
						 <?php }?>
                </div>
               
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
