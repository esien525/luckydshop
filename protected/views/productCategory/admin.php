<?php include("js/side_opening.php");?>
<div style="float:right"><?php echo CHtml::link('<button class="btn btn--wd btn--with-icon btn--sm wave">+ Create New Product Category</button>',  array('create')); ?></div>

<h4 class="pagestitle">Product Categories Management</h4>

<br/>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'product-category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cat_name',
		'cat_name_cn',
		'cat_name_bm',
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