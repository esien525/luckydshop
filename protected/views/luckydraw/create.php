<?php
$this->breadcrumbs=array(
	'Luckydraws'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Luckydraw', 'url'=>array('index')),
	array('label'=>'Manage Luckydraw', 'url'=>array('admin')),
);
?>

<h1>Create Luckydraw</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>