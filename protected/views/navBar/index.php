<?php
$this->breadcrumbs=array(
	'Nav Bars',
);

$this->menu=array(
	array('label'=>'Create NavBar', 'url'=>array('create')),
	array('label'=>'Manage NavBar', 'url'=>array('admin')),
);
?>

<h1>Nav Bars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
