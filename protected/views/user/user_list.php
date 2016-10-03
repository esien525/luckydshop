<?php include("js/cpanel_side_opening.php");?>
<div class="cpanel_holder">
<h22>Normal User List</h22>
<br/><br/>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->searchnuser(),
	'filter'=>$model,
	'columns'=>array(
		//'user_id',
		'user_name',
		'user_email',
		array('name'=>'password','value'=>'base64_decode($data->password)'),
		//'password2',
		//'user_type',
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
					   'label'=>'update dealer',
					   'url'=>'Yii::app()->createUrl("user/updatenuser", array("id"=>$data->user_id))',
				   ),
				   'delete' => array
				   (
					   'label'=>'delete dealer',
					   'url'=>'Yii::app()->createUrl("user/deletenuser", array("id"=>$data->user_id))',
				   ),
			),
			
		),
	),
)); ?>

</div>
<?php include("js/cpanel_side_closing.php");?>

