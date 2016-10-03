<?php
$this->breadcrumbs=array(
	'Add Carts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AddCart', 'url'=>array('index')),
	array('label'=>'Manage AddCart', 'url'=>array('admin')),
);
?>

<h1>Create AddCart</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>