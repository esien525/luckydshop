<?php
$this->breadcrumbs=array(
	'Luckydraws',
);

$this->menu=array(
	array('label'=>'Create Luckydraw', 'url'=>array('create')),
	array('label'=>'Manage Luckydraw', 'url'=>array('admin')),
);
?>

<h1>Luckydraws</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
