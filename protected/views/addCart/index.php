<?php
$this->breadcrumbs=array(
	'Add Carts',
);

$this->menu=array(
	array('label'=>'Create AddCart', 'url'=>array('create')),
	array('label'=>'Manage AddCart', 'url'=>array('admin')),
);
?>

<h1>Add Carts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
