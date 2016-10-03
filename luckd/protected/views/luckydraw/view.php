<?php
$this->breadcrumbs=array(
	'Luckydraws'=>array('index'),
	$model->luckydraw_id,
);

$this->menu=array(
	array('label'=>'List Luckydraw', 'url'=>array('index')),
	array('label'=>'Create Luckydraw', 'url'=>array('create')),
	array('label'=>'Update Luckydraw', 'url'=>array('update', 'id'=>$model->luckydraw_id)),
	array('label'=>'Delete Luckydraw', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->luckydraw_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Luckydraw', 'url'=>array('admin')),
);
?>

<h1>View Luckydraw #<?php echo $model->luckydraw_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'luckydraw_id',
		'luckydraw_refno1',
		'luckydraw_refno2',
		'luckydraw_userid',
		'luckydraw_amount',
		'luckydraw_datetime',
		'luckydraw_status',
	),
)); ?>
