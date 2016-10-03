<?php
$this->breadcrumbs=array(
	'Add Carts'=>array('index'),
	$model->ac_id=>array('view','id'=>$model->ac_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AddCart', 'url'=>array('index')),
	array('label'=>'Create AddCart', 'url'=>array('create')),
	array('label'=>'View AddCart', 'url'=>array('view', 'id'=>$model->ac_id)),
	array('label'=>'Manage AddCart', 'url'=>array('admin')),
);
?>

<h1>Update AddCart <?php echo $model->ac_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>