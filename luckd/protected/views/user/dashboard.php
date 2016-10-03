<?php include("js/cpanel_side_opening.php");
include("js/databaseconnection.php");?>
<div class="cpanel_holder">
	<table style="margin-bottom:5px">
		<tr>
			<td width="16px"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/dashboard.png" height="22px"/></td>
			<td><h26><big>Dashboard</big></h26></td>
		</tr>
	</table>
	
	<p style="padding:0px 5px">
		
	</p>
	
<?php
$myuserlevel=Yii::app()->user->usertype;
if($myuserlevel=="Supplier"){
?>	 
	<?php
		$myid=Yii::app()->user->id;
		$queryProduct="Select * FROM product WHERE product_user_id=$myid";
		$resultProduct=mysql_query($queryProduct);
		$num_rows_Product = mysql_num_rows($resultProduct);
		
		$queryService="Select * FROM service WHERE service_user_id=$myid";
		$resultService=mysql_query($queryService);
		$num_rows_Service = mysql_num_rows($resultService);


	?>
	<table class="table_nomargin">
		<tr>
			
			<td style="width:50%">
				<div style="text-align:right;padding-right:12px">
					<?php echo CHtml::link('+ Post New Product',  array('product/create'),array('class'=>'link_style1')); ?>
				</div>
				<div style="border-top:1px solid #dddddd;padding-top:15px">
						
					<div class="cpanel_title1">Posted Products</div>
					<div class="cpanel_title2" style="line-height:38px">
						<?php echo number_format($num_rows_Product);?>
						<?php
							$product_posted_time="0000-00-00 00:00:00";
							$queryProduct1="Select * FROM product WHERE product_user_id=$myid Order by product_id DESC LIMIT 1";
							$resultProduct1=mysql_query($queryProduct1);
							while($rowProduct1=mysql_fetch_array($resultProduct1)){
								$product_posted_time=$rowProduct1['product_posted_time'];
							}
							
						?>
					</div>
					<div class="cpanel_title3" style="color:#000000;"><i>
						<?php if($num_rows_Product==0){ echo"No posted product<br/>";}else{?>
						<?php echo "latest motorcycle posted on $product_posted_time";?>
						<?php }?>
						
					</div>
				</div>
				<div class="cpanel_color2_bottom2">
					<?php echo CHtml::link('<small>manage poosted products ></small>',  array('product/manageproduct'),array('class'=>'cpanel_link')); ?>
				</div>
			</td>
			<td style="padding:0px"></td>
			<td style="width:50%">
				<div style="text-align:right;padding-right:12px">
					<?php echo CHtml::link('+ Post New Service',  array('service/create'),array('class'=>'link_style1')); ?>
				</div>
				<div style="border-top:1px solid #dddddd;padding-top:15px">
					<div class="cpanel_title1">Posted Services</div>
					<div class="cpanel_title2" style="line-height:38px">
							<?php echo number_format($num_rows_Service);?>
							<?php
							$service_posted_time="0000-00-00 00:00:00";
							$queryService1="Select * FROM service WHERE service_user_id=$myid Order by service_id DESC LIMIT 1";
							$resultService1=mysql_query($queryService1);
							while($rowService1=mysql_fetch_array($resultService1)){
								$service_posted_time=$rowService1['service_posted_time'];
							}
							
						?>
					</div>
					<div class="cpanel_title3" style="color:#000000;"><i>
							<?php if($num_rows_Service==0){ echo"No posted service<br/>";}else{?>
							<?php echo "latest accessories posted on $service_posted_time";?>
							<?php }?>
					</i></div>
				</div>
				<div class="cpanel_color2_bottom2">
					<?php echo CHtml::link('<small>manage posted services ></small>',  array('service/manageservice'),array('class'=>'cpanel_link')); ?>
				</div>
			</td>
		</tr>
	</table>
	<br/><hr/><br/>
	<h22>Customer Placed Order (Product)</h22>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'order-grid',
		'dataProvider'=>$model->searchsuppproduct(),
		//'filter'=>$model,
		'columns'=>array(
			array(
				'name'  => 'order_id',
				'htmlOptions'=>array('style'=>'text-align: center'),
				'type'  => 'raw',
			),
			array(
				'name'  => 'order_ps_id',
				'htmlOptions'=>array('style'=>'text-align: left'),
				'value' => '$data->getproduct($data->order_ps_id,$data->order_ps_type)',
				'type'  => 'raw',
			),
			array(
				'name'  => 'order_total_price',
				'htmlOptions'=>array('style'=>'text-align: center'),
				'type'  => 'raw',
			),
			array(
				'name'  => 'order_datetime',
				'htmlOptions'=>array('style'=>'text-align: center'),
				'type'  => 'raw',
			),
			array(
				'name'  => 'order_status',
				'htmlOptions'=>array('style'=>'text-align: center'),
				'type'  => 'raw',
			),
			
			array(
				'class'=>'CButtonColumn',
				'template'=>'{view}',
				'buttons'=>array(
					'view'=>array(
					'url'=>'$this->grid->controller->createUrl("/order/view", array("id"=>$data->primaryKey))',
					),
				),
			),
		),
	)); ?>
	
	<br/><hr/><br/>
	<h22>Customer Placed Order (Service)</h22>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'order-grid',
		'dataProvider'=>$model->searchsuppservice(),
		//'filter'=>$model,
		'columns'=>array(
			array(
				'name'  => 'order_id',
				'htmlOptions'=>array('style'=>'text-align: center'),
				'type'  => 'raw',
			),
			array(
				'name'  => 'order_ps_id',
				'htmlOptions'=>array('style'=>'text-align: left'),
				'value' => '$data->getproduct($data->order_ps_id,$data->order_ps_type)',
				'type'  => 'raw',
			),
			array(
				'name'  => 'order_total_price',
				'htmlOptions'=>array('style'=>'text-align: center'),
				'type'  => 'raw',
			),
			array(
				'name'  => 'order_datetime',
				'htmlOptions'=>array('style'=>'text-align: center'),
				'type'  => 'raw',
			),
			array(
				'name'  => 'order_status',
				'htmlOptions'=>array('style'=>'text-align: center'),
				'type'  => 'raw',
			),
			
			array(
				'class'=>'CButtonColumn',
				'template'=>'{view}',
				'buttons'=>array(
					'view'=>array(
					'url'=>'$this->grid->controller->createUrl("/order/view", array("id"=>$data->primaryKey))',
					),
				),
			),
		),
	)); ?>
	
	
