<section class="content" id="slider"> 
      
      <!-- Slider section --> 
      
      <!--
	#################################
		- THEMEPUNCH BANNER -
	#################################
	--> 
      <!-- START REVOLUTION SLIDER 3.1 rev5 fullwidth mode -->
      
      <div class="tp-banner-container">
        <div class="tp-banner" >
          <ul>
			<?php
			include("js/databaseconnection.php");
			
			$burl=Yii::app()->request->baseUrl;
			$queryBanner="Select * FROM banner WHERE banner_location='Home Page' ORDER BY banner_order";
			$resultBanner=mysql_query($queryBanner);
			
			while($rowBanner=mysql_fetch_array($resultBanner)){
				
				$banner_id=$rowBanner['banner_id'];
				$banner_photo=$rowBanner['banner_photo'];
				$banner_title=$rowBanner['banner_title'];
				$banner_description=$rowBanner['banner_description'];
				$banner_link=$rowBanner['banner_link'];
				$banner_order=$rowBanner['banner_order'];
				$banner_language=$rowBanner['banner_language'];
			?>
			<!-- SLIDE  -->
            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide"> 
              <!-- MAIN IMAGE --> 
              <img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $banner_photo;?>"  alt="slide1"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
              <!-- LAYERS --> 
              
              <!-- LAYER NR. 4 -->
              <div class="tp-caption lfb ltt" 
			data-x="center" 
			data-y="center"  
            data-voffset="160" 
			data-speed="600" 
			data-start="1100" 
			data-easing="Power4.easeOut" 
			data-endeasing="Power4.easeIn" 
			style="z-index: 4;"><a href="<?php echo $banner_link;?>" class="btn btn--wd btn--xl">SHOP NOW</a> </div>
            </li>
			<?php
			}
					
			?>
            
            
            
          </ul>
        </div>
        <div class="scroll-to-content hidden-xs"> <a href="#" class="btn btn--round btn--round--lg"><span class="icon icon-arrow-down"></span></a></div>
      </div>
    </section>
    
    <!-- END REVOLUTION SLIDER --> 
    
    <!-- End Slider section --> 
    <!-- Content section -->
     <?php
			include("js/databaseconnection.php");
			
			$queryProductF="Select * FROM product WHERE product_status='Active' and  product_featured='Yes'";		
			//$queryProductF="Select * FROM product WHERE product_status='Active'";
			$resultProductF=mysql_query($queryProductF);
			$num_rowsProductF = mysql_num_rows($resultProductF);
			if($num_rowsProductF>0){
				
		?>
    <section class="content">
      <div class="container"> 
        
        <!-- Modal -->
        <div class="modal quick-view zoom" id="quickView"  style="opacity: 1">
          <div class="modal-dialog">
			<div id="modalLoader-wrapper"><div id="modalLoader"></div></div>
            <div class="modal-content">
			</div>
          </div>
        </div>
        <!-- /.modal -->
        
        <h2 class="text-center text-uppercase">Featured Products</h2>
        <div class="row product-carousel mobile-special-arrows animated-arrows product-grid four-in-row">
			<?php
			while($rowProductF=mysql_fetch_array($resultProductF)){
				$product_id=$rowProductF['product_id'];
				$product_title=$rowProductF['product_title'];
				$product_description=$rowProductF['product_description'];
				$product_importantinfo=$rowProductF['product_importantinfo'];
				$product_photo=$rowProductF['product_photo'];
				$product_price=$rowProductF['product_price'];
				$product_promotion_price=$rowProductF['product_promotion_price'];
				$product_coin=$rowProductF['product_coin']; 
				$product_allow_groupbuy=$rowProductF['product_allow_groupbuy'];
				$product_start_date=$rowProductF['product_start_date'];
				$product_end_date=$rowProductF['product_end_date'];
				$product_status=$rowProductF['product_status'];
				$product_luckydraw_status=$rowProductF['product_luckydraw_status'];
				$product_featured=$rowProductF['product_featured'];
				$product_posted_date=$rowProductF['product_posted_date'];
				$product_posted_by=$rowProductF['product_posted_by'];
				
			?>
          <div class="product-preview-wrapper">
            <div class="product-preview">
              <div class="product-preview__image"><?php echo CHtml::link("<img src='$burl/$product_photo' data-lazy='$burl/$product_photo'/>",  array('product/index','id'=>$product_id)); ?></div>
              <div class="product-preview__label product-preview__label--left product-preview__label--sale"><span>HOT!</span></div>
              <div class="product-preview__info text-center">
                <div class="product-preview__info__title">
                  <h2><?php echo CHtml::link("$product_title",  array('product/index','id'=>$product_id)); ?></h2>
                </div>
				<div class="price-box">0/<?php echo number_format($product_coin);?> D-Coins</div>
                
              </div>
            </div>
          </div>
		  <?php }?>
          
        </div>
      </div>
    </section>
	<?php }?>
	<?php
		$datenow=date("Y-m-d H:i:s");
		$queryProductLatest="Select * FROM product WHERE product_start_date<='$datenow' and  product_end_date>='$datenow' ORDER by product_start_date DESC LIMIT 12";		
		$resultProductLatest=mysql_query($queryProductLatest);
		$num_rowsProductLatest = mysql_num_rows($resultProductLatest);
		if($num_rowsProductLatest>0){
	?>
	<section class="content">
		<div class="container">
			<!-- Modal -->
			<div class="modal quick-view zoom" id="quickView"  style="opacity: 1">
				<div class="modal-dialog">
					<div class="modal-content"> </div>
				</div>
			</div>
			<!-- /.modal -->
			 <h2 class="text-center text-uppercase">Latest Products</h2>
			<div class="row  product-grid four-in-row">
				<?php
					
					
					while($rowProductLatest=mysql_fetch_array($resultProductLatest)){
						$Lproduct_id=$rowProductLatest['product_id'];
						$Lproduct_title=$rowProductLatest['product_title'];
						$Lproduct_description=$rowProductLatest['product_description'];
						$Lproduct_importantinfo=$rowProductLatest['product_importantinfo'];
						$Lproduct_photo=$rowProductLatest['product_photo'];
						$Lproduct_price=$rowProductLatest['product_price'];
						$Lproduct_promotion_price=$rowProductLatest['product_promotion_price'];
						$Lproduct_coin=$rowProductLatest['product_coin']; 
						$Lproduct_allow_groupbuy=$rowProductLatest['product_allow_groupbuy'];
						$Lproduct_start_date=$rowProductLatest['product_start_date'];
						$Lproduct_end_date=$rowProductLatest['product_end_date'];
						$Lproduct_status=$rowProductLatest['product_status'];
						$Lproduct_luckydraw_status=$rowProductLatest['product_luckydraw_status'];
						$Lproduct_featured=$rowProductLatest['product_featured'];
						$Lproduct_posted_date=$rowProductLatest['product_posted_date'];
						$Lproduct_posted_by=$rowProductLatest['product_posted_by'];
						
				?>
		
				<div class="product-preview-wrapper">
					<div class="product-preview">
					  <div class="product-preview__image">
						<?php echo CHtml::link("<img src='$burl/$Lproduct_photo' data-lazy='$burl/$Lproduct_photo'/>",  array('product/index','id'=>$Lproduct_id)); ?>
					  </div>
					  <div class="product-preview__label product-preview__label--left product-preview__label--new"><span>new</span></div>
					  
					  <div class="product-preview__info text-center">
						<div class="product-preview__info__title">
						  <h2><?php echo CHtml::link("$Lproduct_title",  array('product/index','id'=>$Lproduct_id)); ?></h2>
						</div>
						<div class="price-box">0/<?php echo number_format($Lproduct_coin);?> D-Coins</div>
					  </div>
					</div>
				</div>
				<?php }?>
				
				
				
			</div>
		</div>
	</section>
	<?php }?>
	
	<?php
		$queryProductOpening="Select * FROM product WHERE product_luckydraw_status='Opening'";		
		$resultProductOpening=mysql_query($queryProductOpening);
		$num_rowsProductOpening = mysql_num_rows($resultProductOpening);
		if($num_rowsProductOpening>0){
	?>
	<section class="content">
      <div class="container"> 
        
        <!-- Modal -->
        <div class="modal quick-view zoom" id="quickView"  style="opacity: 1">
          <div class="modal-dialog">
			<div id="modalLoader-wrapper"><div id="modalLoader"></div></div>
            <div class="modal-content">
			</div>
          </div>
        </div>
        <!-- /.modal -->
        
        <h2 class="text-center text-uppercase">Opening Soon</h2>
        <div class="row product-carousel mobile-special-arrows animated-arrows product-grid four-in-row">
			<?php
			while($rowProductOpening=mysql_fetch_array($resultProductOpening)){
				$Oproduct_id=$rowProductOpening['product_id'];
				$Oproduct_title=$rowProductOpening['product_title'];
				$Oproduct_description=$rowProductOpening['product_description'];
				$Oproduct_importantinfo=$rowProductOpening['product_importantinfo'];
				$Oproduct_photo=$rowProductOpening['product_photo'];
				$Oproduct_price=$rowProductOpening['product_price'];
				$Oproduct_promotion_price=$rowProductOpening['product_promotion_price'];
				$Oproduct_coin=$rowProductOpening['product_coin']; 
				$Oproduct_allow_groupbuy=$rowProductOpening['product_allow_groupbuy'];
				$Oproduct_start_date=$rowProductOpening['product_start_date'];
				$Oproduct_end_date=$rowProductOpening['product_end_date'];
				$Oproduct_status=$rowProductOpening['product_status'];
				$Oproduct_luckydraw_status=$rowProductOpening['product_luckydraw_status'];
				$Oproduct_featured=$rowProductOpening['product_featured'];
				$Oproduct_posted_date=$rowProductOpening['product_posted_date'];
				$Oproduct_posted_by=$rowProductOpening['product_posted_by'];
				
			?>
          <div class="product-preview-wrapper">
            <div class="product-preview">
              <div class="product-preview__image">
				<?php echo CHtml::link("<img src='$burl/$Oproduct_photo' data-lazy='$burl/$Oproduct_photo'/>",  array('product/index','id'=>$Oproduct_id)); ?>
				
			  </div>
              
              <div class="product-preview__info text-center">
                <div class="product-preview__info__btns"><a href="#" class="btn btn--round ajax-to-cart"><span class="icon-ecommerce"></span></a> <a href="#" class="btn btn--round btn--dark btn-quickview"><span class="icon icon-eye"></span></a>
						
				</div>
                <div class="product-preview__info__title">
                  <h2><?php echo CHtml::link("$Oproduct_title",  array('product/index','id'=>$Oproduct_id)); ?></h2>
                </div>
                <div class="price-box"><?php echo number_format($Oproduct_coin);?>/<?php echo number_format($Oproduct_coin);?> D-Coins</div>
              </div>
            </div>
          </div>
		  <?php }?>
          
          
        </div>
      </div>
    </section>
	<?php }?>
	
    <!-- End Content section --> 