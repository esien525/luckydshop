<?php
$this->breadcrumbs=array(
	'Nav Bars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NavBar', 'url'=>array('index')),
	array('label'=>'Manage NavBar', 'url'=>array('admin')),
);
?>

<h1>Create NavBar</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>