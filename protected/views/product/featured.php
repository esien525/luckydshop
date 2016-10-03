<!-- Breadcrumb section -->
<section class="breadcrumbs  hidden-xs">
	<div class="container">
		<ol class="breadcrumb breadcrumb--wd pull-left">
			<li><?php echo CHtml::link("Home",  array('site/index')); ?></li>
			<li class="active">Featured Products</li>
		</ol>
	</div>
</section>
<!-- Content section -->
<section class="content top-null">
	<div class="container">
		<div class="category-outer">
			<div class="category-slider single-slider">
				<ul>
					<?php
					include("js/databaseconnection.php");
					$queryBanner="Select * FROM banner WHERE banner_location='Featured Product Page' ORDER BY banner_order";
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
					<li><img src="<?php echo Yii::app()->request->baseUrl;?>/<?php echo $banner_photo;?>" alt="" /></li>
					<?php }?>
				</ul>
			</div>
			<div class="category-outer__text">
				<h2 class="category-outer__text__title text-uppercase">Featured Products</h2>
				
			</div>
		</div>
	</div>
</section>
<section class="content" style="margin-top:-50px">
					<div class="container">
								<!-- Modal -->
								<div class="modal quick-view zoom" id="quickView"  style="opacity: 1">
									<div class="modal-dialog">
										<div class="modal-content"> </div>
									</div>
								</div>
								<!-- /.modal -->
								<div class="products-grid  four-in-row">
									<?php $this->widget('zii.widgets.CListView', array(
										'dataProvider'=>$dataProvider,
										'itemView'=>'_view',
									)); ?>
								</div>
							</div>
						
				</section>

