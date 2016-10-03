<?php
$this->breadcrumbs=array(
	'Friends'=>array('index'),
	$model->friend_id,
);

$this->menu=array(
	array('label'=>'List Friend', 'url'=>array('index')),
	array('label'=>'Create Friend', 'url'=>array('create')),
	array('label'=>'Update Friend', 'url'=>array('update', 'id'=>$model->friend_id)),
	array('label'=>'Delete Friend', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->friend_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Friend', 'url'=>array('admin')),
);
?>

<h1>View Friend #<?php echo $model->friend_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'friend_id',
		'friend_from_id',
		'friend_to_id',
		'friend_datetime',
		'friend_status',
	),
)); ?>
