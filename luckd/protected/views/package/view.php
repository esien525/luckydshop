<?php
$this->breadcrumbs=array(
	'Packages'=>array('index'),
	$model->package_id,
);

$this->menu=array(
	array('label'=>'List Package', 'url'=>array('index')),
	array('label'=>'Create Package', 'url'=>array('create')),
	array('label'=>'Update Package', 'url'=>array('update', 'id'=>$model->package_id)),
	array('label'=>'Delete Package', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->package_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Package', 'url'=>array('admin')),
);
?>

<h1>View Package #<?php echo $model->package_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'package_id',
		'package_name',
		'package_price_normal',
		'package_price_promotion',
		'package_coin_amount',
		'package_status',
	),
)); ?>
