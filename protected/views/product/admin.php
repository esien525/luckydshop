<?php include("js/side_opening.php");?>
<div style="float:right"><?php echo CHtml::link('<button class="btn btn--wd btn--with-icon btn--sm wave">+ Create New Product</button>',  array('create')); ?></div>

<h4 class="pagestitle">Products Management</h4>

<br/>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'product-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'product_id',
		//'product_photo',
		array( 'name'=>'product_photo', 'type' => 'raw', 'value' => 'CHtml::image("../$data->product_photo","",array("style"=>"width:100px;"))','htmlOptions'=>array('width'=>'100')),
		'product_title',
		//'product_description',
		//'product_importantinfo',
		'product_price',
		'product_promotion_price',
		'product_coin',
		/*
		'product_allow_groupbuy',
		'product_start_date',
		'product_end_date',
		'product_status',
		'product_luckydraw_status',
		'product_featured',
		'product_posted_date',
		'product_posted_by',
		*/
		array(
			'class'=>'CButtonColumn',
			'htmlOptions'=>array(
                'width'=>'80',
                'style'=>'text-align:center',
             ),
		),
	),
)); ?>




<?php include("js/side_closing.php");?>