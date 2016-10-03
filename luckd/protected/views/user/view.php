<?php include("js/side_opening.php");?>
<div style="float:right"><?php echo CHtml::link('<button class="btn btn--wd btn--with-icon btn--sm wave">Back</button>',  array('admin')); ?></div>

<h4 class="pagestitle">User Info</h4>
<br/>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'user_id',
		//'user_name',
		'user_title',
		'user_firstname',
		'user_lastname',
		'user_email',
		array('name'=>'password','value'=>$model->getpassword($model->password)),
		//'password2',
		'user_contactnumber',
		
		/*'company_name',
		'company_tel1',
		'company_tel2',
		'company_fax',
		'company_email',
		'company_website',
		'company_address',
		'company_postcode',
		'company_state',*/
		'user_status',
		'user_datejoin',
		'last_login',
	),
)); ?>
<br/>
<div align="right">
<?php echo CHtml::link('<button class="submitbtn2">Update user info</button>',  array('update','id'=>$model->user_id)); ?>
</div>

<?php include("js/side_closing.php");?>