<?php
$this->breadcrumbs=array(
	'Add Carts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AddCart', 'url'=>array('index')),
	array('label'=>'Create AddCart', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('add-cart-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Add Carts</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'add-cart-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ac_id',
		'ac_cart_id',
		'ac_product_id',
		'ac_quantity',
		'ac_amount',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
