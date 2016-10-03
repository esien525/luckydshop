<?php include("js/cpanel_side_opening.php");?>
<div class="cpanel_holder">
<h22>Supervisor List</h22>
<br/><br/>

<?php echo $this->renderPartial('_formsupervisor', array('model'=>$model)); ?>

<br/><br/>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model1->searchsupervisor(),
	'filter'=>$model1,
	'columns'=>array(
		//'user_id',
		'user_name',
		'user_email',
		//'password',
		//'password2',
		array('name'=>'password','value'=>'base64_decode($data->password)'),
		'user_type',
		//'user_datejoin',
		'user_contactnumber',
		//'user_status',
		'last_login',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
			'buttons'=>array
			(
				'update' => array
				   (
					   'label'=>'update supervisor',
					   'url'=>'Yii::app()->createUrl("user/updatesupervisor", array("id"=>$data->user_id))',
				   ),
				'delete' => array
				   (
					   'label'=>'delete supervisor',
					   'url'=>'Yii::app()->createUrl("user/deletesupervisor", array("id"=>$data->user_id))',
				   ),
			),
		),
	),
)); ?>

</div>
<?php include("js/cpanel_side_closing.php");?>

