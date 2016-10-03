<?php include("js/side_opening.php");?>
<div style="float:right"><?php echo CHtml::link('<button class="btn btn--wd btn--with-icon btn--sm wave">+ Create New User</button>',  array('create')); ?></div>

<h4 class="pagestitle">System User List</h4>

<br/>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'user_id',
		'user_firstname',
		'user_lastname',
		'user_email',
		'user_type',
		//'user_contactnumber',
		//'password',
		//'password2',
		'user_datejoin',
		//'user_contactnumber',
		//'user_status',
		//'last_login',
		
		array(
			'class'=>'CButtonColumn',
			'htmlOptions'=>array(
                'width'=>'80',
                'style'=>'text-align:center',
             ),
		),
	),
)); ?>


<?php include("js/side_closing.php");?>