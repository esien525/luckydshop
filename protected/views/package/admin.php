<?php include("js/side_opening.php");?>
<div style="float:right"><?php echo CHtml::link('<button class="btn btn--wd btn--with-icon btn--sm wave">+ Create New Package</button>',  array('create')); ?></div>

<h4 class="pagestitle">D-Coin Packages Management</h4>

<br/>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'package-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'package_id',
		'package_name',
		'package_price_normal',
		'package_price_promotion',
		'package_coin_amount',
		'package_status',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
			'htmlOptions'=>array(
                'width'=>'80',
                'style'=>'text-align:center',
             ),
		),
	),
)); ?>



<?php include("js/side_closing.php");?>