<?php } else{ ?>

	<h22>Your Order Tracking</h22>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'order-grid',
		'dataProvider'=>$model->searchown(),
		//'filter'=>$model,
		'columns'=>array(
			array(
				'name'  => 'order_id',
				'htmlOptions'=>array('style'=>'text-align: center'),
				'type'  => 'raw',
			),
			array(
				'name'  => 'order_ps_id',
				'htmlOptions'=>array('style'=>'text-align: left'),
				'value' => '$data->getproduct($data->order_ps_id,$data->order_ps_type)',
				'type'  => 'raw',
			),
			array(
				'name'  => 'order_total_price',
				'htmlOptions'=>array('style'=>'text-align: center'),
				'type'  => 'raw',
			),
			array(
				'name'  => 'order_datetime',
				'htmlOptions'=>array('style'=>'text-align: center'),
				'type'  => 'raw',
			),
			array(
				'name'  => 'order_status',
				'htmlOptions'=>array('style'=>'text-align: center'),
				'type'  => 'raw',
			),
			
			array(
				'class'=>'CButtonColumn',
				'template'=>'{view}',
				'buttons'=>array(
					'view'=>array(
					'url'=>'$this->grid->controller->createUrl("/order/view", array("id"=>$data->primaryKey))',
					),
				),
			),
		),
	)); ?>
<?php }?>
</div>
		
<?php include("js/cpanel_side_closing.php");?>