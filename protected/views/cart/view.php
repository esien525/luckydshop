<?php
$this->breadcrumbs=array(
	'Carts'=>array('index'),
	$model->cart_id,
);

$this->menu=array(
	array('label'=>'List Cart', 'url'=>array('index')),
	array('label'=>'Create Cart', 'url'=>array('create')),
	array('label'=>'Update Cart', 'url'=>array('update', 'id'=>$model->cart_id)),
	array('label'=>'Delete Cart', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cart_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cart', 'url'=>array('admin')),
);
?>

<h1>View Cart #<?php echo $model->cart_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cart_id',
		'cart_user',
		'cart_status',
		'cart_total_amount',
		'cart_payment_status',
		'cart_payment_refno',
		'cart_payment_remark',
		'cart_payment_time',
	),
)); ?>