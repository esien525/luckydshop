<?php
$this->breadcrumbs=array(
	'Add Carts'=>array('index'),
	$model->ac_id,
);

$this->menu=array(
	array('label'=>'List AddCart', 'url'=>array('index')),
	array('label'=>'Create AddCart', 'url'=>array('create')),
	array('label'=>'Update AddCart', 'url'=>array('update', 'id'=>$model->ac_id)),
	array('label'=>'Delete AddCart', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ac_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AddCart', 'url'=>array('admin')),
);
?>

<h1>View AddCart #<?php echo $model->ac_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ac_id',
		'ac_cart_id',
		'ac_product_id',
		'ac_quantity',
		'ac_amount',
	),
)); ?>
