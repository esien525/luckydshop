<?php
$this->breadcrumbs=array(
	'Luckydraws'=>array('index'),
	$model->luckydraw_id=>array('view','id'=>$model->luckydraw_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Luckydraw', 'url'=>array('index')),
	array('label'=>'Create Luckydraw', 'url'=>array('create')),
	array('label'=>'View Luckydraw', 'url'=>array('view', 'id'=>$model->luckydraw_id)),
	array('label'=>'Manage Luckydraw', 'url'=>array('admin')),
);
?>

<h1>Update Luckydraw <?php echo $model->luckydraw_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>